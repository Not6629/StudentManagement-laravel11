@extends('layout')
@section('title', 'Payments Home page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2>Payments Application</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{route('createpayments')}}" class="btn btn-success btn-sm" title="Add new student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <div class="table-reponsive">
                            <table class="table mt-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Enrollment No</th>
                                        <th>Paid date</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payments as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{$item->enrollment->enroll_no}}</td>
                                            <td>{{$item->paid_date}}</td>
                                            <td>{{$item->amount}}</td>
                                            <td><a href="{{route('showpayments',$item->id)}}"class="btn btn-primary">View</a></td>
                                            <td><a href="{{route('editpayments',$item->id)}}"class="btn btn-warning">Edit</a></td>
                                            <td><a href="{{route('deletepayments',$item->id)}}"class="btn btn-danger" onclick="return confirm('Confirm to delete {{$item->name}}?')">Delete</a></td>
                                            <td><a href="{{route('printreports',$item->id)}}" class="btn btn-success">Print</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
