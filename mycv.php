<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>My CV</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #FF69B4, #C71585);
            color: #fff;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 900px;
            background: rgba(255, 255, 255, 0.95);
            padding: 20px;
            margin: auto;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            color: #333;
        }
        h1, h2 {
            background-color: #C71585;
            color: white;
            padding: 12px;
            border-radius: 8px;
            margin-top: 30px;
        }
        .profile-img {
            display: block;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 20px auto;
            border: 3px solid #FF1493;
            object-fit: cover;
        }
        ul {
            list-style-type: square;
            padding-left: 20px;
        }
        li {
            margin: 5px 0;
        }
        strong {
            color: #FF1493;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-style: italic;
            color: #666;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #FF1493;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        #js-message {
            text-align: center;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
    <script>
        window.onload = function () {
            alert("Welcome to my CV!");
        };
        function showMessage() {
            document.getElementById("js-message").textContent = "Thank you for visiting my profile!";
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>My Personal Information</h1>
        <img class="profile-img" src="profile.jpg" alt="Profile Picture">
        <p><strong>Name:</strong> Bayan</p>
        <p><strong>Surname:</strong> Abou Takieh</p>
        <p><strong>Student Number:</strong> 2210205556</p>
        <p><strong>Phone Number:</strong> 0531392067</p>
        <p><strong>Email:</strong> aboutakiehbayan@gmail.com</p>
        <p>I am a second-year Computer Engineering student at Karabuk University.</p>

        <h2>My Skills</h2>
        <ul>
            <li><strong>Programming Languages:</strong> C, Java, HTML, CSS, JavaScript, PHP</li>
            <li><strong>Database Skills:</strong> SQL, MySQL, triggers, normalization, MongoDB basics</li>
            <li><strong>Office Applications:</strong> Word, Excel</li>
            <li><strong>Data Structures:</strong> Good understanding and application</li>
            <li><strong>Problem-Solving:</strong> Strong debugging and fast resolution</li>
            <li><strong>Teamwork:</strong> Excellent in collaboration and project development</li>
        </ul>

        <h2>Work Experience</h2>
        <ul>
            <li><strong>Intern (2024):</strong> Assisted in backend development using PHP and MySQL.</li>
            <li><strong>Freelancer:</strong> Built personal websites and mobile apps for clients.</li>
        </ul>

        <h2>Education</h2>
        <ul>
            <li><strong>Karabük University:</strong> B.Sc. in Computer Engineering (2022 – Present)</li>
            <li><strong> High School:</strong> Graduated in 2022</li>
        </ul>

        <h2>Projects</h2>
        <ul>
            <li><strong>Student Management System:</strong> Java + MySQL-based desktop app</li>
            <li><strong>Portfolio Website:</strong> Built with HTML, CSS, JavaScript</li>
        </ul>

        <h2>Language Skills</h2>
        <ul>
            <li><strong>Arabic:</strong> Excellent</li>
            <li><strong>Turkish:</strong> Excellent</li>
            <li><strong>English:</strong> Very Good</li>
        </ul>

        <h2>Contact Me</h2>
        <form onsubmit="event.preventDefault(); alert('Message sent (simulation).');">
            <label>Your Name:</label>
            <input type="text" name="name" required>
            <label>Your Email:</label>
            <input type="email" name="email" required>
            <label>Your Message:</label>
            <textarea name="message" rows="5" required></textarea>
            <button type="submit">Send Message</button>
        </form>

        <a href="cv.pdf" download>
            <button>Download My CV (PDF)</button>
        </a>

        <button onclick="showMessage()">Click Me</button>
        <div id="js-message"></div>

        <div class="footer">
            <p>© 2025 Bayan Abou Takieh | Computer Engineering Student</p>
        </div>
    </div>
</body>
</html>
