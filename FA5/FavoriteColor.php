<?php
session_start();

if (isset($_POST['submit'])) {
    $_SESSION['color1'] = $_POST['color1'];
    $_SESSION['color2'] = $_POST['color2'];
    $_SESSION['color3'] = $_POST['color3'];
    $_SESSION['color4'] = $_POST['color4'];
    $_SESSION['color5'] = $_POST['color5'];

    header("Location: ResultColors.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Problem 3 - Favorite Colors</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>

<div class="container">
    <h1>My 5 Favorite Colors</h1>

    <form method="post" action="" onsubmit="return confirmSubmit();">

        <label>Favorite Color 1</label>
        <input type="text" name="color1" placeholder="Black" required>

        <label>Favorite Color 2</label>
        <input type="text" name="color2" placeholder="White" required>

        <label>Favorite Color 3</label>
        <input type="text" name="color3" placeholder="Gray" required>

        <label>Favorite Color 4</label>
        <input type="text" name="color4" placeholder="Silver" required>

        <label>Favorite Color 5</label>
        <input type="text" name="color5" placeholder="Navy Blue" required>

        <button type="submit" name="submit">
            Send Colors
        </button>

    </form>

    <div class="nav">
        <a href="problem2.php" class="btn">Back</a>
    </div>

</div>

</body>
</html>