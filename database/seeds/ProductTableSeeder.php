<?php

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
        $product = new \App\Product([
        	'imagePath' => '',
        	'title' => 'Lord of the Rings',
        	'description' => 'Cool book',
        	'price' => 12
        	]);
        $product->save();

        $product = new \App\Product([
        	'imagePath' => '',
        	'title' => 'A Game of Thrones',
        	'description' => 'Geogre Martin',
        	'price' => 20
        	]);
        $product->save();

        $product = new \App\Product([
        	'imagePath' => '',
        	'title' => 'Harry Potter',
        	'description' => 'J.K.Rowling',
        	'price' => 15
        	]);
        $product->save();

        $product = new \App\Product([
        	'imagePath' => '',
        	'title' => 'A Game of Thrones',
        	'description' => 'A knight of the seven kingdoms',
        	'price' => 25
        	]);
        $product->save();
    }
}
