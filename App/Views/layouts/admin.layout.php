<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | <?= htmlspecialchars($title ?? 'Dashboard') ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="admin-header">
        <h1>Administration</h1>
        <nav><a href="index.php">Products</a><a href="index.php?page=categories">Categories</a><a href="index.php?page=users">Users</a></nav>
    </header>
    <main><?= $content ?></main>
    <footer>Admin layout · 2026</footer>
</body>
</html>
