<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //Retrieve form data
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

    //Database connection
    $conn = new mysqli("localhost", "root", "", "new")
    if ($conn->connect_error){
        die ("Connection failed : " . $conn->connect_error);
    }

    //Set query
    $conn->connect_query = ("SELECT from new WHERE $Username = ? and $Password = ?");
}
?>