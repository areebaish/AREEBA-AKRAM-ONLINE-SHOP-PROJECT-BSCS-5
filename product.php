<?php
include 'includes/header.php';
include 'includes/db.php';

// Fetch products from the database
$stmt = $db->query('SELECT * FROM products');
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Shop</h2>
<div class="product-list">
    <?php foreach ($products as $product): ?>
        <div class="product">
            <h3><?php echo $product['name']; ?></h3>
            <p>Price: $<?php echo $product['price']; ?></p>
            <a href="cart.php?action=add&id=<?php echo $product['id']; ?>">Add to Cart</a>
        </div>
    <?php endforeach; ?>
</div>

<?php
include 'includes/footer.php';
?>
