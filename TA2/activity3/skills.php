<?php
require "../header.php";

$skills = array(
    "Basic PHP Programming",
    "HTML and CSS",
    "Problem Solving",
    "Team Collaboration",
    "Basic Web Design",
    "Communication Skills"
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Skills</title>
    <link rel="stylesheet" href="activity3.css">
</head>
<body>

<div class="page-wrapper">

    <?php include "../nav.php"; ?>

    <div class="resume-page">
        <h1>Skills</h1>

        <div class="skills-grid">
            <?php
            foreach ($skills as $skill) {
                echo "<div class='skill-item'>" . $skill . "</div>";
            }
            ?>
        </div>
    </div>

    <?php include "../footer.php"; ?>

</div>

</body>
</html>