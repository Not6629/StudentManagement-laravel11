@extends('layouts.app')
@section('title','View Enrollment')
@section('content')
<div class="card mb-4">
    <div class="card-header text-center"><h4><b>รายละเอียดการลงทะเบียน</b></h4></div>
    <div class="card-body">
        <div class="card-body">
            <p class="card-text">หมายเลขทะเบียน : {{$enrollment->enroll_no}}</p>
            <p class="card-text">กลุ่มวิชา : {{$enrollment->batch_id}}</p>
            <p class="card-text">ชื่อนักเรียน : {{$enrollment->student->name}}</p>
            <p class="card-text">วันที่เข้าร่วม : {{$enrollment->join_date}}</p>
            <p class="card-text">ค่าธรรมเนียม : {{$enrollment->feeinbaht()}}</p>
        </div>
    </div>
</div>
@endsection