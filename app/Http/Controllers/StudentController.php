<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;
use App\Group;
use Webpatser\Uuid\Uuid;

class StudentController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {

        $groups = Group::orderBy('title')->get();
        return view('student.students', compact('groups'));
    }

    public function create() {
        $name = Request::input('name');
        $surnname = Request::input('surname');
        $email = Request::input('email');
        $group_id = Request::input('group_id');
        
        $student = new Student;
        $student->name = $name;
        $student->surname = $surnname;
        $student->email = $email;
        $student->group_id = $group_id;
        $student->guid = Uuid::generate();
        $student->save();
        return redirect('student');

}
}