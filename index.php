<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personal portfolio</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <header>
        <nav>
            <!-- <img src="images/20240102_211037.jpg" alt="profile"> -->
            <h3>MANISH KUMAR</h3>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#contacts">Contacts</a></li>

            </ul>
        </nav>
    </header>

    <section id="Home">
        <div class="hero">
            <h1>WELOCOME TO MY PORTFOLIO</h1>
            <p>I am a web developer with a passion for creating stunning websites.</p>
            <a href="#projects" class="cta">See My Work</a>
        </div>
    </section>

    <!-- About Me Section -->
    <section id="about">
        <h2>About Me</h2>
        <div class="about-content">
            <img src="images/20240102_211037.jpg" alt="Profile Picture">
            <p>Hello! I’m a web developer with expertise in HTML, CSS, and JavaScript. I love building responsive and visually appealing websites. My goal is to create user-friendly and efficient web applications.</p>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects">
        <h2>Projects</h2>
        <div class="projects-container">
            <div class="project">
                <img src="project1.jpg" alt="Project 1">
                <h3>Project 1</h3>
                <p>Description of Project 1.</p>
                <a href="#" target="_blank">View Project</a>
                <a href="#" target="_blank">View Code</a>
            </div>
            <div class="project">
                <img src="project2.jpg" alt="Project 2">
                <h3>Project 2</h3>
                <p>Description of Project 2.</p>
                <a href="#" target="_blank">View Project</a>
                <a href="#" target="_blank">View Code</a>
            </div>
            <!-- Add more projects as needed -->
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills">
        <h2>Skills</h2>
        <ul class="skills-list">
            <li>HTML</li>
            <li>CSS</li>
            <li>JavaScript</li>
            <!-- Add more skills as needed -->
        </ul>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <h2>Contact Me</h2>
        <form action="mail.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="subject">subject:</label>
            <input type="text" id="subject" name="subject" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit" name="send">Send</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 My Portfolio. All rights reserved.</p>
        <div class="social-links">
            <a href="https://github.com" target="_blank">GitHub</a>
            <a href="https://linkedin.com" target="_blank">LinkedIn</a>
            <!-- Add more social links as needed -->
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
        