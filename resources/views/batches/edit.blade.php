@extends('layouts.app')
@section('title', 'Edit Batch')
@section('content')
        <div class="card mb-4">
            <div class="card-header">แก้ไขกลุ่มวิชา</div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('updatebatches', $batch->id) }}" method="POST">
                    @csrf
                    <label for="name">ชื่อกลุ่มวิชา</label>
                    <input type="text" name="name" class="form-control mt-1" value="{{ $batch->name }}">
                    @error('name')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror

                    <label for="course_id">ชื่อคอร์ส</label>
                    <select name="course_id" class="form-control">
                        <option disabled><span> เลือกคอร์ส </span></option>
                        @foreach ($courses as $item => $name)
                            @if ($item == $batch->course_id)
                                {
                                <option value="{{ $item }}">{{ $name }}</option>
                                }
                            @endif
                            @endforeach
                            @foreach ($courses as $item => $name)
                                @if ($item != $batch->course_id)
                                    <option value="{{ $item }}">{{ $name }}</option>
                                @endif
                            @endforeach
                    </select>

                    @error('course_id')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                    <label for="start_date">วันที่เริ่ม</label>
                    <input type="text" name="start_date" class="form-control mt-1" value="{{ $batch->start_date }}" style="cursor: pointer" onclick="flatpickr('input[type=date-local]',{format: 'Y-m-d'}); this.onclick=null;">
                    @error('start_date')
                        <div class="alert alert-danger mt-2 mb-0">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                    <button type="submit" class="btn btn-success mt-3">ยืนยันการแก้ไข</button>
                </form>
            </div>
        </div>

@endsection
