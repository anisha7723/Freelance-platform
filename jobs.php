<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelance Jobs</title>
    <link rel="stylesheet" href="styles.css">
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
main {
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* Job Category Title */
h2 {
    font-size: 2rem;
    color: #333;
    margin-bottom: 20px;
    text-align: center;
}

/* Job Grid Layout */
.job-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 20px;
}

/* Job Item */
.job-item {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 15px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.job-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.job-item h3 {
    font-size: 1.5rem;
    color: #007bff;
    margin-bottom: 10px;
}

.job-item p {
    color: #555;
    margin-bottom: 10px;
}

/* Apply Button */
.apply-button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s ease;
}

.apply-button:hover {
    background-color: #0056b3;
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
                <li><a href="home.php">Home</a></li>
               
                <li><a href="categories.php">categories</a></li>
              
                <li><a href="#about">About</a></li>
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

    <main>
        <h2>Jobs in Category: <?php echo htmlspecialchars($_GET['category']); ?></h2>
        <div class="job-grid">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "freelancedb";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $category = isset($_GET['category']) ? $_GET['category'] : '';

            if ($category) {
                $sql = "SELECT * FROM job_postings WHERE job_category = '$category'";
            } else {
                $sql = "SELECT * FROM job_postings";
            }

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='job-item'>";
                    echo "<h3>" . htmlspecialchars($row['job_title']) . "</h3>";
                    echo "<p><strong>Description:</strong> " . htmlspecialchars($row['job_description']) . "</p>";
                    echo "<p><strong>Pay:</strong> RS" . htmlspecialchars($row['job_pay']) . "/hour</p>";
                    echo "<p><strong>company:</strong> $" . htmlspecialchars($row['employer_name']) . "</p>";
                    echo "<p><strong>Type:</strong> " . htmlspecialchars($row['job_type']) . "</p>";
                    echo "<p><strong>Hours:</strong> " . htmlspecialchars($row['job_hours']) . " hours/week</p>";
                    echo "<button class='apply-button' onclick='showApplyForm(" . intval($row['id']) . ")'>Apply</button>";
                    echo "</div>";
                }
            } else {
                echo "<p>No jobs found in this category.</p>";
            }

            $conn->close();
            ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Freelance Platform. All rights reserved.</p>
    </footer>

    <!-- Apply Form Modal -->
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

    <!-- JavaScript for Modal -->
    <script>
        function showApplyForm(jobId) {
            document.getElementById('job_id').value = jobId;
            document.getElementById('applyModal').style.display = 'flex';
        }

        function closeApplyForm() {
            document.getElementById('applyModal').style.display = 'none';
        }
    </script>
</body>
</html>
