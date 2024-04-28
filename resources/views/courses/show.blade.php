@extends('layouts.app')
@section('title','View Course')
@section('content')
<div class="card mb-4">
    <div class="card-headder text-center"><h4><b>รายละเอียดคอร์ส</b></h4></div>
    <div class="card-body">
        <div class="card-body">
            <p class="card-text">ชื่อคอร์ส : {{$course->name}}</p>
            <p class="card-text">หลักสูตร : {{$course->syllabus}}</p>
            <p class="card-text">ระยะเวลาบทเรียน : {{$course->duration()}}</p>
        </div>
    </div>
</div>
@endsection