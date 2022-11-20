<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    proteced $table = 'images';
    protected $fillable = [
        "id",
        "name",
        "location",
        "created_at",
        "updated_at"
    ]
}