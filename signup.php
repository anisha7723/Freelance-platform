<?php
// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Database configuration
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "freelancedb";
    $port = 3306;

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname, $port);

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $userType = $_POST['userType'];

    // Hash the password for security
   // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL query using prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO users (name, email, password, phone, user_type) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $password, $phone, $userType);

    // Execute the query
    if ($stmt->execute()) {
        echo "Registration successful!";
        header("Location: login.html"); // Redirect to the login page after successful registration
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    mysqli_close($conn);
} else {
    // If the method is not POST, return 405 error
    http_response_code(405);
    echo "Method not allowed";
}
?>
