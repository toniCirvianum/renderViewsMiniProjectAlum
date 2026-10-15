<h2><?= htmlspecialchars($title) ?></h2>
<ul>
    <?php foreach ($categories as $category): ?>
        <li><?= htmlspecialchars($category) ?></li>
    <?php endforeach; ?>
</ul>
