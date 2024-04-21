@extends('layout')
@section('title','View Course')
@section('content')
<div class="card mt-5">
    <div class="card-headder text-center"><h4><b>View Course Page</b></h4></div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name : {{$course->name}}</h5>
            <p class="card-text">Syllabus: {{$course->syllabus}}</p>
            <p class="card-text">Duration: {{$course->duration()}}</p>
        </div>
    </div>
</div>
@endsection