@extends('layout')
@section('title','View Payment')
@section('content')
<div class="card mt-5">
    <div class="card-headder text-center"><h4><b>Payment View Page</b></h4></div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Enrollment No : {{$payment->enrollment->enroll_no}}</h5>
            <p class="card-text">Paid Date : {{$payment->paid_date}}</p>
            <p class="card-text">Amount : {{$payment->amount}}</p>
        </div>
    </div>
</div>
@endsection