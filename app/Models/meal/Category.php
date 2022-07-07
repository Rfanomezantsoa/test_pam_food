<?php

namespace App\Models\meal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $fillable=[
        'designation'
    ];

    public function Foods()
    {
        return $this->belongsToMany(Foods::class,"food_category","food_id","category_id");
    }
}
