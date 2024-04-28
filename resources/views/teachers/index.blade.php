@extends('layouts.app')
@section('title', 'Teachers Home page')
@section('content')
    <div class="card mb-4">

                    <div class="card-header">
                        <h2>ระบบจัดการอาจารย์</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{route('createteachers')}}" class="btn btn-success btn-sm" title="Add new teacher">
                            <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มอาจารย์ใหม่
                        </a>
                        <div class="table-reponsive">
                            <table class="table mt-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ชื่ออาจารย์</th>
                                        <th>ที่อยู่</th>
                                        <th>เบอร์โทรศัพท์มือถือ</th>
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
                                            <td><a href="{{route('showteachers',$item->id)}}"class="btn btn-primary">ดู</a>
                                            <a href="{{route('editteachers',$item->id)}}"class="btn btn-warning">แก้ไช</a>
                                            <a href="{{route('deleteteachers',$item->id)}}"class="btn btn-danger" onclick="return confirm('Confirm to delete {{$item->name}}?')">ลบ</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

@endsection
