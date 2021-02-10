<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    // INSERISCO LE COLONNE MODIFICABILI
    protected $fillable = [
        "id",
        "name",
        "producer",
        "price",
        "grade"
    ];
}
