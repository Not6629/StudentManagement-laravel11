<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $students = Student::all();
        return view('students.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'mobile'=>'required|min:10',
        ],
        [
            'name.required' => 'กรุณากรอกชื่อนักเรียน',
            'address.required' => 'กรุณากรอกที่อยู่',
            'mobile.required' => 'กรุณากรอกเบอร์โทรศัพท์',
            'mobile.min'=>'กรุณากรอกเบอร์โทรศัพท์ให้ครบ 10 หมายเลข'
        ]);
        $validRequest = [
            'name' => $request->name,
            'address' => $request->address,
            'mobile' => $request->mobile,
        ];
        Student::create($validRequest);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show')->with('student', $student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('students.edit')->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id): RedirectResponse
    {
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'mobile'=>'required|min:10',
        ],
        [
            'name.required' => 'กรุณากรอกชื่อนักเรียน',
            'address.required' => 'กรุณากรอกที่อยู่',
            'mobile.required' => 'กรุณากรอกเบอร์โทรศัพท์',
            'mobile.min'=>'กรุณากรอกเบอร์โทรศัพท์ให้ครบ 10 หมายเลข'
        ]);
        $validRequest = [
            'name' => $request->name,
            'address' => $request->address,
            'mobile' => $request->mobile,
        ];
        Student::where('id',$id)->update($validRequest);
        $student = Student::find($id);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Student::where('id',$id)->delete();
        return redirect('/');
    }
}
