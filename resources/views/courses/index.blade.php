@extends('layouts.app')
@section('title', 'Courses Home page')
@section('content')

                <div class="card mb-4">
                    <div class="card-header">
                        <h2>ระบบจัดการคอร์ส</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{route('createcourses')}}" class="btn btn-success btn-sm" title="Add new course">
                            <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มคอร์สใหม่
                        </a>
                        <div class="table-reponsive">
                            <table class="table mt-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ชื่อคอร์ส</th>
                                        <th>หลักสูตร</th>
                                        <th>ระยะเวลาบทเรียน</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->syllabus}}</td>
                                            <td>{{$item->duration()}}</td>
                                            <td><a href="{{route('showcourses',$item->id)}}"class="btn btn-primary">ดู</a>
                                            <a href="{{route('editcourses',$item->id)}}"class="btn btn-warning">แก้ไข</a>
                                            <a href="{{route('deletecourses',$item->id)}}"class="btn btn-danger" onclick="return confirm('Confirm to delete {{$item->name}}?')">ลบ</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

@endsection
