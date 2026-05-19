<!DOCTYPE html>
<html>
<head>
    <title>Fruit Directory</title>
    <link rel="stylesheet" href="activity1.css">
</head>
<body>

<div class="container">
    <h1>My Fruits</h1>
    <p class="subtitle">A simple fruit directory using PHP arrays</p>

    <?php
    $fruits = array(
        array(
            "name" => "Apple",
            "image" => "../images/apple.jpg",
            "description" => "Color Red",
            "facts" => "Apples are rich in fiber and vitamin C. They are also a healthy snack that can help support digestion."
        ),
        array(
            "name" => "Avocado",
            "image" => "../images/avocado.jpg",
            "description" => "Green Fruit",
            "facts" => "Avocado is rich in healthy fats and fiber. It is often used in salads, sandwiches, and healthy meals."
        ),
        array(
            "name" => "Banana",
            "image" => "../images/banana.jpg",
            "description" => "Color Yellow",
            "facts" => "Bananas are a good source of potassium and fiber. They can help give energy and support heart health."
        ),
        array(
            "name" => "Grapes",
            "image" => "../images/grapes.jpg",
            "description" => "Small Fruit",
            "facts" => "Grapes contain antioxidants and vitamins. They are sweet, juicy, and easy to eat as a snack."
        ),
        array(
            "name" => "Mango",
            "image" => "../images/mango.jpg",
            "description" => "Sweet Fruit",
            "facts" => "Mangoes are rich in vitamin C and vitamin A. They are known for their sweet taste and bright yellow color."
        ),
        array(
            "name" => "Orange",
            "image" => "../images/orange.jpg",
            "description" => "Citrus Fruit",
            "facts" => "Oranges are high in vitamin C. They help support the immune system and are often used for juice."
        ),
        array(
            "name" => "Papaya",
            "image" => "../images/papaya.jpg",
            "description" => "Tropical Fruit",
            "facts" => "Papaya is soft, sweet, and rich in vitamins. It also contains enzymes that can help with digestion."
        ),
        array(
            "name" => "Pineapple",
            "image" => "../images/pineapple.jpg",
            "description" => "Spiky Fruit",
            "facts" => "Pineapple is a tropical fruit with a sweet and sour taste. It contains vitamin C and bromelain."
        ),
        array(
            "name" => "Strawberry",
            "image" => "../images/strawberry.jpg",
            "description" => "Color Red",
            "facts" => "Strawberries are sweet fruits that contain vitamin C and antioxidants. They are often used in desserts."
        ),
        array(
            "name" => "Watermelon",
            "image" => "../images/watermelon.jpg",
            "description" => "Juicy Fruit",
            "facts" => "Watermelon contains a lot of water, which helps keep the body hydrated. It is refreshing and sweet."
        )
    );

    usort($fruits, function($a, $b) {
        return strcmp($a["name"], $b["name"]);
    });
    ?>

    <table>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Facts</th>
        </tr>

        <?php
        foreach ($fruits as $fruit) {
            echo "<tr>";
            echo "<td><img src='" . $fruit["image"] . "' alt='" . $fruit["name"] . "'></td>";
            echo "<td class='fruit-name'>" . $fruit["name"] . "</td>";
            echo "<td>" . $fruit["description"] . "</td>";
            echo "<td>" . $fruit["facts"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

</body>
</html>