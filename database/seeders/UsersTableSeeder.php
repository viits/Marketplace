<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;
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
        // \DB::table('users')->insert(
        //     [
        //         'name' => 'Administrador',
        //         'email' => 'admin@admin.com',
        //         'email_verified_at' => now(),
        //         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //         'remember_token' => 'ashashuhasu',
        //     ]
        //     );
            
         //factory(\App\Models\User::class, 40)->create(); //Cria dados fakes
        User::factory()->count(40)->create();
    }
}
