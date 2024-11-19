<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shirt_Poroduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'Type_p',
        'Name_S',
        'Color_S',
        'Material_S',
        'Price_S',
        'Season_S',
        'Stock_Levels_S',
    ];

}
