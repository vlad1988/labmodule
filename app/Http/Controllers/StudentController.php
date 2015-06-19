<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Illuminate\Support\Facades\Auth;
use Webpatser\Uuid\Uuid;
use Request;
use App\Study;
use App\Discipline;
use App\Student;
use App\Group;
use App\Scheme;
use App\Report;

class StudentController extends Controller {


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
        $user_id = Auth::id();
        $disciplines = Discipline::whereRaw('group_id = ' . $student->group_id . ' and user_id = ' . $user_id)->get();
        return view('student.student', compact('student', 'disciplines'));
    }

    public function listbrake() {
        $student_id = Request::input('student_id');
        $discipline_id = Request::input('discipline_id');
        Study::whereRaw('student_id = '.$student_id.' and discipline_id = '.$discipline_id)->delete();
        return redirect('show/' . $student_id);
    }

    public function studentlist(){
        $uuid = Request::input('uuid');
        $student = Student::where('guid', '=', $uuid)->get();
        $disciplines = Discipline::where('group_id', '=', $student[0]->group_id)->get();
        $group = Group::find($student[0]->group_id);
        $student_id = $student[0]->id;
        return view('student.disciplines', compact('disciplines', 'group', 'student_id'));
    }

    public function report($student_id,  $discipline_id){
        $reports = Report::whereRaw('student_id ='.$student_id.' and discipline_id = '.$discipline_id)->orderBy('title')->get();
        $schemes = Scheme::where('discipline_id', '=', $discipline_id )->get();
        return view('student.report', compact('discipline_id', 'student_id', 'schemes', 'reports'));
    }
    
    public function sumreport(){
        return view('student.sum');
    }
    

}
