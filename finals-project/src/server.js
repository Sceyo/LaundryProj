const express = require("express");
const mysql = require("mysql"); // Import mysql2 package

const app = express();

app.use(express.json()); // To parse JSON requests

const port = process.env.PORT || 3000;

// Create a MySQL connection
const connection = mysql.createConnection({
  host: '127.0.0.1',
  user: 'root',
  password: '',
  database: 'laundrycim'
});

// Connect to MySQL
connection.connect((err) => {
  if (err) {
    console.error('Error connecting to database:', err);
    return;
  }
  console.log('Connected to MySQL database');
});

// Pass the connection to your routes
app.use((req, res, next) => {
  req.db = connection; // Adding the connection to the request object
  next();
});


app.post('/signup', (req, res) => {
    const { email, password } = req.body;
  
    // Check if email and password are provided
    if (!email || !password) {
      return res.status(400).json({ error: 'Email and password are required' });
    }
  
    // Insert user into the 'users' table
    const addUserQuery = 'INSERT INTO user (username, password) VALUES (?, ?)';
    req.db.query(addUserQuery, [email, password], (err, results) => {
      if (err) {
        console.error('Error inserting user:', err);
        return res.status(500).json({ error: 'Failed to create user' });
      }
      return res.status(200).json({ message: 'User created successfully' });
    });
  });
  

// Example route for handling database operations

app.listen(port, () => console.log(`Server running on port ${port}`));
