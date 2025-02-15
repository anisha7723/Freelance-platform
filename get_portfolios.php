<?php
// Database connection
$host = 'localhost'; 
$dbname = 'freelancedb';
$username = 'root';
$password = '';
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Get user_id from the request
$user_id = $_GET['applicant_email'];

// Fetch portfolio items for the given user
$sql = "SELECT * FROM portfolios WHERE user_id = :user_id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':user_id', $user_id);
$stmt->execute();
$portfolios = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Return the data as JSON
echo json_encode($portfolios);
?>
