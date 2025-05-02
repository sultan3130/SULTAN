<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $conn = new mysqli("localhost", "root", "", "project");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO project (Username, Email, DOB, Password) VALUES (?, ?, ?, ?)");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }
    
    $stmt->bind_param("ssss", $Username, $Email, $DOB, $Password);

    // Sanitize and validate input data
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $DOB = $_POST['DOB'];
    $Password = ['Password'];

    // Execute the statement
        echo "New record created successfully";
    
        //Redirect
        header("location:login.html");

    // Close connections
    $stmt->close();
    $conn->close();
}
?>