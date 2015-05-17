<?php

namespace App\Http\Controllers;

use App\Group;
use App\Http\Requests;
use Request;

class HomeController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Home Controller
      |--------------------------------------------------------------------------
      |
      | This controller renders your application's "dashboard" for users that
      | are authenticated. Of course, you are free to change or remove the
      | controller as you wish. It is just here to get your app started!
      |
     */

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
        $groups = Group::all();
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

        return view('home.deletegroup', compact('id'));
    }

    public function editgroupview($id) {

        return view('home.editgroup', compact('id'));
    }

}
