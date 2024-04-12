<?php

namespace App\Http\Controllers;
use App\Models\Enrollment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\View\View;


class EnrollmentController extends Controller
{
    public function index():View
    {
        $enrollments = Enrollment::all();
        return view('enrollments.index')->with('enrollments', $enrollments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('enrollments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'enroll_no'=>'required',
        //     'batch_id'=>'required',
        //     'student_id'=>'required',
        //     'join_date'=>'required',
        //     'fee'=>'required'
        // ],
        // [
        //     'enroll_no.required' => 'กรุณากรอกชื่อคอร์ส',
        //     'batch_id.required' => 'กรุณากรอกเนื้อหาคอร์ส',
        //     'student_id.required' => 'กรุณากรอกระยะเวลาการสอน',
        //     'join_date.required' => 'กรุณากรอกวันที่เข้าร่วม',
        //     'fee.required' => 'กรุณากรอกค่าธรรมเนียมคอร์ส'
        // ]);
        $validRequest = [
            'enroll_no' => $request->enroll_no,
            'batch_id' => $request->batch_id,
            'student_id' => $request->student_id,
            'join_date' => $request->join_date,
            'fee' => $request->fee
        ];
        Enrollment::create($validRequest);
        return redirect('/enrollments');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $enrollment = enrollment::find($id);
        return view('Enrollments.show')->with('enrollment', $enrollment);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enrollment = Enrollment::find($id);
        return view('Enrollments.edit')->with('Enrollment', $enrollment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id): RedirectResponse
    {
        $request->validate([
            'enroll_no'=>'required',
            'batch_id'=>'required',
            'student_id'=>'required',
            'join_date'=>'required',
            'fee'=>'required'
        ],
        [
            'enroll_no.required' => 'กรุณากรอกชื่อคอร์ส',
            'batch_id.required' => 'กรุณากรอกเนื้อหาคอร์ส',
            'student_id.required' => 'กรุณากรอกระยะเวลาการสอน',
            'join_date.required' => 'กรุณากรอกวันที่เข้าร่วม',
            'fee.required' => 'กรุณากรอกค่าธรรมเนียมคอร์ส'
        ]);
        $validRequest = [
            'enroll_no' => $request->enroll_no,
            'batch_id' => $request->batch_id,
            'student_id' => $request->student_id,
            'join_date' => $request->join_date,
            'fee' => $request->fee
        ];
        Enrollment::create($validRequest);
        return redirect('/enrollments');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Enrollment::where('id',$id)->delete();
        return redirect('/enrollments');
    }
}
