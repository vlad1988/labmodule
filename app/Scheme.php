<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Scheme extends Model {

	protected $fillable = ['title', 'type', 'discipline_id', 'expiredate'];

}
