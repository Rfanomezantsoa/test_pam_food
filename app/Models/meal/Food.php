<?php

namespace App\Models\meal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = [
        'name',
        'description',
        'image',
        'user_id',
        'price'
    ];


    public function Menu()
    {
        return $this->belongsTo(Menu::class,"user_id");
    }
    public function Categories()
    {
        return $this->belongsToMany(Category::class,"food_category","category_id","food_id");
    }

}
