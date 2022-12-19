<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Employees extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        "name",
        "cpf",
        "rg",
        "city",
        "address",
        "position"
];

}
