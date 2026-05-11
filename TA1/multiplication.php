<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>

    <style>
        body {
            font-family: Arial;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            margin: auto;
        }

        td {
            border: 1px solid black;
            padding: 10px;
            width: 50px;
            text-align: center;
        }

        .color1 {
            background-color: lightblue;
        }

        .color2 {
            background-color: lightgray;
        }
    </style>
</head>

<body>

<h2>Multiplication Table</h2>

<table>

<?php

for ($row = 0; $row <= 10; $row++) {

    echo "<tr>";

    for ($col = 0; $col <= 10; $col++) {

        $answer = $row * $col;

        // Alternating colors
        if (($row + $col) % 2 == 0) {
            $color = "color1";
        } else {
            $color = "color2";
        }

        echo "<td class='$color'>$answer</td>";
    }

    echo "</tr>";
}

?>

</table>

</body>
</html>