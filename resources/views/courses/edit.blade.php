@extends('layout')
@section('title', 'Create a new course')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">Course page</div>
            <div class="card-body">
                <form class="form-horizontal" action="{{route('updatecourses',$course->id)}}" method="POST">
                    @csrf
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control mt-1" value="{{$course->name}}">
                    @error('name')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                    <label for="syllabus">Syllabus</label>
                    <input type="text" name="Syllabus" class="form-control mt-1" value="{{$course->syllabus}}">
                    @error('syllabus')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                    <label for="duration">Duration</label>
                    <input type="text" name="duration" class="form-control mt-1" value="{{$course->duration}}">
                    @error('duration')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                    <button type="submit" class="btn btn-success mt-3">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
