<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use App\Study;
use App\Discipline;
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
        $students = Student::orderBy('surname')->get();
        $groups = Group::orderBy('title')->get();
        return view('student.students', compact('groups', 'students'));
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

        return redirect('students');
    }

    public function addtolist() {
        $student_id = Request::input('student_id');
        $discipline_id = Request::input('discipline_id');

        $study = new Study;
        $study->student_id = $student_id;
        $study->discipline_id = $discipline_id;
        $study->save();
        return redirect('show/' . $student_id);
    }

    public function show($id) {
        $student = Student::find($id);
        $discipline_list = Discipline::all();
        $disciplines = Student::find($id)->disciplines;
        return view('student.student', compact('disciplines', 'student', 'discipline_list', 'id'));
    }

    public function listbrake() {
        $student_id = Request::input('student_id');
        $discipline_id = Request::input('discipline_id');
        Study::whereRaw('student_id = '.$student_id.' and discipline_id = '.$discipline_id)->delete();
        return redirect('show/' . $student_id);
    }

}
