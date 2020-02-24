<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Car extends Model
{


	protected $connection="mongodb";
	protected $collection="cars";


	 protected $fillable = [
        'carcompany', 'model','price'
    ];
    //
}
