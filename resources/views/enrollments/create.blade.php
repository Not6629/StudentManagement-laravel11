@extends('layout')
@section('title', 'Create a New Enrollment')
@section('content')
    <div class="container">

    <div class="card mt-5">
        <div class="card-header">Enrollment Create page</div>
        <div class="card-body">
            <form class="form-horizontal" action="{{route('storeenrollments')}}" method="POST">
            @csrf

            <label for="enroll_no" class="mt-1">Enroll No</label>
            <input type="text" name="enroll_no" class="form-control mt-1">
            @error('enroll_no')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror

            <label for="batch_id" class="mt-1">Batch Id</label>
            <select name="batch_id" class="form-control mt-1">
            <option disabled selected value><span>- select a batch -</span></option>
            @foreach($batches as $item=>$name)
            <option value="{{$item}}">{{$name}}</option>
            @endforeach
            </select>

            @error('batch_id')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror

            <label for="student_id" class="mt-1">Student Id</label>
            <select name="student_id" class="form-control mt-1">
            <option disabled selected value><span>- select a student -</span></option>
            @foreach($students as $item=>$name)
            <option value="{{$item}}">{{$name}}</option>
            @endforeach
            </select>

            @error('student_id')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror

            <label for="join_date" class="mt-1">Join Date</label>
            <input type="text" name="join_date" class="form-control mt-1">
            @error('join_date')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror

            <label for="fee" class="mt-1">Fee cost</label>
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