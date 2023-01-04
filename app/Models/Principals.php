<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Principals extends Model
{
    use HasFactory;
    protected $fillable = [
        "p_name",
        "p_cpf",
        "p_rg",
        "p_city",
        "p_address",
        "p_hierarchy"
];
}

