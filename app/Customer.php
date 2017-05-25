<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

	protected $table = 'customers';

    protected $fillable = ['name', 'email', 'cpf', 'birth'];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function addresses() {
        return $this->hasMany('App\Address');
    }
}

