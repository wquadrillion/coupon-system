<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                "title"=> "Fanta",
                "description"=> "Chapman",
                "image"=> "http://lorempixel.com/250/250/food/6",
                "price"=> 75.99
            ],
            [
                "title"=> "Tea",
                "description"=> "Guava",
                "image"=> "http://lorempixel.com/250/250/food/5",
                "price"=> 90.99
            ],
            [
                "title"=> "Salad",
                "description"=> "A single aubergine",
                "image"=> "http://lorempixel.com/250/250/food/4",
                "price"=> 60.5
            ],
            [
                "title"=> "Orange",
                "description"=> "A lovely yellow banana",
                "image"=> "http://lorempixel.com/250/250/food/3",
                "price"=> 80.9
            ],
            [
                "title"=> "Apple",
                "description"=> "To brush your teeth",
                "image"=> "http://lorempixel.com/250/250/food/2",
                "price"=> 52.5
            ],
            [
                "title"=> "Windows",
                "description"=> "another amazing food",
                "image"=> "http://lorempixel.com/250/250/food/1",
                "price"=> 72.5
            ]
        ];

        foreach ($products as $product) {
            Product::forceCreate($product);
        }
    }
}
