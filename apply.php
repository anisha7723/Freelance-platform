<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freelancedb";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $job_id = $_POST['job_id'];
    $applicant_name = $_POST['applicant_name'];
    $applicant_email = $_POST['applicant_email'];
    
    // File upload handling
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['resume']['tmp_name'];
        $fileName = basename($_FILES['resume']['name']);
        $fileSize = $_FILES['resume']['size'];
        $fileType = $_FILES['resume']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // Allowed file extensions
        $allowedfileExtensions = array('pdf', 'doc', 'docx');

        // File size validation (max 5MB)
        $maxFileSize = 5 * 1024 * 1024; // 5MB
        if ($fileSize > $maxFileSize) {
            echo "<script>alert('File is too large. Maximum allowed size is 5MB.'); window.location.href='freelancer_home.php';</script>";
            exit;
        }

        if (in_array($fileExtension, $allowedfileExtensions)) {
            // Create a unique file name to prevent conflicts
            $uniqueFileName = time() . '_' . uniqid() . '.' . $fileExtension;

            // Specify the path where you want to save the uploaded file
            $uploadFileDir = 'upload/';
            $dest_path = $uploadFileDir . $uniqueFileName;

            // Move the file to the destination directory
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                // Insert the application into the database
                $stmt = $conn->prepare("INSERT INTO applied_jobs (job_id, applicant_name, applicant_email, resume_path, applied_at) VALUES (?, ?, ?, ?, NOW())");
                $stmt->bind_param("isss", $job_id, $applicant_name, $applicant_email, $dest_path);

                if ($stmt->execute()) {
                    echo "<script>alert('Application submitted successfully!'); window.location.href='freelancer_home.php';</script>";
                } else {
                    echo "<script>alert('Failed to submit application. Please try again.'); window.location.href='freelancer_home.php';</script>";
                }
            } else {
                echo "<script>alert('Error moving the uploaded file.'); window.location.href='freelancer_home.php';</script>";
            }
        } else {
            echo "<script>alert('Upload failed. Allowed file types: " . implode(", ", $allowedfileExtensions) . ".'); window.location.href='freelancer_home.php';</script>";
        }
    } else {
        echo "<script>alert('Error with file upload.'); window.location.href='freelancer_home.php';</script>";
    }
}

$conn->close();
?>
