<?php
require "../header.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Activity 1 - Fruit Directory</title>
    <link rel="stylesheet" href="activity1.css">
</head>
<body>

<div class="page-wrapper">

    <?php include "../nav.php"; ?>

    <?php
    $fruits = array(
        array(
            "name" => "Mango",
            "image" => "../images/mango.jpg",
            "description" => "A sweet tropical fruit with soft yellow-orange flesh.",
            "facts" => "Mangoes are rich in vitamin C and vitamin A."
        ),
        array(
            "name" => "Apple",
            "image" => "../images/apple.jpg",
            "description" => "A crisp and sweet fruit commonly eaten as a healthy snack.",
            "facts" => "Apples contain fiber and help support digestion."
        ),
        array(
            "name" => "Banana",
            "image" => "../images/banana.jpg",
            "description" => "A soft yellow fruit that is easy to eat and gives quick energy.",
            "facts" => "Bananas are a good source of potassium."
        ),
        array(
            "name" => "Orange",
            "image" => "../images/orange.jpg",
            "description" => "A citrus fruit known for its refreshing sweet and sour taste.",
            "facts" => "Oranges are high in vitamin C."
        ),
        array(
            "name" => "Grapes",
            "image" => "../images/grapes.jpg",
            "description" => "Small round fruits that grow in bunches and can taste sweet or sour.",
            "facts" => "Grapes contain antioxidants that help protect the body."
        ),
        array(
            "name" => "Watermelon",
            "image" => "../images/watermelon.jpg",
            "description" => "A large fruit with green skin and juicy red flesh.",
            "facts" => "Watermelon contains a lot of water and helps hydration."
        ),
        array(
            "name" => "Pineapple",
            "image" => "../images/pineapple.jpg",
            "description" => "A tropical fruit with sweet yellow flesh and rough skin.",
            "facts" => "Pineapple contains bromelain, which helps digestion."
        ),
        array(
            "name" => "Papaya",
            "image" => "../images/papaya.jpg",
            "description" => "A soft orange fruit with black seeds inside.",
            "facts" => "Papaya helps support digestion."
        ),
        array(
            "name" => "Strawberry",
            "image" => "../images/strawberry.jpg",
            "description" => "A small red fruit with a sweet and slightly sour taste.",
            "facts" => "Strawberries are rich in antioxidants and vitamin C."
        ),
        array(
            "name" => "Avocado",
            "image" => "../images/avocado.jpg",
            "description" => "A creamy green fruit often used in salads, toast, and spreads.",
            "facts" => "Avocados contain healthy fats that support heart health."
        )
    );

    usort($fruits, function($a, $b) {
        return strcmp($a["name"], $b["name"]);
    });
    ?>

    <section class="section-header">
        <p class="eyebrow">Activity 1</p>
        <h1>Fresh Picks Directory</h1>
        <p>A modern fruit directory created using PHP arrays and sorted alphabetically.</p>
    </section>

    <div class="fruit-grid">
        <?php
        foreach ($fruits as $fruit) {
            echo "<div class='fruit-card'>";

            echo "<div class='fruit-image-box'>";
            echo "<img src='" . $fruit["image"] . "' alt='" . $fruit["name"] . "'>";
            echo "</div>";

            echo "<div class='fruit-content'>";
            echo "<span class='fruit-label'>Fruit Profile</span>";
            echo "<h2>" . $fruit["name"] . "</h2>";
            echo "<p class='description'>" . $fruit["description"] . "</p>";
            echo "<div class='facts'>";
            echo "<b>Quick Fact:</b><br>";
            echo $fruit["facts"];
            echo "</div>";
            echo "</div>";

            echo "</div>";
        }
        ?>
    </div>

    <?php include "../footer.php"; ?>

</div>

</body>
</html>