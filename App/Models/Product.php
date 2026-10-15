<?php
namespace App\Models;

class Product
{
    // Catàleg de prova: encara no treballem amb base de dades.
    public function getAll()
    {
        return [
            ['name' => 'Keyboard', 'price' => 49.90],
            ['name' => 'Mouse', 'price' => 19.50],
            ['name' => 'Monitor', 'price' => 189.00]
        ];
    }

}
