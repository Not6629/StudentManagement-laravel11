@extends('layout')
@section('title', 'Create a New Payment')
@section('content')
    <div class="container">

    <div class="card mt-5">
        <div class="card-header">Payment Create Page</div>
        <div class="card-body">
            <form class="form-horizontal" action="{{route('storepayments')}}" method="POST">
            @csrf

            <label for="enrollment_id">Enroll No</label>
            <select name="enrollment_id" class="form-control mt-1">
                <option disabled selected value><span>- select an enrollment -</span></option>
                @foreach($enrollments as $item=>$enroll_no)
                <option value="{{$item}}">{{$enroll_no}}</option>
                @endforeach
                </select>

            @error('enrollment_id')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror

            <label for="paid_date">Paid Date</label>
            <input type="text" name="paid_date" class="form-control mt-1">
            @error('paid_date')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror

            <label for="amount">Amount</label>
            <input type="text" name="amount" class="form-control mt-1">
            @error('amount')
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