<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Painting extends Model
{
    use HasFactory;

      protected $fillable = [
        'autor',
        'cuadro',
        'precio',
        'entrega',
    ];

    public function shop(){
      return $this->belongToMay(Shop::class, 'painting_shop');
    }

}
