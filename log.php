<?php
// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Connect to the database (replace with your database credentials)
    $conn = new mysqli("localhost", "username", "password", "users");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query the database for the user
    $query = "SELECT * FROM user_data WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    // Check if a matching user is found
    if ($result->num_rows == 1) {
        // Set session variables
        $_SESSION["username"] = $username;

        // Redirect to a welcome page
        header("Location: welcome.php");
        exit();
    } else {
        // Display an error message
        echo "Invalid username or password.";
    }

    // Close the database connection
    $conn->close();
}
?>
