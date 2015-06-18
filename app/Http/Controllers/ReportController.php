<?php namespace App\Http\Controllers;

//use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use Request;
use App\Report;
use App\Student;

class ReportController extends Controller {

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index()
    {

    }

    /**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
    public function create()
    {
        $schema_id = Request::input('schema');
        $discipline_id = Request::input('discipline_id');
        $student_id = Request::input('student_id');
        $title = Request::input('comment');

        $file = Request::file('file');
        $extension = Request::file('file')->getClientOriginalExtension();

        $fileName = rand(11111,99999).'.'.$extension;
        Request::file('file')->move(base_path() . '/public/catalog/', $fileName);

        $report = new Report;
        $report->title = $title;
        $report->filepath = $fileName;
        $report->approvedate = date("Y-m-d");
        $report->status = "Розглядається";
        $report->discipline_id = $discipline_id;
        $report->student_id = $student_id;
        $report->schema_id = $schema_id;
        $report->save();

        return redirect('report/'.$student_id.'/'.$discipline_id);

    }

    /**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store()
    {
        //
    }

    /**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function show($discipline_id, $student_id)
    {
        $reports = Report::whereRaw('discipline_id = ' . $discipline_id. ' and student_id = ' . $student_id)->get();

        return $reports;
    }

    /**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function edit($id)
    {
        //
    }

    /**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update($id)
    {
        //
    }

    /**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function destroy($id)
    {

    }

    public function reportlist($discipline_id, $group_id){
        $students = Student::where('group_id', '=', $group_id)->orderBy('surname')->get();
        return view('student.reportlist', compact('students', 'discipline_id'));
    }

}
