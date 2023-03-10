<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Teachers extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        "t_name",
        "t_cpf",
        "t_rg",
        "t_city",
        "t_address",
        "t_s_subjects"
];

}