<?php

namespace App\Models\meal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table="menus";
    public static $STARTERS ='starters';
    public static $MAINS='mains';
    public static $PASTRIES_AND_DRINKS='pastriesdrinks';
    public static $OUR_MENU='ourmenu';

    protected $fillable=[
        "name",
        "label",
        "description"
    ];

    public $timestamps = true;

    public function Foods()
    {
        return  $this->hasMany(Food::class);
    }
}
