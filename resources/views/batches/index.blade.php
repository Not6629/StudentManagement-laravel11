@extends('layouts.app')
@section('title', 'Batches Home page')
@section('content')
                <div class="card mb-4">
                    <div class="card-header">
                        <h2>ระบบจัดการกลุ่มวิชา</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{route('createbatches')}}" class="btn btn-success btn-sm" title="Add new Batch">
                            <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มกลุ่มวิชาใหม่
                        </a>
                        <div class="table-reponsive">
                            <table class="table mt-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ชื่อกลุ่มวิชา</th>
                                        <th>ชื่อคอร์ส</th>
                                        <th>วันที่เริ่ม</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($batches as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->course->name}}</td>
                                            <td>{{$item->start_date}}</td>
                                            <td><a href="{{route('showbatches',$item->id)}}"class="btn btn-primary">ดู</a>
                                            <a href="{{route('editbatches',$item->id)}}"class="btn btn-warning">แก้ไข</a>
                                            <a href="{{route('deletebatches',$item->id)}}"class="btn btn-danger" onclick="return confirm('Confirm to delete {{$item->name}}?')">ลบ</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

@endsection
