<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    // INSERISCO GLI ELEMENTI MODIFICABILI
    protected $fillable = [
        "id",
        "name",
        "producer",
        "price",
        "grade"
    ];
}
