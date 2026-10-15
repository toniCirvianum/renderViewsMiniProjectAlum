<?php
require __DIR__ . '/autoload.php';

use App\Controllers\ProductController;
use App\Controllers\UserController;
use App\Controllers\CategoryController;


$page = $_GET['page'] ?? 'products';

switch ($page) {
    case 'users':
        (new UserController())->index();
        break;
    case 'categories':
        (new CategoryController())->index();
        break;
    default:
        (new ProductController())->index();
}