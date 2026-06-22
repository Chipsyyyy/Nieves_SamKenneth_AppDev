<?php
include 'db.php';

$sql = "SELECT * FROM dogs ORDER BY id ASC";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dog Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container table-container">
        <h1>🐾 Dog Records</h1>
        <p class="subtitle">All registered dogs in the database</p>

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Breed</th>
                <th>Age</th>
                <th>Address</th>
                <th>Color</th>
                <th>Height (in)</th>
                <th>Weight (kg)</th>
            </tr>
            <?php if (mysqli_num_rows($result) > 0): ?>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['breed']); ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo htmlspecialchars($row['address']); ?></td>
                        <td><?php echo htmlspecialchars($row['color']); ?></td>
                        <td><?php echo $row['height']; ?></td>
                        <td><?php echo $row['weight']; ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="8" style="text-align:center;">No records found.</td></tr>
            <?php endif; ?>
        </table>

        <a class="nav-link" href="DogRegister.php">← Back to registration form</a>
    </div>
</body>
</html>
