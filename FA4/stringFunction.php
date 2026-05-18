<?php
$names = array(
    "chrisa",
    "ana marie",
    "ben cruz",
    "carla santos",
    "daniel reyes",
    "ella garcia",
    "francis lopez",
    "grace bautista",
    "hannah flores",
    "ivan dela cruz",
    "julia ramos",
    "kevin salazar",
    "lara cruz",
    "marco diaz",
    "nina roque",
    "oliver tan",
    "paula lim",
    "queen santos",
    "rafael torres",
    "sophia yu"
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Activity 2 - PHP String Functions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Activity 2: PHP String Functions</h1>
    <p class="subtitle">This table uses different PHP string functions.</p>

    <table class="string-table">
        <tr>
            <th colspan="6">List of Names</th>
        </tr>

        <tr>
            <th>Name</th>
            <th>Number of Characters</th>
            <th>Uppercase First Character</th>
            <th>Replace Vowels with @</th>
            <th>Position of Letter "a"</th>
            <th>Reverse Name</th>
        </tr>

        <?php
        foreach ($names as $name) {
            $characters = strlen($name);
            $uppercaseFirst = ucfirst($name);

            $replaceVowels = str_replace(
                array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U"),
                "@",
                $name
            );

            $positionA = strpos($name, "a");

            if ($positionA === false) {
                $positionA = "No letter a";
            }

            $reverseName = strrev($name);

            echo "<tr>";
            echo "<td>" . $name . "</td>";
            echo "<td>" . $characters . "</td>";
            echo "<td>" . $uppercaseFirst . "</td>";
            echo "<td>" . $replaceVowels . "</td>";
            echo "<td>" . $positionA . "</td>";
            echo "<td>" . $reverseName . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

</div>

</body>
</html>