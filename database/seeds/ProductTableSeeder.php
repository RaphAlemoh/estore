<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $product = new Product([
        //     'imagePath' => '/images/product1.jpg',
        //     'title' => 'Ear phones',
        //     'description' => 'Super cool earphones',
        //     'price' => 20.5
        //  ]);

        //  $product->save();
         
         $product = [
            ['imagePath' => '/images/product1.jpg', 'title' => 'Ear phones', 'description' => 'Super cool earphones', 'price' => 20.5],
            ['imagePath' => '/images/product1.jpg', 'title' => 'Ear phones', 'description' => 'Super cool earphones', 'price' => 20.5],
            ['imagePath' => '/images/product1.jpg', 'title' => 'Ear phones', 'description' => 'Super cool earphones', 'price' => 20.5],
            ['imagePath' => '/images/product1.jpg', 'title' => 'Ear phones', 'description' => 'Super cool earphones', 'price' => 20.5],
            ['imagePath' => '/images/product1.jpg', 'title' => 'Ear phones', 'description' => 'Super cool earphones', 'price' => 20.5]
        ];

        Product::insert($product);

    }
}
