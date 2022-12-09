<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Usuario extends Model
{
    use HasFactory;

    public function produto(){
        return $this->belongsToMany(Procuct::Class, '_inter_table', 'usuario_id', 'produto_id');
    }
}
