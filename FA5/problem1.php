<!DOCTYPE html>
<html>
<head>
    <title>Problem 1 - GET and POST</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>

<div class="container">
    <h1>Personal Information Webpage</h1>

    <div class="grid-two">
        <div>
            <h2>Using GET</h2>
            <form method="get" action="problem1.php" onsubmit="return confirmSubmit();">
                <label>First Name:</label>
                <input type="text" name="get_firstname" required>

                <label>Middle Name:</label>
                <input type="text" name="get_middlename" required>

                <label>Last Name:</label>
                <input type="text" name="get_lastname" required>

                <label>Date of Birth:</label>
                <input type="date" name="get_dob" required>

                <label>Address:</label>
                <textarea name="get_address" required></textarea>

                <button type="submit" name="get_submit">Submit GET</button>
            </form>
        </div>

        <div>
            <h2>Using POST</h2>
            <form method="post" action="problem1.php" onsubmit="return confirmSubmit();">
                <label>First Name:</label>
                <input type="text" name="post_firstname" required>

                <label>Middle Name:</label>
                <input type="text" name="post_middlename" required>

                <label>Last Name:</label>
                <input type="text" name="post_lastname" required>

                <label>Date of Birth:</label>
                <input type="date" name="post_dob" required>

                <label>Address:</label>
                <textarea name="post_address" required></textarea>

                <button type="submit" name="post_submit">Submit POST</button>
            </form>
        </div>
    </div>

    <?php
    if (isset($_GET['get_submit'])) {
        echo "<div class='result-box'>";
        echo "<h2>GET Result</h2>";
        echo "First Name: " . htmlspecialchars($_GET['get_firstname']) . "<br>";
        echo "Middle Name: " . htmlspecialchars($_GET['get_middlename']) . "<br>";
        echo "Last Name: " . htmlspecialchars($_GET['get_lastname']) . "<br>";
        echo "Date of Birth: " . htmlspecialchars($_GET['get_dob']) . "<br>";
        echo "Address: " . htmlspecialchars($_GET['get_address']) . "<br>";
        echo "</div>";
    }

    if (isset($_POST['post_submit'])) {
        echo "<div class='result-box'>";
        echo "<h2>POST Result</h2>";
        echo "First Name: " . htmlspecialchars($_POST['post_firstname']) . "<br>";
        echo "Middle Name: " . htmlspecialchars($_POST['post_middlename']) . "<br>";
        echo "Last Name: " . htmlspecialchars($_POST['post_lastname']) . "<br>";
        echo "Date of Birth: " . htmlspecialchars($_POST['post_dob']) . "<br>";
        echo "Address: " . htmlspecialchars($_POST['post_address']) . "<br>";
        echo "</div>";
    }
    ?>

    <div class="nav">
        <a class="btn" href="problem2.php">Next: Problem 2</a>
    </div>
</div>

</body>
</html>