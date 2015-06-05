<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model {

    protected $table = 'discipline_group';

    public function disciplines() {
        return $this->belongsTo('App\Discipline');
    }
    
    public function students() {
        return $this->belongsTo('App\Student');
    }

}
