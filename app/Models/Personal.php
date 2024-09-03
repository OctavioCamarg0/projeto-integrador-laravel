<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $table = 'personais';

    protected $fillable = [
        'diploma',
        'cref',
        'formacoes',
        'preco',
        'user_id'
    ];

    public function academias () {
        return $this->belongsToMany(Academia::class, 'personais_academias', 'personal_id', 'academia_id');
    }

    public function usuario() {
        return $this->belongsTo(User::class);
    }
}
