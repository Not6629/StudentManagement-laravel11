@extends('layouts.app')
@section('title', 'Edit Course')
@section('content')
        <div class="card mb-4">
            <div class="card-header">แก้ไขคอร์ส</div>
            <div class="card-body">
                <form class="form-horizontal" action="{{route('updatecourses',$course->id)}}" method="POST">
                    @csrf
                    <label for="name">ชื่อคอร์ส</label>
                    <input type="text" name="name" class="form-control mt-1" value="{{$course->name}}">
                    @error('name')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                    <label for="syllabus">หลักสูตร</label>
                    <input type="text" name="syllabus" class="form-control mt-1" value="{{$course->syllabus}}">
                    @error('syllabus')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                    <label for="duration">ระยะเวลาบทเรียน</label>
                    <input type="text" name="duration" class="form-control mt-1" value="{{$course->duration}}">
                    @error('duration')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                    <button type="submit" class="btn btn-success mt-3">ยืนยันการแก้ไข</button>
                </form>
            </div>
        </div>

@endsection
