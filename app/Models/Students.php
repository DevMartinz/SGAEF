<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Students extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        "std_name",
        "std_cpf",
        "std_rg",
        "std_city",
        "std_address",
        "std_class"
];

}
