<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model {

    protected $table = 'disciplines';
    protected $fillable = ['title'];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function student() {
        return $this->belongsToMany('App\Student', 'studies');
    }

}
