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
        	'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51EstVXM1UL._SX331_BO1,204,203,200_.jpg',
        	'title' => 'Lord of the Rings',
        	'description' => 'Cool book',
        	'price' => 12
        	]);
        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'https://tonguesophistries.files.wordpress.com/2014/03/martin-george-r-r-a-game-of-thrones.jpg',
        	'title' => 'A Game of Thrones',
        	'description' => 'Geogre Martin',
        	'price' => 20
        	]);
        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'https://i.pinimg.com/originals/c9/ea/55/c9ea55fc0a9e10edd5654477f1857a3e.jpg',
        	'title' => 'Harry Potter',
        	'description' => 'J.K.Rowling',
        	'price' => 15
        	]);
        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'http://www.georgerrmartin.com/wp-content/uploads/2015/02/KNIGHT.jpg',
        	'title' => 'A Game of Thrones',
        	'description' => 'A knight of the seven kingdoms',
        	'price' => 25
        	]);
        $product->save();
    }
}
