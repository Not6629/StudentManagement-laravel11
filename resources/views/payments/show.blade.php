@extends('layouts.app')
@section('title','View Payment')
@section('content')
<div class="card mb-4">
    <div class="card-header text-center"><h4><b>รายละเอียดการชำระ</b></h4></div>
    <div class="card-body">
        <div class="card-body">
            <p class="card-text">หมายเลขทะเบียน : {{$payment->enrollment->enroll_no}}</p>
            <p class="card-text">วันที่ชำระค่าธรรมเนียม : {{$payment->paid_date}}</p>
            <p class="card-text">จำนวนเงิน : {{$payment->amountinbaht()}}</p>
        </div>
    </div>
</div>
@endsection