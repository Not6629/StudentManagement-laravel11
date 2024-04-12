@extends('layout')
@section('title', 'Create a new student')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">Student page</div>
            <div class="card-body">
                <form class="form-horizontal" action="{{route('updatestudents',$student->id)}}" method="POST">
                    @csrf
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control mt-1" value="{{$student->name}}">
                    @error('name')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control mt-1" value="{{$student->address}}">
                    @error('address')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                    <label for="mobile">Mobile</label>
                    <input type="text" name="mobile" class="form-control mt-1" value="{{$student->mobile}}">
                    @error('mobile')
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