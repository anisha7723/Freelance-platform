<?php
// Start output buffering to prevent any accidental output before headers
ob_start();

// Database connection details
$servername = "localhost";
$username = "root";
$password = ""; // Replace with your MySQL password
$dbname = "freelancedb"; // Your actual database name
$port = 3306; // Adjust if necessary

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Start a session
session_start();

// Initialize an error message variable
$error_message = "";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Prepare the SQL statement to fetch user details
    $stmt = $conn->prepare("SELECT user_id, password, user_type FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);

    // Execute the query
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Fetch the result
        $row = $result->fetch_assoc();
        $db_password = $row['password']; // Stored plain-text password or hashed password
        $user_id = $row['user_id']; // Fetch user_id from the database
        $user_type = $row['user_type'];

        // Check if the entered password matches the stored password
        if ($password === $db_password) { // For hashed password, use: password_verify($password, $db_password)
            // Set session variables
            $_SESSION['email'] = $email;
            $_SESSION['user_type'] = $user_type;
            $_SESSION['user_id'] = $user_id; // Set the user_id in the session

            // Log the user type and where it's redirecting to
            echo "User type: $user_type <br>";
            
            // Redirect based on user_type
            switch ($user_type) {
                case 'admin':
                    echo "Redirecting to admin_dashboard.php <br>";
                    header("Location: admin_dashboard.php");
                    exit();
                case 'freelancer':
                    echo "Redirecting to freelancer_home.html <br>";
                    header("Location: freelancer_home.php");
                    exit();
                case 'employer':
                    echo "Redirecting to employer_home.php <br>";
                    header("Location: employer_home.php");
                    exit();
                default:
                    echo "Invalid user type.";
                    exit();
            }
        } else {
            // Password is incorrect
            echo "Password mismatch <br>";
            $error_message = "Invalid email or password.";
        }
    } else {
        // Email is not registered
        echo "Email not found <br>";
        $error_message = "Invalid email or password.";
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
mysqli_close($conn);

// End the output buffering and send all output
ob_end_flush();
?>
