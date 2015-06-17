<?php

namespace App\Http\Controllers;
use \Illuminate\Support\Facades\Auth;

use App\Group;
use App\Student;
use App\Http\Requests;
use App\Discipline;
use Request;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index() {
        return view('home');
    }

    public function groups() {
        $groups = Group::orderBy('title')->get();
        return view('home.groups', compact('groups'));
    }

    public function creategroup() {
        $group = new Group;
        $input = Request::input('title');
        $group->title = $input;
        $group->save();
        return redirect('groups');
    }

    public function deletegroupview($id) {
        $group = Group::find($id);
        $title = $group->title;
        return view('home.deletegroup', compact('id', 'title'));
    }

    public function deletegroup() {
        $id = Request::input('id');
        $group = Group::find($id);
        $group->delete();
        return redirect('groups');
    }

    public function editgroupview($id) {
        $group = Group::find($id);
        return view('home.editgroup', compact('id', 'group'));
    }

    public function editgroup() {
        $title = Request::input('title');
        $id = Request::input('id');
        Group::where('id', '=', $id)->update(array('title' => $title));
        return redirect('groups');
    }

    public function group($id) {
        $user_id = Auth::id();
        $disciplines = Discipline::whereRaw('group_id = ' . $id. ' and user_id = ' . $user_id)->get();
        $students = Student::where('group_id', '=', $id)->orderBy('surname')->get();
        return view('home.group', compact('id', 'students', 'disciplines'));
    }

}
