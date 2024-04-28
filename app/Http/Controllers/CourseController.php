<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\View\View;


class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index():View
    {
        $courses = Course::all();
        return view('courses.index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'syllabus'=>'required',
            'duration'=>'required',
        ],
        [
            'name.required' => 'กรุณากรอกชื่อคอร์ส',
            'syllabus.required' => 'กรุณากรอกเนื้อหาคอร์ส',
            'duration.required' => 'กรุณากรอกระยะเวลาการสอน',
        ]);
        $validRequest = [
            'name' => $request->name,
            'syllabus' => $request->syllabus,
            'duration' => $request->duration,
        ];
        Course::create($validRequest);
        return redirect('/courses/index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $course = Course::find($id);
        return view('courses.show')->with('course', $course);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::find($id);
        return view('courses.edit')->with('course', $course);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id): RedirectResponse
    {
        $request->validate([
            'name'=>'required',
            'syllabus'=>'required',
            'duration'=>'required',
        ],
        [
            'name.required' => 'กรุณากรอกชื่อคอร์ส',
            'syllabus.required' => 'กรุณากรอกเนื้อหาคอร์ส',
            'duration.required' => 'กรุณากรอกระยะเวลาการสอน',
        ]);
        $validRequest = [
            'name' => $request->name,
            'syllabus' => $request->syllabus,
            'duration' => $request->duration,
        ];
        Course::where('id',$id)->update($validRequest);
        $course = Course::find($id);
        return redirect('/courses/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Course::where('id',$id)->delete();
        return redirect('/courses/index');
    }
}
