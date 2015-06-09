<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model {

	protected $fillable = ['title', 'filepath', 'approvedate', 'status', 'discipline_id', 'student_id', 'schema_id'];

}
