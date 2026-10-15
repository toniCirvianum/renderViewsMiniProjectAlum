<h2><?= htmlspecialchars($title) ?></h2>
<ul>
    <?php foreach ($users as $user): ?>
        <li><?= htmlspecialchars($user) ?></li>
    <?php endforeach; ?>
</ul>
