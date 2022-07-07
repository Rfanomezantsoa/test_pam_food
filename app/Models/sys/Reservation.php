<?php

namespace App\Models\sys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory;
    use SoftDeletes;

    public static $VALIDATE=1;
    public static $ATTENTE=0;
    public static $UNVALIDATE=-1;

    protected $fillable=[
        'first_name',
        'last_name',
        'email',
        'phone',
        'date_reservation',
        "number",
        "is_validate",
        "delete_at",

    ];

}
