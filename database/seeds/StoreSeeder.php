<?php

use Illuminate\Database\Seeder;
use App\Store;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $store = new Store;
        $faker = Faker\Factory::create();
        
        $store->name = 'Laura Apparels';
        $store->description = 'description';
        $store->logo = 'logo';
        $store->location = 'location';
        $store->password = 'password';
        $store->email = 'laura@gmail.com';
        $store->deliveries = 0;

        $store->save();

    }
}
