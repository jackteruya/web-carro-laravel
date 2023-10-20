<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revisoes extends Model
{
    use HasFactory;

    public function veiculo() {
        return $this->belongsTo('App\Models\Veiculos');
    }
}
