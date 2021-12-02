<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use PDF;


class PDFController extends Controller
{
    public function generatePDF($uuid)
    {
        $data = Student::where('uuid', $uuid)->first();
        // return view('pdf', compact('student'));
        $name = $data->name . '_' . $data->uuid . '.pdf';
        return $pdf =  PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('pdf', compact('data'))->stream();




        return $pdf->download($name);
    }
}
