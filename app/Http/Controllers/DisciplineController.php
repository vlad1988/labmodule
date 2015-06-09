<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use \Illuminate\Support\Facades\Auth;
use Request;
use App\Discipline;
use App\Group;
use App\Study;
use App\Scheme;

class DisciplineController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $id = Auth::id();

        $disciplines = Discipline::where('user_id', '=', $id)->orderBy('title')->get();
        $groups = Group::orderBy('title')->get();
        return view('discipline.disciplines', compact('disciplines', 'groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $user_id = Request::input('user_id');
        $title = Request::input('title');
        $group_str = Request::input('group_id');
        $group = explode('|', $group_str);
        $group_name = $group[0];
        $group_id = $group[1];

        $discipline = new Discipline;
        $discipline->title = $title;
        $discipline->user_id = $user_id;
        $discipline->group_name = $group_name;
        $discipline->group_id = $group_id;
        $discipline->save();

        return redirect('disciplines');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $group_id = Request::input('group_id');
        $discipline_id = Request::input('discipline_id');
        
        $study = new Study;
        $study->discipline_id = $discipline_id;
        $study->group_id = $group_id;
        $study->save();

        return redirect('disciplines/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $discipline_id = $id;
        $schemes = Scheme::where('discipline_id', '=', $id)->orderBy('title')->get();
        $discipline = Discipline::where('id', '=', $id)->orderBy('title')->get();
        return view('discipline.show', compact('discipline', 'discipline_id', 'schemes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        return $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        return $id;
    }

    public function disciplineview($id){
        return $id;
    }

}
