@extends('layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('แสดงผล') }}
        </div>
        <div class="card-body">
            {{ __('เข้าสู่ระบบแล้ว! '.' สวัสดี '. $user->name) }}
        </div>
    </div>
@endsection
