<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transactions;


class AdminTransactionsController extends Controller
{
    public function index()
    {
        $transactions = Transactions::all();
        return view('admin.transactions.index')->with('transactions',$transactions);
    }

    // public function create()
    // {
    //     return view('agent.transactions.create');
    // }

    // public function store(Request $request)
    // {
    //     $input = $request->all();
    //     Transactions::create($input);
    //     session()->flash('success', 'Added successfully');
    //     return redirect('agent/transactions');
    // }

    public function show($id)
    {
        $transaction = Transactions::find($id);
        return view('admin.transactions.show')->with('transactions',$transaction);
    }

    public function edit($id)
    {
        $transaction = Transactions::find($id);
        return view('admin.transactions.edit')->with('transactions', $transaction);
    }

    public function update(Request $request, $id)
    {
        $transaction = Transactions::find($id);
        $input = $request->all();
        $transaction->update($input);
        return redirect('admin/transactions')->with('flash message', 'transaction Updated!');
    }

    // public function destroy($id)
    // {
    //     Transactions::destroy($id);
    //     return redirect('agent/transactions')->with('flash message', 'transaction deleted!');
    // }
}
