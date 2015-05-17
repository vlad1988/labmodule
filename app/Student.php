<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {

    protected $table = 'students';
    protected $fillable = ['name', 'surname', 'email', 'guid'];
    
    
    	public function groups()
	{
		return $this->belongsTo('App\Group');
	}

}
