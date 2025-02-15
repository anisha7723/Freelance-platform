<?php
// Database configuration
$servername = "localhost"; // Change to your server name
$username = "root"; // Change to your database username
$password = ""; // Change to your database password
$dbname = "freelancedb"; // Change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$job_title = $_POST['job-title'];
$job_description = $_POST['job-description'];
$job_category = $_POST['job-category'];
$job_hours = $_POST['job-hours'];
$job_pay = $_POST['job-pay'];
$job_type = $_POST['job-type'];
$job_deadline = $_POST['job-deadline'];
$job_skills = $_POST['job-skills'];
$employer_name = $_POST['employer_name'] ?? ''; // Use null coalescing operator to avoid undefined index

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO job_postings (job_title, job_description, job_category, job_hours, job_pay, job_type, job_deadline, job_skills, employer_name) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssiissss", $job_title, $job_description, $job_category, $job_hours, $job_pay, $job_type, $job_deadline, $job_skills, $employer_name);

// Execute the statement and check for success
if ($stmt->execute()) {
    echo "Job posted successfully!";
    header("Location: employer_home.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
