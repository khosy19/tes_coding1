<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Transaction_Detail;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(){
        // $data = Transaction::join('transaction_detail', 'transaction.id_transaction', '=', 'transaction_detail.id_transaction')
        // ->selectRaw('transaction.id_transaction as no_transaction, count(distinct transaction_detail.item) as total_item, sum(transaction_detail.qty) as total_quantity')
        // ->groupBy('transaction.id_transaction')
        // ->get();

        $data = Transaction::join('transaction_detail', 'transaction.id_transaction', '=', 'transaction_detail.id_transaction')->get();
    //    dd($data);
        return view('transaction',[
            'data' => $data,
        ]);

    }
    public function detail(){
        // $detail = Transaction_Detail::join('')
    }
    public function create()
    {
        return view('transaction.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'no_transaction' => 'required',
            'created_at' => 'required',
            'item' => 'required',
            'qty' => 'required',
        ]);
    
        // Create transaction
        $transaction = new Transaction;
        $transaction->no_transaction= $request->no_transaction;
        $transaction->created_at = $request->created_at;
        $transaction->item = $request->item;
        $transaction->qty = $request->qty;
        $transaction->save();
    }
    
}
