<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personais_academia extends Model
{
    use HasFactory;

    protected $fillable = [
        'personal_id',
        'academia_id'
    ];

}
