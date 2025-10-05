<?php
// formproj.php

// MySQL connection
$conn = mysqli_connect("localhost", "root", "", "adpproj");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get POST data
$name = $_POST['name'];
$roll = $_POST['roll'];
$branch = $_POST['branch'];
$year = $_POST['year'];
$email = $_POST['em'];
$phone = $_POST['ph'];

// Insert into database
$sql = "INSERT INTO reg_details (name, roll, branch, year, email, phone) 
        VALUES ('$name', '$roll', '$branch', '$year', '$email', '$phone')";

if (mysqli_query($conn, $sql)) {
    // Redirect to success page
    header("Location: regsucc.html");
    exit(); // always exit after header redirect
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>


