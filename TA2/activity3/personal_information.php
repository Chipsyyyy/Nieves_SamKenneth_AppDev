<?php
require "../header.php";

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

<!DOCTYPE html>
<html>
<head>
    <title>Personal Information</title>
    <link rel="stylesheet" href="activity3.css">
</head>
<body>

<div class="page-wrapper">

    <?php include "../nav.php"; ?>

    <div class="resume-page">
        <h1>Personal Information</h1>

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
    </div>

    <?php include "../footer.php"; ?>

</div>

</body>
</html>