<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Models\User;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $invoice = Invoice::get()->first();
        $data = [
            'invoice'=>$invoice
        ];
        $pdf = PDF::loadView('myPDF', $data)->setPaper(array(0, 0, 650.44, 1370.07), 'portrait');
        return $pdf->download(time().'-'.uniqid().'.pdf');
    }
}
