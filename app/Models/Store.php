<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    // O laravel busca automaticamente o banco no plural Ex:
    //se sua classe é Store ele vai procurar por Stores
    //Se quer o banco estiver com um nome diferente usa essa propriedade protegida
    //protected $table = 'nomedatabela';

    public function user()
    {
        //belongsTo = pertence para...
        return $this->belongsTo(User::class);
    } 

    public function products(){
        return $this->hasMany(Product::class);
    }

}
