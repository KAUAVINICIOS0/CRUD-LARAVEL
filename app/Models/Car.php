<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    /** @use HasFactory<\Database\Factories\CarFactory> */
    use HasFactory;
    // protected $guarded=[
    //     'id',
    // ];

    protected $fillable =[
        'name',
        'color',
        'price',
        'id_car_brand',
    ];
}
