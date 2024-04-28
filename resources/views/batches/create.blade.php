@extends('layouts.app')
@section('title', 'Create a New Batch')
@section('content')
    <div class="card mb-4">
        <div class="card-header">เพิ่มกลุ่มวิชาใหม่</div>
        <div class="card-body">
            <form class="form-horizontal" action="{{route('storebatches')}}" method="POST">
            @csrf

            <label for="name">ชื่อกลุ่มวิชา</label>
            <input type="text" name="name" class="form-control mt-1">
            @error('name')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror

            <label for="course_id">ชื่อคอร์ส</label>
            <select name="course_id" class="form-control">
            <option disabled selected value><span> เลือกคอร์ส </span></option>
            @foreach($courses as $item=>$name)
            <option value="{{$item}}">{{$name}}</option>
            @endforeach
            </select>
            
            @error('course_id')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror

            <label for="start_date">วันที่เริ่ม</label>
            <input type="text" name="start_date" class="form-control mt-1" style="cursor: pointer " placeholder="เลือกวันที่จะเริ่ม" onclick="flatpickr('input[type=date-local]',{format: 'Y-m-d'}); this.onclick=null;" />
            @error('start_date')
            <div class="alert alert-danger mt-2 mb-0">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror

            <button type="submit" class="btn btn-success mt-3">เพิ่มกลุ่มวิชาใหม่</button>

            </form>
        </div>
    </div>

@endsection