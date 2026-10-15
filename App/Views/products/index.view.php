<h2><?= htmlspecialchars($title) ?></h2>
<p>Our catalog:</p>
<ul>
    <?php foreach ($products as $product): ?>
        <li><?= htmlspecialchars($product['name']) ?> — <?= htmlspecialchars($product['formattedPrice']) ?></li>
    <?php endforeach; ?>
</ul>
