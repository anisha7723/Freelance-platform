<?php
// Define the path to the directory where resumes are stored
$uploadDir = 'upload/'; // This is the directory where the uploaded resumes are stored

// Ensure the 'file' parameter is passed and valid
if (isset($_GET['file'])) {
    // Decode the file path to get the actual file name
    $file = urldecode($_GET['file']); // Decode URL-encoded file path
    
    // Sanitize the file name to prevent malicious directory traversal (e.g., ../../)
    $file = basename($file);  // Ensures only the file name is passed, not any relative paths

    // Construct the full file path
    $filePath = $uploadDir . $file;

    // Check if the file exists in the specified directory
    if (file_exists($filePath)) {
        // Get file information
        $fileInfo = pathinfo($file);
        $fileExtension = strtolower($fileInfo['extension']);
        
        // Allowable file types (for inline viewing)
        $allowedExtensions = ['pdf', 'doc', 'docx', 'txt'];

        // Check if the file extension is supported for inline viewing
        if (in_array($fileExtension, $allowedExtensions)) {
            // Set the appropriate content type based on file type
            switch ($fileExtension) {
                case 'pdf':
                    header('Content-Type: application/pdf');
                    break;
                case 'doc':
                case 'docx':
                    header('Content-Type: application/msword');
                    break;
                case 'txt':
                    header('Content-Type: text/plain');
                    break;
                default:
                    echo 'Unsupported file format.';
                    exit;
            }

            // Set the content disposition header to display the file inline
            header('Content-Disposition: inline; filename="' . basename($file) . '"');
            
            // Read and output the file content
            readfile($filePath);
            exit;
        } else {
            echo 'Unsupported file format.';
        }
    } else {
        echo 'File not found or access denied.';
    }
} else {
    echo 'No file specified.';
}
?>
