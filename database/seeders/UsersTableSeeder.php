<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Store;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //SEEDERS ALIMENTA A TABELA COM DADOS PARA PODER SER TRABALHADOS
         //factory(\App\Models\User::class, 40)->create(); //Cria dados fakes
        User::factory()->count(40)->create()->each(function($user){
            $user->store()->save(Store::factory()->make());
        });
    }
}
