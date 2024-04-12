@extends('layout')
@section('title','teacher')
@section('content')
<div class="card mt-5">
    <div class="card-headder text-center"><h4><b>Teacher Page</b></h4></div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name : {{$teacher->name}}</h5>
            <p class="card-text">address: {{$teacher->address}}</p>
            <p class="card-text">mobile: {{$teacher->mobile}}</p>
        </div>
    </div>
</div>
@endsection