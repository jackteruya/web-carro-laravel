<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function cliente() {
        return $this->belongsTo('App\Models\Cliente');
    }

    public function revisaos() {
        return $this->hasMany('App\Models\Revisao');
    }
}
