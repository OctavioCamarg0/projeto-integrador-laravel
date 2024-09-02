<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academia extends Model
{
    public function personais()
    {
        return $this->belongsToMany(Personal::class, 'personais_academias', 'personal_id', 'academia_id');
    }
}
