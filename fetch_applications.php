<?php
// fetch_applications.php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "freelancedb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$job_id = $_GET['job_id'];

// Fetch applications from applied_jobs for the specified job_id
$stmt = $conn->prepare("SELECT applicant_name, applicant_email, applied_at FROM applied_jobs WHERE job_id = ?");
$stmt->bind_param("i", $job_id);
$stmt->execute();
$result = $stmt->get_result();

$applications = [];
while ($row = $result->fetch_assoc()) {
    $applications[] = $row;
}

echo json_encode($applications);

$stmt->close();
$conn->close();
?>
