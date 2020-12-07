<?php

namespace Database\Factories;

use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

class StoreFactory extends Factory
{
    
     
    protected $model = Store::class;

    
    
    public function definition(){
            return [
                'name'=>$this->faker->name,
                'description'=> $this->faker->sentence,
                'phone'=> $this->faker->phoneNumber,
                'mobile_phone'=> $this->faker->phoneNumber,
                'slug'=> $this->faker->slug,
            ];
    }
        
}
