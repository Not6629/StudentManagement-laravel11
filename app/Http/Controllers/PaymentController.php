<?php

namespace App\Http\Controllers;
use App\Models\Enrollment;
use App\Models\Payment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\View\View;


class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $payments = Payment::all();
        return view('payments.index',compact('payments'));
    }

    public function create():View
    {
        $enrollments = Enrollment::pluck('enroll_no', 'id');
        return view('payments.create',compact('enrollments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'enrollment_id'=>'required',
            'paid_date'=>'required',
            'amount'=>'required|min:10',
        ],
        [
            'enrollment_id.required' => 'กรุณาเลือกทะเบียนของคุณ',
            'paid_date.required' => 'กรุณาเลือกวันที่ชำระ',
            'amount.required' => 'กรุณากรอกจำนวนเงินที่ชำระ',
        ]);

        $validRequest = [
            'enrollment_id' => $request->enrollment_id,
            'paid_date' => $request->paid_date,
            'amount' => $request->amount
        ];
        Payment::create($validRequest);
        return redirect('/payments/index');
    }

    public function show($id)
    {
        $payment = Payment::find($id);
        return view('payments.show')->with('payment', $payment);
    }

    public function edit(string $id)
    {
        $payments = Payment::find($id);
        $enrollments = Enrollment::pluck('enroll_no','id','student_id');
        return view('payments.edit',compact('payments','enrollments'));
    }

    public function update(Request $request,$id): RedirectResponse
    {
        $request->validate([
            'enrollment_id'=>'required',
            'paid_date'=>'required',
            'amount'=>'required',
        ],
        [
            'enrollment_id.required' => 'กรุณาเลือกหมายเลขทะเบียนของคุณ',
            'paid_date.required' => 'กรุณาเลือกวันที่ชำระ',
            'amount.required' => 'กรุณากรอกจำนวนเงินที่ชำระ',
        ]);

        $validRequest = [
            'enrollment_id' => $request->enrollment_id,
            'paid_date' => $request->paid_date,
            'amount' => $request->amount,
        ];
        Payment::where('id',$id)->update($validRequest);
        $payments = Payment::find($id);
        return redirect('/payments/index');
    }

    public function destroy($id)
    {
        Payment::where('id',$id)->delete();
        return redirect('/payments/index');
    }
}
