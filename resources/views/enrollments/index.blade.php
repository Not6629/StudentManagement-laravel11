@extends('layout')
@section('title', 'Enrollments Home Page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2>Enrollments Application</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{route('createenrollments')}}" class="btn btn-success btn-sm" title="Add New Enrollment">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <div class="table-reponsive">
                            <table class="table mt-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Enroll No</th>
                                        <th>Batch</th>
                                        <th>Student</th>
                                        <th>Join Date</th>
                                        <th>Fee</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($enrollments as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->enroll_no}}</td>
                                            <td>{{$item->batch_id}}</td>
                                            <td>{{$item->student_id}}</td>
                                            <td>{{$item->join_date}}</td>
                                            <td>{{$item->fee}}</td>
                                            <td><a href="{{route('showenrollments',$item->id)}}"class="btn btn-primary">View</a></td>
                                            <td><a href="{{route('editenrollments',$item->id)}}"class="btn btn-warning">Edit</a></td>
                                            <td><a href="{{route('deleteenrollments',$item->id)}}"class="btn btn-danger" onclick="return confirm('Confirm to delete {{$item->name}}?')">Delete</a></td>
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
