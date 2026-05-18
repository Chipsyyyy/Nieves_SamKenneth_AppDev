<?php
require "../header.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Activity 2 - Volume of Shapes</title>
    <link rel="stylesheet" href="activity2.css">
</head>
<body>

<div class="page-wrapper">

    <?php include "../nav.php"; ?>

    <?php
    function volumeCube($side) {
        return $side * $side * $side;
    }

    function volumeRectangularPrism($length, $width, $height) {
        return $length * $width * $height;
    }

    function volumeCylinder($radius, $height) {
        return pi() * $radius * $radius * $height;
    }

    function volumeCone($radius, $height) {
        return (1 / 3) * pi() * $radius * $radius * $height;
    }

    function volumeSphere($radius) {
        return (4 / 3) * pi() * $radius * $radius * $radius;
    }

    $shapes = array(
        array(
            "shape" => "Cube",
            "values" => "Side = 5",
            "formula" => "V = s³",
            "answer" => volumeCube(5)
        ),
        array(
            "shape" => "Right Rectangular Prism",
            "values" => "Length = 8, Width = 4, Height = 6",
            "formula" => "V = l × w × h",
            "answer" => volumeRectangularPrism(8, 4, 6)
        ),
        array(
            "shape" => "Cylinder",
            "values" => "Radius = 3, Height = 10",
            "formula" => "V = πr²h",
            "answer" => volumeCylinder(3, 10)
        ),
        array(
            "shape" => "Cone",
            "values" => "Radius = 4, Height = 9",
            "formula" => "V = 1/3πr²h",
            "answer" => volumeCone(4, 9)
        ),
        array(
            "shape" => "Sphere",
            "values" => "Radius = 6",
            "formula" => "V = 4/3πr³",
            "answer" => volumeSphere(6)
        )
    );
    ?>

    <section class="section-header">
        <p class="eyebrow">Activity 2</p>
        <h1>Volume of Shapes</h1>
        <p>Each result is computed using user-defined PHP functions.</p>
    </section>

    <div class="shape-grid">
        <?php
        foreach ($shapes as $shape) {
            echo "<div class='shape-card'>";
            echo "<span class='shape-label'>" . $shape["formula"] . "</span>";
            echo "<h2>" . $shape["shape"] . "</h2>";
            echo "<p>" . $shape["values"] . "</p>";
            echo "<div class='answer-box'>";
            echo "<small>Computed Volume</small>";
            echo "<strong>" . number_format($shape["answer"], 2) . "</strong>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>

    <div class="table-card">
        <h2>Summary Table</h2>

        <table>
            <tr>
                <th>Shape</th>
                <th>Values</th>
                <th>Formula</th>
                <th>Answer</th>
            </tr>

            <?php
            foreach ($shapes as $shape) {
                echo "<tr>";
                echo "<td>" . $shape["shape"] . "</td>";
                echo "<td>" . $shape["values"] . "</td>";
                echo "<td>" . $shape["formula"] . "</td>";
                echo "<td>" . number_format($shape["answer"], 2) . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>

    <?php include "../footer.php"; ?>

</div>

</body>
</html>