<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Measure Conversion Chart - Lengths (UK)</title>

<style>
    body {
        font-family: Arial;
        background: #f5f5f5;
    }

    .container {
        width: 800px;
        margin: 30px auto;
        background: white;
        padding: 20px;
        border: 2px solid black;
    }

    h2 {
        text-align: center;
        color: #4a6fa5;
        margin-bottom: 20px;
    }

    form {
        text-align: center;
        margin-bottom: 20px;
    }

    input {
        padding: 8px;
        width: 200px;
    }

    button {
        padding: 8px 15px;
        background: #333;
        color: white;
        border: none;
        cursor: pointer;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 15px;
    }

    td {
        border: 1px solid gray;
        padding: 8px;
        text-align: center;
    }

    .header {
        background: yellow;
        font-weight: bold;
    }
</style>

</head>
<body>

<div class="container">
    <h2>MEASURE CONVERSION CHART – LENGTHS (UK)</h2>

    <form method="POST">
        <input type="number" name="value" placeholder="Enter value in meters" required step="any">
        <button type="submit" name="convert">Generate</button>
    </form>

<?php
if(isset($_POST['convert'])) {

    $m = $_POST['value'];

    // METRIC
    $cm = $m * 100;
    $mm = $m * 1000;
    $km = $m / 1000;

    // METRIC → IMPERIAL
    $inch = $m * 39.3701;
    $ft = $m * 3.28084;
    $yd = $m * 1.09361;
    $mile = $m * 0.000621371;

    // IMPERIAL → METRIC (formulas applied to computed values)
    $inch_to_cm = $inch * 2.54;
    $ft_to_cm = $ft * 30.48;
    $yd_to_cm = $yd * 91.44;
    $mile_to_km = $mile * 1.60934;

    // METRIC TABLE
    echo "<table>
        <tr class='header'><td colspan='4'>METRIC CONVERSIONS</td></tr>
        <tr>
            <td>$m metres</td><td>= " . number_format($cm,2) . " centimetres</td>
            <td>$m m</td><td>= " . number_format($cm,2) . " cm</td>
        </tr>
        <tr>
            <td>$m metres</td><td>= " . number_format($mm,2) . " millimetres</td>
            <td>$m m</td><td>= " . number_format($mm,2) . " mm</td>
        </tr>
        <tr>
            <td>$m metres</td><td>= " . number_format($km,5) . " kilometres</td>
            <td>$m m</td><td>= " . number_format($km,5) . " km</td>
        </tr>
    </table>";

    // METRIC → IMPERIAL TABLE
    echo "<table>
        <tr class='header'><td colspan='4'>METRIC → IMPERIAL CONVERSIONS</td></tr>
        <tr>
            <td>$m metres</td><td>= " . number_format($inch,5) . " inches</td>
            <td>$m m</td><td>= " . number_format($inch,5) . " in</td>
        </tr>
        <tr>
            <td>$m metres</td><td>= " . number_format($ft,5) . " feet</td>
            <td>$m m</td><td>= " . number_format($ft,5) . " ft</td>
        </tr>
        <tr>
            <td>$m metres</td><td>= " . number_format($yd,5) . " yards</td>
            <td>$m m</td><td>= " . number_format($yd,5) . " yd</td>
        </tr>
        <tr>
            <td>$m metres</td><td>= " . number_format($mile,6) . " miles</td>
            <td>$m m</td><td>= " . number_format($mile,6) . " mi</td>
        </tr>
    </table>";

    // IMPERIAL → METRIC TABLE (NOW FULLY DYNAMIC)
    echo "<table>
        <tr class='header'><td colspan='4'>IMPERIAL → METRIC CONVERSIONS</td></tr>
        <tr>
            <td>" . number_format($inch,2) . " inches</td>
            <td>= " . number_format($inch_to_cm,2) . " centimetres</td>
            <td>" . number_format($inch,2) . " in</td>
            <td>= " . number_format($inch_to_cm,2) . " cm</td>
        </tr>
        <tr>
            <td>" . number_format($ft,2) . " feet</td>
            <td>= " . number_format($ft_to_cm,2) . " centimetres</td>
            <td>" . number_format($ft,2) . " ft</td>
            <td>= " . number_format($ft_to_cm,2) . " cm</td>
        </tr>
        <tr>
            <td>" . number_format($yd,2) . " yards</td>
            <td>= " . number_format($yd_to_cm,2) . " centimetres</td>
            <td>" . number_format($yd,2) . " yd</td>
            <td>= " . number_format($yd_to_cm,2) . " cm</td>
        </tr>
        <tr>
            <td>" . number_format($mile,6) . " miles</td>
            <td>= " . number_format($mile_to_km,5) . " kilometres</td>
            <td>" . number_format($mile,6) . " mi</td>
            <td>= " . number_format($mile_to_km,5) . " km</td>
        </tr>
    </table>";
}
?>

</div>
</body>
</html>

