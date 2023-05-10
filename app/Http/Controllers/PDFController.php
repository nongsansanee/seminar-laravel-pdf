<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
class PDFController extends Controller
{
    public function testDompdf()
    {

        $pdf = Pdf::loadView('test_pdf');
        return $pdf->stream('test_dompdf.pdf');
    }
    public function index()
    {
        $employees = Employee::all();
        return view('index',['employees'=>$employees]);
    }
    public function downloadPDF()
    {
        // วันเวลาที่พิมพ์
        $thaimonth = ['', 'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'];
        $mutable = Carbon::now();
        //\Log::info($mutable);
        $tmp_date_now = explode(' ', $mutable);
        $split_date_now = explode('-', $tmp_date_now[0]);
        $year_print = (int) $split_date_now[0] + 543;
        $date_now_show = $split_date_now[2].'  '.$thaimonth[(int) $split_date_now[1]].' '.$year_print;
        $date_print = 'วันเวลาที่พิมพ์'.'  '.$date_now_show.'  '.$tmp_date_now[1].' น.';

        $employees = Employee::all();
        $pages = number_format(ceil(count($employees)/17),0);
        $pdf = Pdf::loadView('employee_pdf',[
                                 'employees'=>$employees,
                                'pages'=>$pages,
                                'date_print'=>$date_print
                              ])
                            ->setPaper('a4', 'landscape');
        return $pdf->stream('employee_dompdf.pdf');
    }
}
