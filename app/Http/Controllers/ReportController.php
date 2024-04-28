<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use App;
use Auth;


class ReportController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function print($pid){
    $payment = Payment::find($pid);
    $pdf = App::make('dompdf.wrapper');
    $print = "<div style='margin:20px; padding:20px;'> </div>";
    $print.="<h1 align='center'> Payment Receipt </h1>";
    $print.="<hr/>";
    $print.="<p> Receipt No : <b>" . $pid . "</b></p>";
    $print.="<p> Date : <b>" . $payment->paid_date . "</b></p>";
    $print.="<p> Enrollment No : <b>" . $payment->enrollment->enroll_no . "</b></p>";
    $print.="<p> Student Name : <b>" . $payment->enrollment->student->name . "</b></p>";
    $print.="<hr/>";
    $print.="<table style='width:100%;'>";
    $print.="<tr>";
    $print.="<td>Description</td>";
    $print.="<td>Amount</td>";
    $print.="</tr>";
    $print.="<td> <h3>" . $payment->enrollment->batch->name . "</h3></td>";
    $print.="<td> <h3>" . $payment->amount . " Baht "."</h3></td>";
    $print.="</tr>";
    $print.="</table>";
    $print.="<hr/>";
    $print.="<span> Printed Date: <b>". date('Y-m-d') . "</b></span>";
    $print.="</div>";
    $pdf->loadHTML($print);
    
    return $pdf->stream();
    }
}
