<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\member;
use App\Models\transaction;
use PDF;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function allmember(){
        $members = member::all();
         
        return view('allmember',
        ['members'=> $members,
        ]);
    }
    public function generate_pdf()
    {
        $transactions = transaction::get();
        $pdf = Pdf::loadView('pdf.monthlyreport',[
            'transactions'=> $transactions, 
        ]);
        return $pdf->stream();
    }

    public function test()
    {
        $transactions = transaction::get();
        return View('monthlyreport',[
            'transactions'=> $transactions, 
        ]);
    }
    public function sendmessage()
    {
        return view('sendmessage');
    }
}
