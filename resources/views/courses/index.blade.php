@extends('layout')
@section('title', 'Courses Home page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2>Courses Application</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{route('createcourses')}}" class="btn btn-success btn-sm" title="Add new course">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <div class="table-reponsive">
                            <table class="table mt-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Syllabus</th>
                                        <th>Duration</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->syllabus}}</td>
                                            <td>{{$item->duration}}</td>
                                            <td><a href="{{route('showcourses',$item->id)}}"class="btn btn-primary">View</a></td>
                                            <td><a href="{{route('editcourses',$item->id)}}"class="btn btn-warning">Edit</a></td>
                                            <td><a href="{{route('deletecourses',$item->id)}}"class="btn btn-danger" onclick="return confirm('Confirm to delete {{$item->name}}?')">Delete</a></td>
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
