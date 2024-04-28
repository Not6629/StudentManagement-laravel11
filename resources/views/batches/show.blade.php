@extends('layouts.app')
@section('title','View Batch')
@section('content')
<div class="card mb-4">
    <div class="card-headder text-center"><h4><b>รายละเอียดกลุ่มวิชา</b></h4></div>
    <div class="card-body">
        <div class="card-body">
            <p class="card-text">กลุ่มวิชา : {{$batch->name}}</p>
            <p class="card-text">ชื่อคอร์ส : {{$batch->course->name}}</p>
            <p class="card-text">หลักสูตร : {{$batch->course->syllabus}}</p>
            <p class="card-text">วันที่เริ่ม : {{$batch->start_date}}</p>
        </div>
    </div>
</div>
@endsection