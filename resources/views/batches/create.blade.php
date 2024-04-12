@extends('layout')
@section('title', 'Create a new course')
@section('content')
    <div class="container">

    <div class="card mt-5">
        <div class="card-header">Batches</div>
        <div class="card-body">
            <form class="form-horizontal" action="{{route('storebatches')}}" method="POST">
            @csrf
            <label for="name">Batch Name</label>
            <input type="text" name="name" class="form-control mt-1">
            @error('name')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror
            <label for="course_id">Course Name</label>
            <input type="text" name="course_id" class="form-control mt-1">
            @error('course_id')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror
            <label for="start_date">Start Date</label>
            <input type="text" name="start_date" class="form-control mt-1">
            @error('start_date')
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