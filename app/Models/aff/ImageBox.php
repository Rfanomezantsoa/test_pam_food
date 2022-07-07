<?php

namespace App\Models\aff;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ImageBox extends Model
{
    use HasFactory;

    protected $fillable=[
        "image",
        "title",
        "description"
    ];

    public function getQuery(){

         return DB::table($this->table);
    }
}
