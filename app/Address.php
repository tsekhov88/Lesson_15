<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
	use SoftDeletes;

	protected $table = 'addresses';

    protected $fillable = [
    	'city_name',
    	'street',
    	'house',
    	'floor'
    ];
}
