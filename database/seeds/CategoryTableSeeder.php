<?php


use Carbon\Carbon;
use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $category = [
        //     ['name' => 'cloth', 'description' => 'cloth for both males and females', 'category_url' => '/category/cloth', 'status' => 1],
        //     ['name' => 'shoe', 'description' => 'shoes for both males and females', 'category_url' => '/category/shoes', 'status' => 1],
        //     ['name' => 'phones', 'description' => 'Android, Samsung, Xiaomi, iPhone', 'category_url' => '/category/phones', 'status' => 1],
        //     ['name' => 'electronics', 'description' => 'Electronic category', 'category_url' => '/category/electronic', 'status' => 1],
        //     ['name' => 'Furniture', 'description' => 'furniture designs and interior products', 'category_url' => '/category/furniture', 'status' => 1]
        // ];
        // Category::insert($category);
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Laptops', 'description' => 'laptops', 'category_url' => '/category/laptop', 'status' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Desktops', 'description' => 'desktops', 'category_url' => '/category/desktop', 'status' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mobile Phones', 'description' => 'mobile-phones', 'category_url' => '/category/phone', 'status' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tablets', 'description' => 'tablets', 'category_url' => '/category/tablet', 'status' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'TVs', 'description' => 'tvs', 'category_url' => '/category/tv', 'status' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Digital Cameras', 'description' => 'digital-cameras', 'category_url' => '/category/camera', 'status' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Appliances', 'description' => 'appliances', 'category_url' => '/category/appliances', 'status' => 1, 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
