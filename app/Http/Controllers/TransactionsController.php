<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transactions;

class TransactionsController extends Controller
{
  
    public function index()
    {
        
        $transactions = Transactions::all();
        return view('agent.tenants.transactions')->with('transactions',$transactions);
    }                
    public function create()
    {

    }
    public function store(Request $request)
    {

    }
    public function show($id)
    {

    }
    public function edit($id)
    {

    }
    public function update(Request $request, $id)
    {

    }
    public function destroy($id)
    {

    }
}
