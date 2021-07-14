<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Shop extends Model
{
    use HasFactory, Notifiable;


     protected $fillable = [
        'nombre',
        'capacidad',
    ];

    public function painting(){
      return $this->belongToMay(Painting::class, 'painting_shop');
    }
}
