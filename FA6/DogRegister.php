<?php
include 'db.php';

$message = "";
$messageType = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form data
    $name    = mysqli_real_escape_string($conn, $_POST['name']);
    $breed   = mysqli_real_escape_string($conn, $_POST['breed']);
    $age     = mysqli_real_escape_string($conn, $_POST['age']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $color   = mysqli_real_escape_string($conn, $_POST['color']);
    $height  = mysqli_real_escape_string($conn, $_POST['height']);
    $weight  = mysqli_real_escape_string($conn, $_POST['weight']);

    $sql = "INSERT INTO dogs (name, breed, age, address, color, height, weight)
            VALUES ('$name', '$breed', '$age', '$address', '$color', '$height', '$weight')";

    if (mysqli_query($conn, $sql)) {
        $message = "Dog record saved successfully!";
        $messageType = "success";
    } else {
        $message = "Error: " . mysqli_error($conn);
        $messageType = "error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dog Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>🐶 Dog Registration</h1>
        <p class="subtitle">Add a new dog record to the database</p>

        <?php if ($message): ?>
            <div class="message <?php echo $messageType; ?>"><?php echo $message; ?></div>
        <?php endif; ?>

        <form method="POST" action="DogRegister.php">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="breed">Breed</label>
            <input type="text" id="breed" name="breed" required>

            <label for="age">Age (years)</label>
            <input type="number" id="age" name="age" min="0" required>

            <label for="address">Address</label>
            <input type="text" id="address" name="address" required>

            <label for="color">Color</label>
            <input type="text" id="color" name="color" required>

            <label for="height">Height (inches)</label>
            <input type="number" id="height" name="height" step="0.1" min="0" required>

            <label for="weight">Weight (kg)</label>
            <input type="number" id="weight" name="weight" step="0.1" min="0" required>

            <button type="submit">Save Dog Record</button>
        </form>

        <a class="nav-link" href="DogView.php">View all dog records →</a>
    </div>
</body>
</html>
