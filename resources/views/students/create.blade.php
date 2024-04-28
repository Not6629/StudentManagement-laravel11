@extends('layouts.app')
@section('title', 'Create a New Student')
@section('content')
    <div class="container">

    <div class="card mt-5">
        <div class="card-header">เพิ่มนักเรียนใหม่</div>
        <div class="card-body">
            <form class="form-horizontal" action="{{route('storestudents')}}" method="POST">
            @csrf
            <label for="name">ชื่อนักเรียน</label>
            <input type="text" name="name" class="form-control mt-1">
            @error('name')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror
            <label for="address">ที่อยู่</label>
            <input type="text" name="address" class="form-control mt-1">
            @error('address')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror
            <label for="mobile">เบอร์โทรศัพท์มือถือ</label>
            <input type="text" name="mobile" class="form-control mt-1">
            @error('mobile')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror
            <button type="submit" class="btn btn-success mt-3">เพิ่มนักเรียนใหม่</button>
            </form>
        </div>
    </div>
</div>
@endsection