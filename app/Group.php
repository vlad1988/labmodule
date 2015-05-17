<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {

    protected $table = 'groups';
    protected $fillable = ['title'];

    public function students() {
        return $this->hasMany('App\Student');
    }

}
