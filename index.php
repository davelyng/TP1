<?php
$name = "Davelyn";
$nameComplete = "Davelyn Grace I. Obejero";
$profession = "Web Developer";
$info = "I’m an aspiring web developer with a focus on JavaScript, PHP, HTML, and CSS. My goal is to create clear, effective, and user-friendly websites. I strive to merge functionality with design to deliver impactful web experiences. Always eager to learn and tackle new challenges, I am committed to growing my skills and staying updated with industry trends.";
$skills = ["JavaScript", "HTML", "CSS", "PHP", "MySQL"];
$contactEmail = "davelynobejero@gmail.com";
$profilePic = "profile.jpg";
$githubProfile = "https://github.com/davelyng";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo"><?php echo $name; ?></div>
        <nav>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <section id="home" class="section">
        <div class="home">
            <div class="home-img">
                <img src="<?php echo $profilePic; ?>" alt="Picture of <?php echo $name; ?>">
            </div>
            <div class="home-content">
                <h1>Hi! I'm <span class="highlight"><?php echo $nameComplete; ?></span></h1>
                <h3><?php echo $profession; ?></h3>
                <a href="#contact" class="btn">Get in Touch</a>
            </div>
        </div>
    </section>

    <section id="about" class="section">
        <div class="card">
            <h2>About Me</h2>
            <p><?php echo $info; ?></p>
        </div>
    </section>

    <section id="skills" class="section">
        <div class="card">
            <h2>Skills</h2>
            <ul class="skills-list">
                <?php foreach ($skills as $skill): ?>
                    <li><?php echo $skill; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <section id="contact" class="section">
        <div class="card">
            <h2>Contact</h2>
            <p>Email: <a href="mailto:<?php echo $contactEmail; ?>" class="contact-email"><?php echo $contactEmail; ?></a></p>
            <p>GitHub: <a href="<?php echo $githubProfile; ?>" target="_blank" class="profile-link">View my Profile</a></p>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 <?php echo $name; ?>. All rights reserved.</p>
    </footer>
</body>
</html>
