@extends('layout')
@section('title', 'Edit Enrollment')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">Enrollment Edit page</div>
            <div class="card-body">
                <form class="form-horizontal" action="{{route('updateenrollments',$enrollment->id)}}" method="POST">
                    @csrf
                    <label for="enroll_no">Enroll No</label>
                    <input type="text" name="enroll_no" class="form-control mt-1" value="{{$enrollment->enroll_no}}">
                    @error('enroll_no')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                    <label for="batch_id">Batch Id</label>
                    <input type="text" name="batch_id" class="form-control mt-1" value="{{$enrollment->batch_id}}">
                    @error('batch_id')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                    <label for="student_id">Student Id</label>
                    <input type="text" name="student_id" class="form-control mt-1" value="{{$enrollment->student_id}}">
                    @error('student_id')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                    <label for="join_date">Join Date</label>
                    <input type="text" name="join_date" class="form-control mt-1" value="{{$enrollment->join_date}}">
                    @error('join_date')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                    <label for="fee">Fee cost</label>
                    <input type="text" name="fee" class="form-control mt-1" value="{{$enrollment->fee}}">
                    @error('fee')
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
