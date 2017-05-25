<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

	protected $table = 'addresses';

    protected $fillable = ['title', 'cep', 'complement', 'number', 'city', 'state', 'customer_id'];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

}
