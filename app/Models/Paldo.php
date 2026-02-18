<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paldo extends Model
{
    protected $table = "paldo";

    protected $fillable = [
        "name",
        "description",
    ];
}
