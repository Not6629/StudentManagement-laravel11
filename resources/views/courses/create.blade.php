@extends('layouts.app')
@section('title', 'Create a New Course')
@section('content')
    <div class="card mb-4">
        <div class="card-header">สร้างคอร์สใหม่</div>
        <div class="card-body">
            <form class="form-horizontal" action="{{route('storecourses')}}" method="POST">
            @csrf
            <label for="name">ชื่อคอร์ส</label>
            <input type="text" name="name" class="form-control mt-1">
            @error('name')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror
            <label for="syllabus">หลักสูตร</label>
            <input type="text" name="syllabus" class="form-control mt-1">
            @error('syllabus')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror
            <label for="duration">ระยะเวลาบทเรียน (หน่วย สัปดาห์)</label>
            <input type="text" name="duration" class="form-control mt-1">
            @error('duration')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror
            <button type="submit" class="btn btn-success mt-3">เพิ่มคอร์สใหม่</button>
            </form>
        </div>
    </div>

@endsection