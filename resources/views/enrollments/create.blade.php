@extends('layout')
@section('title', 'Create a New Enrollment')
@section('content')
    <div class="container">

    <div class="card mt-5">
        <div class="card-header">Enrollment Create page</div>
        <div class="card-body">
            <form class="form-horizontal" action="{{route('storeenrollments')}}" method="POST">
            @csrf
            <label for="enroll_no">Enroll No</label>
            <input type="text" name="enroll_no" class="form-control mt-1">
            @error('enroll_no')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror
            <label for="batch_id">Batch Id</label>
            <input type="text" name="batch_id" class="form-control mt-1">
            @error('batch_id')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror
            <label for="student_id">Student Id</label>
            <input type="text" name="student_id" class="form-control mt-1">
            @error('student_id')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror
            <label for="join_date">Join Date</label>
            <input type="text" name="join_date" class="form-control mt-1">
            @error('join_date')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror
            <label for="fee">Fee cost</label>
            <input type="text" name="fee" class="form-control mt-1">
            @error('fee')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror
            <button type="submit" class="btn btn-success mt-3">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection