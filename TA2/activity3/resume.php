<?php
require "../header.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Activity 3 - Student Resume</title>
    <link rel="stylesheet" href="activity3.css">
</head>
<body>

<div class="page-wrapper">

    <?php include "../nav.php"; ?>

    <section class="section-header">
        <p class="eyebrow">Activity 3</p>
        <h1>Student Resume</h1>
        <p>Web-based resume using include() and require() functions.</p>
    </section>

    <div class="resume-layout">
        <div class="resume-profile">
            <img src="../images/profile.jpg" alt="Profile Picture">
            <h2>Sam Kenneth Nieves</h2>
            <p>College Student</p>
        </div>

        <div class="resume-info">
            <h2>Resume Overview</h2>

            <p>
                This web-based resume contains my career objective, personal information,
                educational background, skills, affiliations, and work experience.
            </p>
        </div>
    </div>

    <div class="resume-menu">
        <a href="career_objective.php">Career Objective</a>
        <a href="personal_information.php">Personal Information</a>
        <a href="educational_attainment.php">Educational Attainment</a>
        <a href="skills.php">Skills</a>
        <a href="affiliation.php">Affiliation</a>
        <a href="work_experience.php">Work Experience</a>
    </div>

    <?php include "../footer.php"; ?>

</div>

</body>
</html>