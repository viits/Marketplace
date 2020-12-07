<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
   
    protected $model = Product::class;

   
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'description'=>$this->faker->sentence,
            'body'=>$this->faker->paragraph(5,true),
            'price'=>$this->faker->randomFloat(2,1,10),
            'slug'=>$this->faker->slug,
        ];
    }
}
