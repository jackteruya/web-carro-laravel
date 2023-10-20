<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use HasFactory;

//    use SoftDeletes;

    protected $guarded = [];

    public function veiculos() {
        return $this->hasMany('App\Models\Veiculo');
    }

    public function revisoes() {
        return $this->hasMany('App\Models\Revisao');
    }
}
