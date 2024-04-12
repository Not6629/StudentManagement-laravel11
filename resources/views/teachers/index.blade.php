@extends('layout')
@section('title', 'Home page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2>Teacher Application</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{route('createteachers')}}" class="btn btn-success btn-sm" title="Add new teacher">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <div class="table-reponsive">
                            <table class="table mt-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teachers as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{Str::limit($item->name,12)}}</td>
                                            <td>{{Str::limit($item->address,10)}}</td>
                                            <td>{{ $item->mobile }}</td>
                                            <td><a href="{{route('showteachers',$item->id)}}"class="btn btn-primary">View</a></td>
                                            <td><a href="{{route('editteachers',$item->id)}}"class="btn btn-warning">Edit</a></td>
                                            <td><a href="{{route('deleteteachers',$item->id)}}"class="btn btn-danger" onclick="return confirm('Confirm to delete {{$item->name}}?')">Delete</a></td>
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
