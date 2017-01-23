<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//* Sets and specifys the films table  //

class Film extends Model
{


	protected $fillable = [
	'filmtitle',
	'filmdescription',
	'filmdirector',
	'filmrating'
	];

    public $timestamps = false;
    
    protected $table = 'films';
}
