<?php

namespace App\Http\Controllers;
use App\Models\Enrollment;
use App\Models\Student;
use App\Models\Batch;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\View\View;


class EnrollmentController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $students = Student::pluck('name', 'id');
        $batches = Batch::pluck('name', 'id');
        return view('enrollments.create',compact('students', 'batches'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'enroll_no'=>'required',
            'batch_id'=>'required',
            'student_id'=>'required',
            'join_date'=>'required',
            'fee'=>'required|integer'
        ],
        [
            'enroll_no.required' => 'กรุณากรอกหมายเลขทะเบียนของคุณ',
            'enroll_no.digits_between:2,5' => 'หมายเลขทะเบียนต้องมีตัวเลขอย่างต่ำ 2 ตัวและไม่เกิน 5 ตัว',
            'batch_id.required' => 'กรุณาเลือกกลุ่มวิชา',
            'student_id.required' => 'กรุณาเลือกนักเรียน',
            'join_date.required' => 'กรุณาเลือกวันที่เข้าร่วม',
            'fee.required' => 'กรุณาเลือกจำนวนค่าธรรมเนียม',
            'fee.integer' => 'ค่าธรรมเนียมควรเป็นตัวเลข'
        ]);
        
        $validRequest = [
            'enroll_no' => $request->enroll_no,
            'batch_id' => $request->batch_id,
            'student_id' => $request->student_id,
            'join_date' => $request->join_date,
            'fee' => $request->fee
        ];
        Enrollment::create($validRequest);
        return redirect('/enrollments/index');
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
        $batches = Batch::pluck('name', 'id');
        $students = Student::pluck('name', 'id');
        return view('Enrollments.edit',compact('enrollment','batches','students'));
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
        Enrollment::where('id',$id)->update($validRequest);
        return redirect('/enrollments/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Enrollment::where('id',$id)->delete();
        return redirect('/enrollments/index');
    }
}
