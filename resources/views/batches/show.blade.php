@extends('layout')
@section('title','View Batch')
@section('content')
<div class="card mt-5">
    <div class="card-headder text-center"><h4><b>View Batch Page</b></h4></div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name : {{$batch->name}}</h5>
            <p class="card-text">Course Name : {{$batch->course->name}}</p>
            <p class="card-text">Course Syllabus : {{$batch->course->syllabus}}</p>
            <p class="card-text">Start Date : {{$batch->start_date}}</p>
        </div>
    </div>
</div>
@endsection