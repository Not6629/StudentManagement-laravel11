@extends('layouts.app')
@section('title','View Student')
@section('content')
<div class="card mb-4">
    <div class="card-header text-center"><h4><b>รายละเอียดนักเรียน</b></h4></div>
    <div class="card-body">
        <div class="card-body">
            <table class="table mt-3">
            <p class="card-text">ชื่อนักเรียน : {{$student->name}}</p>
            <p class="card-text">ที่อยู่ : {{$student->address}}</p>
            <p class="card-text">เบอร์โทรศัพท์มือถือ : {{$student->mobile}}</p>
            </table>
        </div>
    </div>
</div>
@endsection