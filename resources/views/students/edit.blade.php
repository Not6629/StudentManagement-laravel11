@extends('layouts.app')
@section('title', 'Edit Student')
@section('content')
        <div class="card mb-4">
            <div class="card-header">แก้ไขข้อมูลนักเรียน</div>
            <div class="card-body">
                <form class="form-horizontal" action="{{route('updatestudents',$student->id)}}" method="POST">
                    @csrf
                    <label for="name">ชื่อนักเรียน</label>
                    <input type="text" name="name" class="form-control mt-1" value="{{$student->name}}">
                    @error('name')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                    <label for="address">ที่อยู่</label>
                    <input type="text" name="address" class="form-control mt-1" value="{{$student->address}}">
                    @error('address')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                    <label for="mobile">เบอร์โทรศัพท์มือถือ</label>
                    <input type="text" name="mobile" class="form-control mt-1" value="{{$student->mobile}}">
                    @error('mobile')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                    <button type="submit" class="btn btn-success mt-3">ยืนยันการแก้ไข</button>
                </form>
            </div>
        </div>
@endsection
