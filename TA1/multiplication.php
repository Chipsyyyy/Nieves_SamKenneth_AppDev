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
    for ($row = 1; $row <= 10; $row++) {
        echo "<tr>";

        for ($col = 1; $col <= 10; $col++) {
            $answer = $row * $col;

            if ($row % 2 == 0) {
                echo "<td class='color1'>$answer</td>";
            } else {
                echo "<td class='color2'>$answer</td>";
            }
        }

        echo "</tr>";
    }
    ?>
</table>

</body>
</html>