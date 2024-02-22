<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'test');
    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed: " . $conn->connect_error);
    }

    // Retrieve password from the database based on the provided email
    $query = "SELECT password FROM registration WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $storedPassword = $row["password"];

        // Compare the submitted password with the stored password
        if ($password === $storedPassword) {
            echo '<script>alert("Login successful!")</script>';
            // Redirect to the user's dashboard or another appropriate page
            header("Location: addcart.php"); // Redirect to the plant.html page
            exit; // Terminate the current script to ensure the redirection takes effect
        } else {
            echo '<script>alert("Invalid email or password.")</script>';
        }
    } else {
        echo '<script>alert("User not found.")</script>';
    }

    // Close the database connection
    mysqli_close($conn);
}

?>