<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Job Search Results</title>
    <style>
   /* General Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

a {
    text-decoration: none;
    color: white; /* Updated to match the color scheme */
}

body {
    background-image: url('image/bg1.jpeg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
  /* Ensure the body has no margin or padding */
body {
  
    font-family: Arial, sans-serif;
}

/* Header styles */
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #7d0552;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    height: 120px;
    width: 100%;
    box-sizing: border-box;
}

/* Logo image adjustments */
.logo img {
    max-height: 160px;
    width: 200px;
}

/* Navigation styling */
nav ul {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
    align-items: center;
}

nav ul li {
    margin-right: 20px;
}

nav ul li a {
    color: goldenrod;
    font-size: larger;
    font-weight: larger;
    text-decoration: none;
    transition: color 0.3s, background-color 0.3s;
    padding: 8px 12px;
}

nav ul li a:hover {
    color: plum;
    background-color: black;
    border-radius: 10px;
}

/* Styling for the search form */
.search-form {
    display: flex;
    align-items: center;
}

.search-form input[type="text"] {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    outline: none;
    font-size: 14px;
    margin-right: 5px;
    flex: 1; /* Adjusts to available space */
}

.search-form button {
    padding: 8px;
    border: none;
    width: auto;
    border-radius: 5px;
    background-color: goldenrod;
    color: black;
    cursor: pointer;
    font-weight: bold;
    font-size: 14px;
    transition: background-color 0.3s, color 0.3s;
}

.search-form button:hover {
    background-color: black;
    color: goldenrod;
}

/* Search bar and login button */
#login-btn {
    padding: 8px 15px;
    border: none;
    border-radius: 5px;
    background-color: white;
    color: #007bff;
    cursor: pointer;
}

#login-btn:hover {
    background-color: #0056b3;
    color: white;
}

/* Responsive header */
@media (max-width: 768px) {
    header {
        flex-direction: column;
        align-items: flex-start;
    }

    nav ul {
        flex-direction: column;
        width: 100%;
    }

    nav ul li {
        margin-bottom: 10px;
    }
}/* Global Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

/* Main content */

/* Job Cards Container */
.job-cards-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); /* Responsive grid */
    gap: 20px;  /* Spacing between cards */
    padding: 20px;
    justify-items: center; /* Center items */
}

/* Individual Job Card Styling */
.job-card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    max-width: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.job-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

/* Job Title */
.job-card h3 {
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 10px;
    font-weight: 600;
}

/* Job Description and Details */
.job-card p {
    color: #555;
    font-size: 1rem;
    margin-bottom: 10px;
}

.job-card strong {
    font-weight: 600;
    color: #333;
}

/* Apply Button */
.apply-button {
    background-color: #007bff;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1.1rem;
    text-align: center;
    transition: background-color 0.3s ease;
    margin-top: auto; /* Ensure it sticks at the bottom */
}

.apply-button:hover {
    background-color: #0056b3;
}

/* No jobs found message */
p {
    text-align: center;
    font-size: 1.2rem;
    color: #777;
    margin-top: 20px;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .job-cards-container {
        grid-template-columns: 1fr; /* Single column on small screens */
    }

    .job-card {
        padding: 15px; /* Slightly smaller padding on small screens */
    }

    .apply-button {
        font-size: 1rem; /* Smaller button text on small screens */
    }
}

/* Modal Styles */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
    overflow: auto;
}

.modal-content {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    width: 400px;
    position: relative;
}

.modal h2 {
    font-size: 1.8rem;
    color: #333;
    margin-bottom: 20px;
}

.modal .close {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 1.5rem;
    cursor: pointer;
}

.modal input[type="text"],
.modal input[type="email"],
.modal input[type="file"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: 1px solid #ddd;
    font-size: 1rem;
}

.modal button[type="submit"] {
    background-color: #28a745;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    width: 100%;
    cursor: pointer;
    font-size: 1.1rem;
    transition: background-color 0.3s ease;
}

.modal button[type="submit"]:hover {
    background-color: #218838;
}

