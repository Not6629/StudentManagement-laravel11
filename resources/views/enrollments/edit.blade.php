@extends('layouts.app')
@section('title', 'Edit Enrollment')
@section('content')
        <div class="card mb-4">
            <div class="card-header">แก้ไขการลงทะเบียน</div>
            <div class="card-body">

                <form class="form-horizontal" action="{{route('updateenrollments',$enrollment->id)}}" method="POST">
                    @csrf

                    <label for="enroll_no" class="mt-1">หมายเลขทะเบียน</label>
                    <input type="text" name="enroll_no" class="form-control mt-1" value="{{$enrollment->enroll_no}}">
                    @error('enroll_no')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror

                    <label for="batch_id" class="mt-1">กลุ่มวิชา</label>
                    <select name="batch_id" class="form-control">
                        <option disabled><span> เลือกกลุ่มวิชา </span></option>
                        @foreach ($batches as $item => $name)
                            @if ($item == $enrollment->batch_id)
                                {
                                <option value="{{ $item }}">{{ $name }}</option>
                                }
                            @endif
                            @endforeach
                            @foreach ($batches as $item => $name)
                                @if ($item != $enrollment->batch_id)
                                    <option value="{{ $item }}">{{ $name }}</option>
                                @endif
                            @endforeach
                    </select>

                    @error('batch_id')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror

                    <label for="student_id"> ชื่อนักเรียน </label>
                    <select name="student_id" class="form-control">
                        <option disabled><span> เลือกนักเรียน </span></option>
                        @foreach ($students as $item => $name)
                            @if ($item == $enrollment->student_id)
                                {
                                <option value="{{ $item }}">{{ $name }}</option>
                                }
                            @endif
                            @endforeach
                            @foreach ($students as $item => $name)
                                @if ($item != $enrollment->student_id)
                                    <option value="{{ $item }}">{{ $name }}</option>
                                @endif
                            @endforeach
                    </select>

                    @error('student_id')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror

                    <label for="join_date" class="mt-1"> วันที่เข้าร่วม </label>
                    <input type="text" name="join_date" class="form-control mt-1" value="{{$enrollment->join_date}}" style="cursor: pointer " onclick="flatpickr('input[type=date-local]',{format: 'Y-m-d'}); this.onclick=null;">
                    @error('join_date')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror

                    <label for="fee" class="mt-1"> ค่าธรรมเนียม </label>
                    <input type="text" name="fee" class="form-control mt-1" value="{{$enrollment->fee}}">
                    @error('fee')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror

                    <button type="submit" class="btn btn-success mt-3">ยืนยันการแก้ไข</button>

                </form>
            </div>
        </div>

@endsection
