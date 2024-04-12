@extends('layout')
@section('title', 'Create a new teacher')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">Teacher page</div>
            <div class="card-body">
                <form class="form-horizontal" action="{{route('updateteachers',$teacher->id)}}" method="POST">
                    @csrf
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control mt-1" value="{{$teacher->name}}">
                    @error('name')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control mt-1" value="{{$teacher->address}}">
                    @error('address')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                    <label for="mobile">Mobile</label>
                    <input type="text" name="mobile" class="form-control mt-1" value="{{$teacher->mobile}}">
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
