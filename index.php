<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<?php
include 'includes/header.php';
?>
    <h2>Welcome to our Online Shop!</h2>
    <!-- Your homepage content goes here -->
<?php
include 'includes/footer.php';
?>
    <header>
        <h1>Online Shopping system</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="product.php">product</a></li>
                <li><a href="cart.php">Cart</a></li>
            </ul>
        </nav>
    </header>
    <?php
$host = 'localhost';
$dbname = 'online shopping system';
$username = 'root';
$password = '';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}
?>

    <main>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Online Shopping system</p>
    </footer>
</body>
</html>

