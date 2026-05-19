<?php require "header.php"; ?>
<?php include "menu.php"; ?>

<div class="content-box">
    <h2>Personal Information</h2>

    <?php
    $personalInfo = array(
        "Full Name" => "Sam Kenneth Nieves",
        "Age" => "20 years old",
        "Birthday" => "January 12, 2006",
        "Address" => "Manila, Philippines",
        "Course" => "Bachelor of Science in Information Technology",
        "Email" => "samkennethnieves@gmail.com",
        "Contact Number" => "09123456789"
    );
    ?>

    <table>
        <?php
        foreach ($personalInfo as $label => $value) {
            echo "<tr>";
            echo "<th>" . $label . "</th>";
            echo "<td>" . $value . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <a href="index.php" class="back-link">Back to Resume</a>
</div>

<?php include "footer.php"; ?>