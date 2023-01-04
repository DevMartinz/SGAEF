<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Secretaries extends Model
{
    use HasFactory;
    protected $fillable = [
        "sec_name",
        "sec_cpf",
        "sec_rg",
        "sec_city",
        "sec_address",
        "sec_permi_lvl"
];
}
