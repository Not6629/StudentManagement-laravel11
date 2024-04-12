@extends('layout')
@section('title', 'Edit Batch')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">Batch Edit page</div>
            <div class="card-body">
                <form class="form-horizontal" action="{{route('updateBatches',$batch->id)}}" method="POST">
                    @csrf
                    <label for="name">Batch Name</label>
                    <input type="text" name="name" class="form-control mt-1" value="{{$batch->name}}">
                    @error('name')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                    <label for="course_id">Course Name</label>
                    <input type="text" name="course_id" class="form-control mt-1" value="{{$batch->course_id}}">
                    @error('course_id')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                    <label for="start_date">Start Date</label>
                    <input type="text" name="start_date" class="form-control mt-1" value="{{$Batch->start_date}}">
                    @error('start_date')
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
