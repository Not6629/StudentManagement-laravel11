@extends('layouts.app')
@section('title', 'Create a New Payment')
@section('content')
    <div class="card mb-4">
        <div class="card-header">เพิ่มการชำระใหม่</div>
        <div class="card-body">
            <form class="form-horizontal" action="{{route('storepayments')}}" method="POST">
            @csrf

            <label for="enrollment_id">หมายเลขทะเบียน</label>
            <select name="enrollment_id" class="form-control mt-1">
                <option disabled selected value place ><span style="color: #6f7783;"> เลือกการลงทะเบียนของคุณ </span></option>
                @foreach($enrollments as $item=>$enroll_no)
                <option value="{{$item}}">{{$enroll_no}}</option>
                @endforeach
                </select>

            @error('enrollment_id')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror

            <label for="paid_date">วันที่ชำระค่าธรรมเนียม</label>
            <input type="text" name="paid_date" class="form-control mt-1" style="cursor: pointer " placeholder="เลือกวันที่ชำระค่าธรรมเนียม" onclick="flatpickr('input[type=date-local]',{format: 'Y-m-d'}); this.onclick=null;">
            @error('paid_date')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror

            <label for="amount">จำนวนเงิน (บาท)</label>
            <input type="text" name="amount" class="form-control mt-1" placeholder="xxx,xxx">
            @error('amount')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror

            <button type="submit" class="btn btn-success mt-3">เพิ่มใหม่</button>

            </form>
        </div>
    </div>

@endsection