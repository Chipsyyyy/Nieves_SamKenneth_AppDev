<?php
require "header.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo SITE_TITLE; ?></title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<div class="page-wrapper">

    <?php include "nav.php"; ?>

    <div class="hero">
        <p class="eyebrow">Technical-Summative Assessment 2</p>

        <h1>PHP Arrays and Predefined Functions</h1>

        <p>
            This website demonstrates PHP arrays, user-defined functions,
            predefined functions, include(), require(), and web-based design.
        </p>
    </div>

    <div class="dashboard-grid">
        <a href="activity1/fruit_directory.php" class="dashboard-card">
            <span>01</span>
            <h2>Fruit Directory</h2>
            <p>Displays 10 fruits using arrays and sorts them alphabetically.</p>
        </a>

        <a href="activity2/volume_shapes.php" class="dashboard-card">
            <span>02</span>
            <h2>Volume of Shapes</h2>
            <p>Computes shape volumes using user-defined PHP functions.</p>
        </a>

        <a href="activity3/resume.php" class="dashboard-card">
            <span>03</span>
            <h2>Student Resume</h2>
            <p>Shows a web-based resume connected using include and require.</p>
        </a>
    </div>

    <?php include "footer.php"; ?>

</div>

</body>
</html>