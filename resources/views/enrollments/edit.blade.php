@extends('layout')
@section('title', 'Edit Enrollment')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">Enrollment Edit page</div>
            <div class="card-body">

                <form class="form-horizontal" action="{{route('updateenrollments',$enrollment->id)}}" method="POST">
                    @csrf

                    <label for="enroll_no" class="mt-1">Enroll No</label>
                    <input type="text" name="enroll_no" class="form-control mt-1" value="{{$enrollment->enroll_no}}">
                    @error('enroll_no')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror

                    <label for="batch_id" class="mt-1">Batch Id</label>
                    <select name="batch_id" class="form-control">
                        <option disabled><span>- select a batch -</span></option>
                        @foreach ($batches as $item => $name)
                            @if ($item == $enrollment->batch_id)
                                {
                                <option value="{{ $item }}">{{ $name }}</option>
                                }
                            @endif
                            @endforeach
                            @foreach ($batches as $item => $name)
                                @if ($item != $enrollment->batch_id)
                                    <option value="{{ $item }}">{{ $name }}</option>
                                @endif
                            @endforeach
                    </select>

                    @error('batch_id')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror

                    <label for="student_id" class="mt-1">Student Id</label>
                    <input type="text" name="student_id" class="form-control mt-1" value="{{$enrollment->student_id}}">
                    <label for="student_id">Student Id</label>
                    <select name="student_id" class="form-control">
                        <option disabled><span>- select a student -</span></option>
                        @foreach ($students as $item => $name)
                            @if ($item == $enrollment->student_id)
                                {
                                <option value="{{ $item }}">{{ $name }}</option>
                                }
                            @endif
                            @endforeach
                            @foreach ($students as $item => $name)
                                @if ($item != $enrollment->student_id)
                                    <option value="{{ $item }}">{{ $name }}</option>
                                @endif
                            @endforeach
                    </select>

                    @error('student_id')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror

                    <label for="join_date" class="mt-1">Join Date</label>
                    <input type="text" name="join_date" class="form-control mt-1" value="{{$enrollment->join_date}}">
                    @error('join_date')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror

                    <label for="fee" class="mt-1">Fee cost</label>
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
