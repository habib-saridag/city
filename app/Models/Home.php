<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $table = "houses";
    protected $fillable = [
        'name',
        'price',
        'city_id',
        'district_id',
        'type_id',
    ];
}
