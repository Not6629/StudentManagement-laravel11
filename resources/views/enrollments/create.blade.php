@extends('layouts.app')
@section('title', 'Create a New Enrollment')
@section('content')
    <div class="card mb-4">
        <div class="card-header">การลงทะเบียนใหม่</div>
        <div class="card-body">
            <form class="form-horizontal" action="{{route('storeenrollments')}}" method="POST">
            @csrf

            <label for="enroll_no" class="mt-1">หมายเลขทะเบียน</label>
            <input type="text" name="enroll_no" class="form-control mt-1">
            @error('enroll_no')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror

            <label for="batch_id" class="mt-1">กลุ่มวิชา</label>
            <select name="batch_id" class="form-control mt-1">
            <option disabled selected value><span style="color: #6f7783;"> เลือกกลุ่มวิชา </span></option>
            @foreach($batches as $item=>$name)
            <option value="{{$item}}">{{$name}}</option>
            @endforeach
            </select>

            @error('batch_id')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror

            <label for="student_id" class="mt-1">นักเรียน</label>
            <select name="student_id" class="form-control mt-1">
            <option disabled selected value><span style="color: #6f7783;"> เลือกนักเรียน </span></option>
            @foreach($students as $item=>$name)
            <option value="{{$item}}">{{$name}}</option>
            @endforeach
            </select>

            @error('student_id')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror

            <label for="join_date" class=mt-1">วันที่เข้าร่วม</label>
            <input type="text" name="join_date" class="date form-control mt-1" style="cursor: pointer " placeholder="เลือกวันที่เข้าร่วม" onclick="flatpickr('input[type=date-local]',{format: 'Y-m-d'}); this.onclick=null;">
            @error('join_date')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror

            <label for="fee" class="mt-1">ค่าธรรมเนียม</label>
            <input type="text" name="fee" class="form-control mt-1" placeholder="xxx,xxx">
            @error('fee')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror

            <button type="submit" class="btn btn-success mt-3">เพิ่มทะเบียนใหม่</button>
            </form>
        </div>
    </div>

@endsection