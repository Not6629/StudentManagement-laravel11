@extends('layouts.app')
@section('title', 'Payments Home page')
@section('content')

                <div class="card mb-4">
                    <div class="card-header">
                        <h2>ระบบจัดการชำระ</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{route('createpayments')}}" class="btn btn-success btn-sm">
                            <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มการชำระเงินใหม่
                        </a>
                        <div class="table-reponsive">
                            <table class="table mt-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>หมายเลขทะเบียน</th>
                                        <th>วันที่ชำระค่าธรรมเนียม</th>
                                        <th>จำนวนเงิน</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payments as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{$item->enrollment->enroll_no}}</td>
                                            <td>{{$item->paid_date}}</td>
                                            <td>{{$item->amountinbaht()}}</td>
                                            <td><a href="{{route('showpayments',$item->id)}}"class="btn btn-primary">ดู</a>
                                            <a href="{{route('editpayments',$item->id)}}"class="btn btn-warning">แก้ไข</a>
                                            <a href="{{route('deletepayments',$item->id)}}"class="btn btn-danger" onclick="return confirm('Confirm to delete {{$item->name}}?')">ลบ</a>
                                            <a href="{{route('printreports',$item->id)}}" class="btn btn-success">ปริ้น</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

@endsection
