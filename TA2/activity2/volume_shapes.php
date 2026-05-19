<!DOCTYPE html>
<html>
<head>
    <title>Volume of Shapes</title>
    <link rel="stylesheet" href="activity2.css">
</head>
<body>

<div class="container">
    <h1>Volume of Shapes</h1>
    <p class="subtitle">Using PHP user-defined functions</p>

    <?php
    function cubeVolume($side) {
        return $side * $side * $side;
    }

    function rectangularPrismVolume($length, $width, $height) {
        return $length * $width * $height;
    }

    function cylinderVolume($radius, $height) {
        return 3.14 * $radius * $radius * $height;
    }

    function coneVolume($radius, $height) {
        return (1 / 3) * 3.14 * $radius * $radius * $height;
    }

    function sphereVolume($radius) {
        return (4 / 3) * 3.14 * $radius * $radius * $radius;
    }

    $side = 5;

    $length = 6;
    $width = 4;
    $height = 3;

    $radiusCylinder = 4;
    $heightCylinder = 7;

    $radiusCone = 3;
    $heightCone = 8;

    $radiusSphere = 5;
    ?>

    <table>
        <tr>
            <th>Shape</th>
            <th>Given Values</th>
            <th>Formula</th>
            <th>Answer</th>
        </tr>

        <tr>
            <td>Cube</td>
            <td>s = <?php echo $side; ?></td>
            <td>V = s³</td>
            <td><?php echo cubeVolume($side); ?></td>
        </tr>

        <tr>
            <td>Right Rectangular Prism</td>
            <td>
                l = <?php echo $length; ?>,
                w = <?php echo $width; ?>,
                h = <?php echo $height; ?>
            </td>
            <td>V = l × w × h</td>
            <td><?php echo rectangularPrismVolume($length, $width, $height); ?></td>
        </tr>

        <tr>
            <td>Cylinder</td>
            <td>
                r = <?php echo $radiusCylinder; ?>,
                h = <?php echo $heightCylinder; ?>
            </td>
            <td>V = πr²h</td>
            <td><?php echo cylinderVolume($radiusCylinder, $heightCylinder); ?></td>
        </tr>

        <tr>
            <td>Cone</td>
            <td>
                r = <?php echo $radiusCone; ?>,
                h = <?php echo $heightCone; ?>
            </td>
            <td>V = 1/3πr²h</td>
            <td><?php echo round(coneVolume($radiusCone, $heightCone), 2); ?></td>
        </tr>

        <tr>
            <td>Sphere</td>
            <td>r = <?php echo $radiusSphere; ?></td>
            <td>V = 4/3πr³</td>
            <td><?php echo round(sphereVolume($radiusSphere), 2); ?></td>
        </tr>
    </table>
</div>

</body>
</html>