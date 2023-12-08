const router = require("express").Router();
const jwt = require("jsonwebtoken");
const database = require("../prisma/database");
const bcrypt = require("bcrypt");

const saltRounds = 10;

router.post("/signup", async (request, response) => {
  const hashedPassword = await bcrypt.hash(request.body.password, saltRounds);

  const newUser = {
    name: request.body.name,
    email: request.body.email,
    password: hashedPassword,
  };

  await database.user.create({
    data: newUser,
  });

  response.status(201).json({
    message: "Account registration successful.",
  });
});

router.post("/login", async (request, response) => {
  const user = await database.user.findFirst({
    where: {
      email: request.body.email,
    },
  });

  if (!user) return response.status(404).json({ message: "User not found." });

  const isPasswordValid = await bcrypt.compare(
    request.body.password,
    user.password
  );

  if (!isPasswordValid)
    return response.status(400).json({ message: "Invalid Password." });

  const token = jwt.sign({ email: user.email }, "12345678", {
    expiresIn: 86400,
  });

  // Create a new UserSession record
  await database.userSession.create({
    data: {
      userId: user.id,
      token: token,
      expired: new Date(Date.now() + 86400 * 1000), // Expires in 24 hours
    },
  });

  response.status(200).json({
    user,
    accessToken: token,
  });
});

router.post("/logout", async (request, response) => {
  const token = request.headers.authorization.split(" ")[1];

  const userSession = await database.userSession.findFirst({
    where: {
      token: token,
    },
  });

  if (!userSession)
    return response.status(404).json({ message: "Session not found." });

  await database.userSession.delete({
    where: {
      id: userSession.id,
    },
  });

  response.status(200).json({
    message: "Logout successful.",
  });
});

module.exports = router;
