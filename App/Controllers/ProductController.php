<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $model = new Product();
        $products = $model->getAll();

        echo "<pre>";
        print_r($products);
        echo "</pre>";

        //Aqui cal renderitzar la vista


    }
}
