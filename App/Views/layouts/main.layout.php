<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($title ?? 'My Shop') ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>My Shop</h1>
        <nav><a href="index.php">Products</a><a href="index.php?page=categories">Categories</a><a href="index.php?page=users">Users</a></nav>
    </header>
    <main><?= $content ?></main>
    <footer>Public layout · 2026</footer>
</body>
</html>
