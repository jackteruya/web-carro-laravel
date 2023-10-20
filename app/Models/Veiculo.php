<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    public function cliente() {
        return $this->belongsTo('App\Models\Clientes');
    }

    public function revisoes() {
        return $this->belongsToMany('App\Models\Revisao');
    }
}
