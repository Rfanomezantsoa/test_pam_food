<?php

namespace App\Models\aff;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeadlineHero extends Model
{
    use HasFactory;

    protected $table='headlineheros';
    protected $fillable=[
        "page",
        "title",
        "subtitle",
        "image"
    ];

}
