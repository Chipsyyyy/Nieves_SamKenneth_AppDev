<?php
$names = array(
    "arnel agpoon",
    "gillian dela cruz",
    "lalyn galileo",
    "francine riel",
    "jhanel jose",
    "maria anque",
    "railey reyes",
    "fritz marquez",
    "jayvee pascual",
    "cedrik docusin",
    "fiona rivas",
    "ann esquivias",
    "tine sarzuelo",
    "raf sarte",
    "eli resio",
    "maria rowena",
    "rudy peralta",
    "miguel garcia",
    "karl francisco",
    "inigo frayna"
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP String Functions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>PHP String Functions</h1>
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