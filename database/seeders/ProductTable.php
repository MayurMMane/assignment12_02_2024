<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productData = [
            ['product_name' => 'Product 1'],
            ['product_name' => 'Product 2'],
            ['product_name' => 'Product 3'],
            ['product_name' => 'Product 4'],
            ['product_name' => 'Product 5'],
            ['product_name' => 'Product 6'],
            ['product_name' => 'Product 7'],
            ['product_name' => 'Product 8'],
            // Add more product as needed
        ];

        foreach ($productData as $productData) {
            Product::create($productData);
        }
    }
}
