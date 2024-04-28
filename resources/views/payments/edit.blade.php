@extends('layouts.app')
@section('title', 'Edit Payment')
@section('content')
        <div class="card mb-4">
            <div class="card-header">แก้ไขการชำระ</div>
            <div class="card-body">

                <form class="form-horizontal" action="{{ route('updatepayments', $payments->id) }}" method="POST">
                    @csrf
                    <label for="enrollment_id" class="mt-1">หมายเลขทะเบียน</label>
                    <select name="enrollment_id" class="form-control mt-1">
                        <option disabled><span> เลือกการลงทะเบียนของคุณ </span></option>
                        @foreach ($enrollments as $item => $enroll_no)
                            @if ($item == $payments->enrollment_id)
                                {
                                <option value="{{ $item }}">{{ $enroll_no }}</option>
                                }
                            @endif
                            @endforeach
                            @foreach ($enrollments as $item => $enroll_no)
                                @if ($item != $payments->enrollment_id)
                                    <option value="{{ $item }}">{{ $enroll_no }}</option>
                                @endif
                            @endforeach
                    </select>
                    @error('enrollment_id')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror

                    <label for="paid_date" class="mt-1">วันที่ชำระค่าธรรมเนียม</label>
                    <input type="text" name="paid_date" class="form-control mt-1" value="{{ $payments->paid_date }}" style="cursor: pointer" onclick="flatpickr('input[type=date-local]',{format: 'Y-m-d'}); this.onclick=null;"">
                    @error('paid_date')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror

                    <label for="amount" class="mt-1">จำนวนเงิน (บาท)</label>
                    <input type="text" name="amount" class="form-control mt-1" value="{{ $payments->amount }}">
                    @error('amount')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                    <button type="submit" class="btn btn-success mt-3">ยืนยันการแก้ไข</button>
                </form>

            </div>
        </div>

@endsection
