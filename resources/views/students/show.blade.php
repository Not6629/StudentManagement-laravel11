@extends('layout')
@section('title','View Student')
@section('content')
<div class="card mt-5">
    <div class="card-headder text-center"><h4><b>Student View Page</b></h4></div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name : {{$student->name}}</h5>
            <p class="card-text">address: {{$student->address}}</p>
            <p class="card-text">mobile: {{$student->mobile}}</p>
        </div>
    </div>
</div>
@endsection