/* Footer Styles */
footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px 0;
    margin-top: 20px;
}

footer p {
    margin: 0;
    font-size: 1rem;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .job-grid {
        grid-template-columns: 1fr;
    }

    .modal-content {
        width: 90%;
    }
}


    </style>
</head>
<body>

<header>
        <div class="logo">
            <img src="image/logo.png" alt="logo">
        </div>
        <nav>
            <ul>
                <li><a href="freelancer_home.php">Home</a></li>
                <li><a href="category.php">Categories</a></li>
                <li><a href="search.php">Jobs</a></li>
                <li><a href="freedash.php">Dashboard</a></li>
                <li>
                    <form class="search-form" action="search.php" method="GET">
                        <input type="text" name="search" placeholder="Search jobs...">
                        <button type="submit">Search</button>
                    </form>
                </li>
              
                    <li><a href="login.html">Logout</a></li>
               
            </ul>
        </nav>
    </header>

    <?php
        // Database connection details
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

        // Fetch the search term from the URL
        $searchTerm = isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '';

        // Prepare SQL query to fetch jobs based on the search term
        if ($searchTerm) {
            $stmt = $conn->prepare("SELECT * FROM job_postings WHERE job_category LIKE ?");
            $likeSearchTerm = "%" . $searchTerm . "%";
            $stmt->bind_param("s", $likeSearchTerm);
            $stmt->execute();
            $result = $stmt->get_result();
        } else {
            $sql = "SELECT * FROM job_postings";
            $result = $conn->query($sql);
        }

        if ($result->num_rows > 0) {
            echo "<div class='job-cards-container'>";
            while ($row = $result->fetch_assoc()) {
                echo "<div class='job-card'>";
                echo "<h3>" . htmlspecialchars($row['job_title']) . "</h3>";
                echo "<p><strong>Company:</strong> " . htmlspecialchars($row['employer_name']) . "</p>";
                echo "<p><strong>Description:</strong> " . htmlspecialchars($row['job_description']) . "</p>";
                echo "<p><strong>Pay:</strong> $" . htmlspecialchars($row['job_pay']) . "/hour</p>";
                echo "<p><strong>Type:</strong> " . htmlspecialchars($row['job_type']) . "</p>";
                echo "<p><strong>Hours:</strong> " . htmlspecialchars($row['job_hours']) . " hours/week</p>";
                echo "<button class='apply-button' onclick='showApplyForm(" . intval($row['id']) . ")'>Apply</button>";
                echo "</div>";
            }
            echo "</div>";
        } else {
            echo "<p style='text-align:center;'>No jobs found matching the search criteria.</p>";
        }

        $conn->close();
    ?>

    <div id="applyModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeApplyForm()">&times;</span>
            <h2>Apply for Job</h2>
            <form id="applyForm" method="POST" action="apply.php" enctype="multipart/form-data">
                <input type="hidden" id="job_id" name="job_id">
                <div>
                    <label for="applicant_name">Name:</label>
                    <input type="text" id="applicant_name" name="applicant_name" required>
                </div>
                <div>
                    <label for="applicant_email">Email:</label>
                    <input type="email" id="applicant_email" name="applicant_email" required>
                </div>
                <div>
                    <label for="resume">Resume (PDF, DOC, DOCX):</label>
                    <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
                </div>
                <button type="submit">Submit Application</button>
            </form>
        </div>
    </div>

    <script>
        function showApplyForm(jobId) {
            console.log("Apply button clicked for job ID:", jobId);
            document.getElementById('job_id').value = jobId;
            document.getElementById('applyModal').style.display = 'flex';
        }

        function closeApplyForm() {
            document.getElementById('applyModal').style.display = 'none';
        }

        window.onclick = function(event) {
            if (event.target === document.getElementById('applyModal')) {
                closeApplyForm();
            }
        }
    </script>

    <footer>
        <p>&copy; 2024 Your Company. All rights reserved.</p>
        <p>
            <a href="#">Privacy Policy</a> |
            <a href="#">Terms of Service</a>
        </p>
    </footer>

</body>
</html>
