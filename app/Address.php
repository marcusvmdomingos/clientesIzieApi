<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['title', 'cep', 'complement', 'number', 'city', 'state', 'customer_id'];

    protected $dates = ['deleted_at'];

    function customer() {
        return $this->belongsTo('App\User');
    }
}
