<?php
// Start session and include database connection
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "freelancedb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming the user ID is stored in the session for demo purposes
$user_id = $_SESSION['user_id'] ?? 1; // Default to user ID 1 for testing

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancer Dashboard</title>
    <link rel="stylesheet" href="freelancer_home.css">
</head>

<body>
    <!-- Include the header file -->
    <header>
        <div class="logo">
            <img src="image/logo.png" alt="logo">
        </div>
        <nav>
            <ul>
                <li><a href="freelance_home.php">Home</a></li>
                <li><a href="category.php">Categories</a></li>
                <li><a href="search.php">Jobs</a></li>
                <li><a href="freedash.php">Dashboard</a></li>
                <li><a href="#footer">Contact</a></li>
                <li><a href="#footer">About</a></li>
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
        <section class="categories">
            <h2>Explore Job Categories</h2>
            <div class="category-cards">
                <a href="jobs.php?category=Web-dev">
                    <div class="card">
                        <img src="image/web.jpeg" alt="Web Development" class="category-image">
                        <span>Technology</span>
                    </div>
                </a>
                <a href="jobs.php?category=Marketing">
                    <div class="card">
                        <img src="image/marketing.jpeg" alt="Marketing" class="category-image">
                        <span>Marketing</span>
                    </div>
                </a>
                <a href="jobs.php?category=Design">
                    <div class="card">
                        <img src="image/design.jpeg" alt="Design" class="category-image">
                        <span>Design</span>
                    </div>
                </a>
                <a href="jobs.php?category=Finance">
                    <div class="card">
                        <img src="image/finance.jpeg" alt="Finance" class="category-image">
                        <span>Finance</span>
                    </div>
                </a>
                <a href="jobs.php?category=Education">
                    <div class="card">
                        <img src="image/education.jpeg" alt="Education" class="category-image">
                        <span>Education</span>
                    </div>
                </a>
                <a href="jobs.php?category=Healthcare">
                    <div class="card">
                        <img src="image/health.jpeg" alt="Healthcare" class="category-image">
                        <span>Healthcare</span>
                    </div>
                </a>
            </div>
        </section>
        <h3>Available Jobs</h3>

        <section id="job" class="content-section visible">
           
            <?php
            $stmt = $conn->prepare("SELECT * FROM job_postings");
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='job-item'>";
                    echo "<h3>" . htmlspecialchars($row['job_title']) . "</h3>";
                    echo "<p><strong>Description:</strong> " . htmlspecialchars($row['job_description']) . "</p>";
                    echo "<p><strong>company:</strong> $" . htmlspecialchars($row['employer_name']) . "</p>";
                    echo "<p><strong>Pay:</strong> RS" . htmlspecialchars($row['job_pay']) . "/hour</p>";
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
        </section>
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

  


       

        <section class="contact">
            <h2>Need Assistance?</h2>
            <form>
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <textarea placeholder="Your Message" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </section>

        <section class="about">
            <h2>About Us</h2>
            <p>Learn more about our mission and values.</p>
        </section>
    </main>

    <footer>
        <ul>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">FAQs</a></li>
        </ul>
        <div class="social-media">
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">LinkedIn</a>
        </div>
    </footer>

   
</body>
<script>
        function showApplyForm(jobId) {
            document.getElementById('job_id').value = jobId;
            document.getElementById('applyModal').style.display = 'flex';
        }

        function closeApplyForm() {
            document.getElementById('applyModal').style.display = 'none';
        }

    </script>
</html>
