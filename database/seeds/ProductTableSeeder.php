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
         
        //  $product = [
        //     ['imagePath' => '/images/product1.jpg', 'title' => 'Ear phones', 'description' => 'Super cool earphones', 'price' => 20.5, 'featured' => true,  'quantity' => 20],
        //     ['imagePath' => '/images/product1.jpg', 'title' => 'Ear phones', 'description' => 'Super cool earphones', 'price' => 20.5, 'featured' => false, 'quantity' => 66],
        //     ['imagePath' => '/images/product1.jpg', 'title' => 'phones', 'description' => 'Super cool earphones', 'price' => 20.5, 'featured' => false,  'quantity' => 40],
        //     ['imagePath' => '/images/product1.jpg', 'title' => 'Ear phones', 'description' => 'Super cool earphones', 'price' => 20.5, 'featured' => true, 'quantity' => 5],
        //     ['imagePath' => '/images/product1.jpg', 'title' => 'Ear phones', 'description' => 'Super cool earphones', 'price' => 20.5, 'featured' => false,  'quantity' => 20],
        //     ['imagePath' => '/images/product1.jpg', 'title' => 'Ear phones', 'description' => 'Super cool earphones', 'price' => 20.5, 'featured' => true,  'quantity' => 20],
        //     ['imagePath' => '/images/product1.jpg', 'title' => 'Ear phones', 'description' => 'Super cool earphones', 'price' => 20.5, 'featured' => false, 'quantity' => 66],
        //     ['imagePath' => '/images/product1.jpg', 'title' => 'music', 'description' => 'Super cool earphones', 'price' => 20.5, 'featured' => false, 'quantity' => 66],
        //     ['imagePath' => '/images/product1.jpg', 'title' => 'Ear phones', 'description' => 'Super cool earphones', 'price' => 20.5, 'featured' => true, 'quantity' => 20],
        //     ['imagePath' => '/images/product1.jpg', 'title' => 'Ear phones', 'description' => 'Super cool earphones', 'price' => 660.5, 'featured' => true, 'quantity' => 20],
        //     ['imagePath' => '/images/product1.jpg', 'title' => 'Ear phones', 'description' => 'Super cool earphones', 'price' => 20.5, 'featured' => false, 'quantity' => 66],
        //     ['imagePath' => '/images/product1.jpg', 'title' => 'Ear phones', 'description' => 'Super cool earphones', 'price' => 880.5, 'featured' => true, 'quantity' => 20],
        //     ['imagePath' => '/images/product1.jpg', 'title' => 'Microphone', 'description' => 'Super cool earphones', 'price' => 20.5, 'featured' => false, 'quantity' => 66],
        //     ['imagePath' => '/images/product1.jpg', 'title' => 'Ear phones', 'description' => 'Super cool earphones', 'price' => 8830.5, 'featured' => true, 'quantity' => 20],
        //     ['imagePath' => '/images/product1.jpg', 'title' => 'users', 'description' => 'Super cool earphones', 'price' => 20.5, 'featured' => true, 'quantity' => 20],
        //     ['imagePath' => '/images/product1.jpg', 'title' => 'Ear phones', 'description' => 'Super cool earphones', 'price' => 20.5, 'featured' => true, 'quantity' => 20],
        //     ['imagePath' => '/images/product1.jpg', 'title' => 'clothes', 'description' => 'Super cool earphones', 'price' => 9030.5, 'featured' => false, 'quantity' => 66],
        //     ['imagePath' => '/images/product1.jpg', 'title' => 'Ear phones', 'description' => 'Super cool earphones', 'price' => 20.5, 'featured' => true, 'quantity' => 20],
        //     ['imagePath' => '/images/product1.jpg', 'title' => 'camera', 'description' => 'Super cool earphones', 'price' => 2000.5, 'featured' => true, 'quantity' => 20],
        //     ['imagePath' => '/images/product1.jpg', 'title' => 'smart TV', 'description' => 'Super cool earphones', 'price' => 230.5, 'featured' => true, 'quantity' => 20]
        // ];

        // Product::insert($product);

                // Laptops
                for ($i=1; $i <= 30; $i++) {
                    Product::create([
                        'title' => 'Laptop-'.$i,
                        'details' => [13,14,15][array_rand([13,14,15])] . ' inch, ' . [1, 2, 3][array_rand([1, 2, 3])] .' TB SSD, 32GB RAM',
                        'price' => rand(149999, 249999),
                        'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                        'imagePath' => '/images/product1.jpg',
                        'quantity' => 20,
                        // 'image' => 'products/dummy/laptop-'.$i.'.jpg',
                        // 'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
                    ])->categories()->attach(1);
                }
        
                // Make Laptop 1 a Desktop as well. Just to test multiple categories
                $product = Product::find(1);
                $product->categories()->attach(2);
        
                // Desktops
                for ($i = 1; $i <= 9; $i++) {
                    Product::create([
                        'title' => 'Desktop-' . $i,
                        'details' => [24, 25, 27][array_rand([24, 25, 27])] . ' inch, ' . [1, 2, 3][array_rand([1, 2, 3])] . ' TB SSD, 32GB RAM',
                        'price' => rand(249999, 449999),
                        'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                        'imagePath' => '/images/product1.jpg',
                        'quantity' => 20
                    ])->categories()->attach(2);
                }
        
                // Phones
                for ($i = 1; $i <= 9; $i++) {
                    Product::create([
                        'title' => 'Phone-' . $i,
                        'details' => [16, 32, 64][array_rand([16, 32, 64])] . 'GB, 5.' . [7, 8, 9][array_rand([7, 8, 9])] . ' inch screen, 4GHz Quad Core',
                        'price' => rand(79999, 149999),
                        'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                        'imagePath' => '/images/product1.jpg',
                        'quantity' => 20
                        // 'image' => 'products/dummy/phone-'.$i.'.jpg',
                        // 'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
                    ])->categories()->attach(3);
                }
        
                // Tablets
                for ($i = 1; $i <= 9; $i++) {
                    Product::create([
                        'title' => 'Tablet-' . $i,
                        'details' => [16, 32, 64][array_rand([16, 32, 64])] . 'GB, 5.' . [10, 11, 12][array_rand([10, 11, 12])] . ' inch screen, 4GHz Quad Core',
                        'price' => rand(49999, 149999),
                        'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                        'imagePath' => '/images/product1.jpg',
                        'quantity' => 40
                        // 'image' => 'products/dummy/tablet-'.$i.'.jpg',
                        // 'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
                    ])->categories()->attach(4);
                }
        
                // TVs
                for ($i = 1; $i <= 9; $i++) {
                    Product::create([
                        'title' => 'Tv-' . $i,
                        'details' => [46, 50, 60][array_rand([7, 8, 9])] . ' inch screen, Smart TV, 4K',
                        'price' => rand(79999, 149999),
                        'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                        'imagePath' => '/images/product1.jpg',
                        'quantity' => 45
                        // 'image' => 'products/dummy/tv-'.$i.'.jpg',
                        // 'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
                    ])->categories()->attach(5);
                }
        
                // Cameras
                for ($i = 1; $i <= 9; $i++) {
                    Product::create([
                        'title' => 'Camera-' . $i,
                        'details' => 'Full Frame DSLR, with 18-55mm kit lens.',
                        'price' => rand(79999, 249999),
                        'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                        'imagePath' => '/images/product1.jpg',
                        'quantity' => 35
                        // 'image' => 'products/dummy/camera-'.$i.'.jpg',
                        // 'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
                    ])->categories()->attach(6);
                }
        
                // Appliances
                for ($i = 1; $i <= 9; $i++) {
                    Product::create([
                        'title' => 'Appliance-' . $i,
                        'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                        'price' => rand(79999, 149999),
                        'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                        'imagePath' => '/images/product1.jpg',
                        'quantity' => 25
                        // 'image' => 'products/dummy/appliance-'.$i.'.jpg',
                        // 'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
                    ])->categories()->attach(7);
                }
        
                // Select random entries to be featured
                Product::whereIn('id', [1, 12, 22, 31, 41, 43, 47, 51, 53,61, 69, 73, 80])->update(['featured' => true]);

    }
}
