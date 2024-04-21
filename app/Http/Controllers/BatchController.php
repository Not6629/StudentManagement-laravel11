<?php

namespace App\Http\Controllers;
use App\Models\Batch;
use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\View\View;


class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $batches = Batch::all();
        return view('batches.index')->with('batches', $batches);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        $courses = Course::pluck('name', 'id');
        return view('batches.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'course_id'=>'required',
            'start_date'=>'required',
        ],
        [
            'name.required' => 'กรุณากรอกชื่อ',
            'course_id.required' => 'กรุณาเลือก course',
            'start_date.required' => 'กรุณากรอกวันที่เริ่มเรียน'
        ]);
        $validRequest = [
            'name' => $request->name,
            'course_id' => $request->course_id,
            'start_date' => $request->start_date,
        ];
        Batch::create($validRequest);
        return redirect('/batches');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $batch = Batch::find($id);
        return view('batches.show')->with('batch', $batch);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $batch = Batch::find($id);
        $courses = Course::pluck('name', 'id');
        return view('batches.edit',compact('batch'),compact('courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id): RedirectResponse
    {
        $request->validate([
            'name'=>'required',
            'course_id'=>'required',
            'start_date'=>'required',
        ],
        [
            'name.required' => 'กรุณากรอกชื่อ',
            'course_id.required' => 'กรุณากรอกคอร์ส ID',
            'start_date.required' => 'กรุณากรอกวันที่เริ่มเรียน'
        ]);
        $validRequest = [
            'name' => $request->name,
            'course_id' => $request->course_id,
            'start_date' => $request->start_date,
        ];
        Batch::where('id',$id)->update($validRequest);
        $batch = Batch::find($id);
        return redirect('/batches');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Batch::where('id',$id)->delete();
        return redirect('/batches');
    }
}
