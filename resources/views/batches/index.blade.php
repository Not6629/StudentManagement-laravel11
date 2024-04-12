@extends('layout')
@section('title', 'Home page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2>Batches</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{route('createbatches')}}" class="btn btn-success btn-sm" title="Add new Batch">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <div class="table-reponsive">
                            <table class="table mt-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Course</th>
                                        <th>Start Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($batches as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->course_id}}</td>
                                            <td>{{$item->start_date}}</td>
                                            <td><a href="{{route('showbatches',$item->id)}}"class="btn btn-primary">View</a></td>
                                            <td><a href="{{route('editbatches',$item->id)}}"class="btn btn-warning">Edit</a></td>
                                            <td><a href="{{route('deletebatches',$item->id)}}"class="btn btn-danger" onclick="return confirm('Confirm to delete {{$item->name}}?')">Delete</a></td>
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
