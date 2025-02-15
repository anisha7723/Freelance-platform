<?php
session_start(); // Ensure session is started
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freelancedb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from POST request
$job_id = $_POST['job_id'];
$employer_name = $_POST['employer_name'];
$user_id = $_POST['user_id'];
$job_title = $_POST['job_title'];
$application_date = date("Y-m-d");

// Insert into applications table
$stmt = $conn->prepare("INSERT INTO applications (user_id, employer_name, job_id, job_title, application_date) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("iiiss", $user_id, $employer_name, $job_id, $job_title, $application_date);

if ($stmt->execute()) {
    echo "You have successfully applied for the job!";
} else {
    echo "Error: Could not apply for the job.";
}

$stmt->close();
$conn->close();
?>
