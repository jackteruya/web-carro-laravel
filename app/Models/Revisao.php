<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revisao extends Model
{
    use HasFactory;

    public function veiculo() {
        return $this->belongsTo('App\Models\Veiculo');
    }

    public function cliente() {
        return $this->belongsTo('App\Models\Cliente');
    }
}
