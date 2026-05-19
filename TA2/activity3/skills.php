<?php require "header.php"; ?>
<?php include "menu.php"; ?>

<div class="content-box">
    <h2>Skills</h2>

    <?php
    $skills = array(
        "Basic PHP Programming",
        "HTML and CSS",
        "Problem Solving",
        "Teamwork",
        "Basic Web Design",
        "Communication Skills"
    );
    ?>

    <ul>
        <?php
        foreach ($skills as $skill) {
            echo "<li>" . $skill . "</li>";
        }
        ?>
    </ul>

    <a href="index.php" class="back-link">Back to Resume</a>
</div>

<?php include "footer.php"; ?>