<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelance Categories</title>
    <link rel="stylesheet" href="category.css">
    <link rel="stylesheet" href="header.css">
    <style>
        /* body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f6f8;
        } */

        body {
    background-image: url('image/bg1.jpeg');
    background-size: cover; /* Ensures the image covers the entire background */
    background-position: center; /* Centers the image */
    background-repeat: no-repeat; /* Prevents the image from repeating */
}

        header {
            display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: purple;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    height: 120px;
        }
        .logo img {
    height: 180px; /* Adjust height as needed */
    width: auto

        }

        nav ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin-right: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        .search-login {
            display: flex;
            align-items: center;
        }

        #search-bar {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-right: 10px;
        }

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

        main {
            padding: 20px;
        }

        .category-list {
            max-width: 800px;
            margin: auto;
            color: white;
        }

        .category-grid {
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px; 
           
        }
       
        

        .category-item {
        text-align: center; 
        width: 80%;
        height: auto;
        padding: 20px;
        border-radius: 10px;
        color: white;
        background-size: cover;
        background-position: center;
        background-repeat:no-repeat;
        margin: 10px; 
       box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); 
       box-sizing: border-box;       
}  



        .category-image {
         width: 100%; /* Makes the image responsive */
         max-width: 300px; /* Sets a maximum width for the image */
         height: auto; /* Keeps the image aspect ratio */
         display: block;
         margin: 0 auto 20px; /* Centers the image and adds spacing */
}
        


        /* .category-item {
            background-color: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        } */

        .category-item h3 {
            margin-bottom: 10px;
        }
        .category-item h3 a{
            text-decoration: none;
            color: #FF69B4;
            font-size: larger;
        }

        footer {
            background-color: purple;;
            color: white;
            text-align: center;
            padding: 15px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>


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
<body>
    <main>
        <section class="category-list">
            <h2>Freelance Job Categories</h2>
            <div class="category-grid">
               
                <div class="category-item" style="background-image: url('image/back.jpeg'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 20px; border-radius: 10px; color: white;">
                     <img src="image/web.jpeg" alt="Web Development" class="category-image">
                     <h3><a href="jobs.php?category=Web-dev">Web Development</a></h3>
                     <p>Explore projects involving front-end and back-end web development, including HTML, CSS, JavaScript, and frameworks like React and Node.js.</p>
                </div>

                <div class="category-item" style="background-image: url('image/back.jpeg'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 20px; border-radius: 10px; color: white;">
                    <img src="image/graph.jpeg" alt="Graphic Design" class="category-image">
                    <h3><a href="jobs.php?category=graphic-design">Graphic Design</a></h3>
                    <p>Find jobs requiring expertise in creating visual content, including logo design, branding, illustrations, and UI/UX design.</p>
                </div>
                <div class="category-item" style="background-image: url('image/back.jpeg'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 20px; border-radius: 10px; color: white;">
                    <img src="image/content.jpeg" alt="Content Writing" class="category-image">
                    <h3><a href="jobs.php?category=content-writing">Content Writing</a></h3>
                    <p>Browse opportunities for creative writers, copywriters, and editors for content creation, blogging, and marketing.</p>
                </div>
                <div class="category-item" style="background-image: url('image/back.jpeg'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 20px; border-radius: 10px; color: white;">
                    <img src="image/marketing.jpeg" alt="Marketing" class="category-image">
                    <h3><a href="jobs.php?category=marketing">Marketing</a></h3>
                    <p>Freelance jobs in digital marketing, SEO, social media management, and advertising campaigns.</p>
                </div>
                <div class="category-item" style="background-image: url('image/back.jpeg'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 20px; border-radius: 10px; color: white;">
                    <img src="image/education.jpeg" alt="Education" class="category-image">
                    <h3><a href="jobs.php?category=education">Education</a></h3>
                    <p>Discover app development projects, including iOS and Android, and frameworks like Flutter and React Native.</p>
                </div>
                <div class="category-item" style="background-image: url('image/back.jpeg'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 20px; border-radius: 10px; color: white;">
                    <img src="image/video.jpeg" alt="Video Editing" class="category-image">
                    <h3><a href="jobs.php?category=Video-Editing">Video Editing</a></h3>
                    <p>Opportunities for video editors specializing in content creation for YouTube, marketing videos, and film editing.</p>
                </div>
                <div class="category-item" style="background-image: url('image/back.jpeg'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 20px; border-radius: 10px; color: white;">
                    <img src="image/translate.jpeg" alt="Translation" class="category-image">
                    <h3><a href="jobs.php?category=Translation">Translation</a></h3>
                    <p>Find jobs translating content from one language to another, including documents, books, and website localization.</p>
                </div>
                <div class="category-item" style="background-image: url('image/back.jpeg'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 20px; border-radius: 10px; color: white;">
                    <img src="image/design.jpeg" alt="Designing" class="category-image">
                    <h3><a href="jobs.php?category=Designing">Designing</a></h3>
                    <p>Find jobs to create a design for our company on a project basis to deliver customized visual solutions.</p>
                </div>
            </div>
            
                <!-- <section class="category-list">
                    <h2>Freelance Job Categories</h2>
                    <div class="category-grid"> -->
                        <?php
                        // Include the PHP code to fetch and display jobs as shown above here
                        
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freelancedb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $job_title = $_POST['job-title'];
    $job_description = $_POST['job-description'];
    $job_category = $_POST['job-category'];
    $job_hours = $_POST['job-hours'];
    $job_pay = $_POST['job-pay'];
    $job_type = $_POST['job-type'];
    $job_deadline = $_POST['job-deadline'];
    $employer_name = $_POST['employer_name'];

    $sql = "INSERT INTO job_postings (job_title, job_description, job_category, job_hours, job_pay, job_type, job_deadline, employer_name) 
            VALUES ('$job_title', '$job_description', '$job_category', $job_hours, $job_pay, '$job_type', '$job_deadline', '$employer_name')";

    if ($conn->query($sql) === TRUE) {
        echo "New job posted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

                        
                    </div>
                </section>
            
            
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Freelance Platform. All rights reserved.</p>
    </footer>

    <script>
        // Redirect to login page
        document.getElementById('login-btn').addEventListener('click', function() {
            window.location.href = 'login.html'; // Redirect to login page
        });

        // Placeholder search function
        document.getElementById('search-bar').addEventListener('keyup', function(e) {
            if (e.key === 'Enter') {
                alert('Searching for: ' + this.value);
                // Add search functionality here
            }
        });
    </script>
</body>
</html>
