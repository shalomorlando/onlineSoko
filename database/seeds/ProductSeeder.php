<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->delete();

        for($i = 1; $i<101; $i++){
            $product = new Product;
            $faker = Faker\Factory::create();

            $product->id = $i;
            $product->title = $faker->word;
            $product->description = "this product is by ".$faker->name;
            $product->price = $faker->numberBetween(0, 1000);
            $product->quantity = $faker->numberBetween(0, 50);
            $product->product_image = $faker->imageUrl(150, 150, 'fashion');

            $product->save();
        }


    }
}
