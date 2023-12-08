const authenticateToken = require("../middlewares/authenticateToken");
const database = require("../prisma/database");
const router = require("express").Router();

router.get("/:id", authenticateToken, async (request, response) => {
  const user = await database.user.findUnique({
    where: {
      id: Number(request.params.id),
    },
    select: {
      email: true,
      id: true,
      name: true,
      posts: {
        select: {
          id: true,
          title: true,
          content: true,
        },
      },
    },
  });

  if (!user) {
    return response.status(404).json({ message: "User not found" });
  }
  return response.status(200).json({ data: user });
});

router.post("/posts", authenticateToken, async (request, response) => {
  const post = {
    title: request.body.title,
    content: request.body?.content ?? null,
    authorId: request.body.authorId,
  };

  const newPost = await database.post.create({
    data: post,
  });

  return response.status(201).json({ data: newPost });
});

router.patch("/posts/:id", authenticateToken, async (request, response) => {
  const post = await database.post.findUnique({
    where: {
      id: Number(request.params.id),
    },
  });

  if (!post) {
    return response.status(404).json({ message: "Post not found" });
  }

  const updatedPost = await database.post.update({
    where: {
      id: Number(request.params.id),
    },
    data: {
      title: request.body.title,
      content: request.body.content,
    },
  });

  return response.status(200).json({ data: updatedPost });
});

router.delete("/posts/:id", authenticateToken, async (request, response) => {
  const post = await database.post.findUnique({
    where: {
      id: Number(request.params.id),
    },
  });

  if (!post) {
    return response.status(404).json({ message: "Post not found" });
  }

  await database.post.delete({
    where: {
      id: Number(request.params.id),
    },
  });

  return response.status(200).json({ message: "Post deleted successfully" });
});

module.exports = router;
