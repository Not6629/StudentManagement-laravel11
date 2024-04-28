@extends('layouts.app')
@section('title','View Teacher')
@section('content')
<div class="card mb-4">
    <div class="card-headder text-center"><h4><b>รายละเอียดอาจารย์</b></h4></div>
    <div class="card-body">
        <div class="card-body">
            <p class="card-text">ชื่ออาจารย์ : {{$teacher->name}}</p>
            <p class="card-text">ที่อยู่ : {{$teacher->address}}</p>
            <p class="card-text">เบอร์โทรศัพท์มือถือ : {{$teacher->mobile}}</p>
        </div>
    </div>
</div>
@endsection