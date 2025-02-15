<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "freelancedb";

 $conn = new mysqli($servername, $username, $password, $dbname);

 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }

session_start();

$title = $_POST['title'];
$description = $_POST['description'];
$project_link = $_POST['project_link'];
$user_id = $_SESSION['user_id'];

// Insert project data
$stmt = $conn->prepare("INSERT INTO portfolios (user_id, title, description, project_link) VALUES (?, ?, ?, ?)");
$stmt->bind_param("isss", $user_id, $title, $description, $project_link);
$stmt->execute();
$stmt->close();

// Redirect back to dashboard
header("Location: freelancer_home.php");
?>
