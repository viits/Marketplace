<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stores = \App\Models\Store::all();
        foreach($stores as $store){
            $store->products()->save(Product::factory()->make());
        }
    }
}
