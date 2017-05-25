<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'email', 'cpf', 'birth'];

    protected $dates = ['deleted_at'];

    public function addresses()
    {
        return $this->hasMany('App\Address');
    }
}

