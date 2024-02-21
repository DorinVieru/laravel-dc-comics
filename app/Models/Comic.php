<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    // INDICO I CAMPI FILLABLE
    protected $fillable = ['title', 'description', 'thumb', 'price', 'type', 'sale_date', 'artists', 'writers', 'series'];
}
