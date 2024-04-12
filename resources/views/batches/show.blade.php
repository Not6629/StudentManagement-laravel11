@extends('layout')
@section('title','Batch')
@section('content')
<div class="card mt-5">
    <div class="card-headder text-center"><h4><b>Batch Page</b></h4></div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name : {{$batch->name}}</h5>
            <p class="card-text">Course Name : {{$batch->course_id}}</p>
            <p class="card-text">Start Date : {{$batch->start_date}}</p>
        </div>
    </div>
</div>
@endsection