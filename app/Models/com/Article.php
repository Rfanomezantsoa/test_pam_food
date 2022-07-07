<?php

namespace App\Models\com;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
    use HasFactory;

    protected $table="articles";
    protected $fillable=[
        "title",
        "text",
        "author",
        "image",
        "categorie",
        "published_at"
    ];

    public function getQuery(){

        return DB::table($this->table);
   }

   public function Author(){
    return $this->belongsTo(User::class,'author','id');
   }
}
