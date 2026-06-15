<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Favorite Colors Stored in Session</h1>

    <?php
    if (isset($_SESSION['color1'])) {

        $colors = array(
            $_SESSION['color1'],
            $_SESSION['color2'],
            $_SESSION['color3'],
            $_SESSION['color4'],
            $_SESSION['color5']
        );

        for ($i = 0; $i < count($colors); $i++) {
            $color = htmlspecialchars($colors[$i]);

            echo "
            <div class='color-card'>
                <h2>Color " . ($i + 1) . "</h2>

                <div style='
                    width:100%;
                    height:80px;
                    background-color:$color;
                    border:2px solid black;
                    border-radius:10px;
                    margin:15px 0;'>
                </div>

                <p><strong>$color</strong></p>
            </div>
            ";
        }

    } else {
        echo "
        <div class='result-box'>
            <h2>No Session Found</h2>
            <p>Please enter your favorite colors first.</p>
        </div>
        ";
    }
    ?>

    <div class="nav">
        <a href="FavoriteColor.php" class="btn">Enter Again</a>
        <a href="problem1.php" class="btn">Home</a>
    </div>

</div>

</body>
</html>