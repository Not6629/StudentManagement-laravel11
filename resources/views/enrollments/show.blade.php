@extends('layout')
@section('title','View Enrollment')
@section('content')
<div class="card mt-5">
    <div class="card-headder text-center"><h4><b>View Enrollment Page</b></h4></div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Enroll No : {{$enrollment->enroll_no}}</h5>
            <p class="card-text">Batch Id: {{$enrollment->batch_id}}</p>
            <p class="card-text">Student Id: {{$enrollment->student_id}}</p>
            <p class="card-text">Join Date: {{$enrollment->join_date}}</p>
            <p class="card-text">Fee cost: {{$enrollment->fee}}</p>
        </div>
    </div>
</div>
@endsection