<?php

namespace App\Models\meal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable=[
        "designation"
    ];

    public $timestamps = true;

    public function Foods()
    {
        return  $this->hasMany(Food::class);
    }
}
