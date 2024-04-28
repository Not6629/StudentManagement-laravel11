@extends('layouts.app')
@section('title', 'Enrollments Home Page')
@section('content')
                <div class="card mb-4">
                    <div class="card-header">
                        <h2>ระบบจัดการทะเบียน</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{route('createenrollments')}}" class="btn btn-success btn-sm" title="Add New Enrollment">
                            <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มทะเบียนใหม่
                        </a>
                        <div class="table-reponsive">
                            <table class="table mt-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>หมายเลขทะเบียน</th>
                                        <th>กลุ่มวิชา</th>
                                        <th>นักเรียน</th>
                                        <th>วันที่เข้าร่วม</th>
                                        <th>ค่าธรรมเนียม</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($enrollments as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->enroll_no}}</td>
                                            <td>{{$item->batch->name}}</td>
                                            <td>{{$item->student->name}}</td>
                                            <td>{{$item->join_date}}</td>
                                            <td>{{$item->feeinbaht()}}</td>
                                            <td><a href="{{route('showenrollments',$item->id)}}"class="btn btn-primary">ดู</a>
                                            <a href="{{route('editenrollments',$item->id)}}"class="btn btn-warning">แก้ไข</a>
                                            <a href="{{route('deleteenrollments',$item->id)}}"class="btn btn-danger" onclick="return confirm('Confirm to delete {{$item->name}}?')">ลบ</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

@endsection
