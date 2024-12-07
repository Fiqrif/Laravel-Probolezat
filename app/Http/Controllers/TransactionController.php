<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transaction = Transaction::all();
        return view('transaction.transaction', compact('transaction'));
    }

    public function cetak()
    {
        $transaction = Transaction::all();
        $pdf = Pdf::loadview('transaction.transaction-cetak', compact('transaction'));
        return $pdf->download('laporan-transaksi.pdf');
    }
}
