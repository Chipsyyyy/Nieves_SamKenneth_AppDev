<?php
$firstName = "";
$middleName = "";
$lastName = "";

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstname'];
    $middleName = $_POST['middlename'];
    $lastName = $_POST['lastname'];

    setcookie("firstname", $firstName, time() + 10, "/");
    setcookie("middlename", $middleName, time() + 20, "/");
    setcookie("lastname", $lastName, time() + 30, "/");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Problem 2 - Cookies</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>

<div class="container">
    <h1>Personal Information Using Cookies</h1>

    <form method="post" action="problem2.php" onsubmit="return confirmSubmit();">
        <label>First Name:</label>
        <input type="text" name="firstname" required>

        <label>Middle Name:</label>
        <input type="text" name="middlename" required>

        <label>Last Name:</label>
        <input type="text" name="lastname" required>

        <button type="submit" name="submit">Create Cookies</button>
    </form>

    <div class="result-box">
        <h2>Cookie Result</h2>

        <?php
        if (isset($_POST['submit'])) {
            echo "<p class='success'>Cookies have been created.</p>";
            echo "<p>First Name cookie will last for 10 seconds.</p>";
            echo "<p>Middle Name cookie will last for 20 seconds.</p>";
            echo "<p>Last Name cookie will last for 30 seconds.</p>";
            echo "<p>Refresh the page to check if the cookies are still available.</p>";
        }

        if (isset($_COOKIE['firstname'])) {
            echo "First Name: " . htmlspecialchars($_COOKIE['firstname']) . "<br>";
        } else {
            echo "First Name cookie is not available or expired.<br>";
        }

        if (isset($_COOKIE['middlename'])) {
            echo "Middle Name: " . htmlspecialchars($_COOKIE['middlename']) . "<br>";
        } else {
            echo "Middle Name cookie is not available or expired.<br>";
        }

        if (isset($_COOKIE['lastname'])) {
            echo "Last Name: " . htmlspecialchars($_COOKIE['lastname']) . "<br>";
        } else {
            echo "Last Name cookie is not available or expired.<br>";
        }
        ?>
    </div>

    <div class="nav">
        <a class="btn" href="problem1.php">Back</a>
        <a class="btn" href="FavoriteColor.php">Next: Problem 3</a>
    </div>
</div>

</body>
</html>