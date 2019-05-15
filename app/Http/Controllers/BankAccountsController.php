<?php

namespace App\Http\Controllers;
use App\bankaccount;
use Illuminate\Http\Request;

class BankAccountsController extends Controller
{
    public function index()
    {
        $id = \Auth::user()->id;
        $bankAccounts = bankaccount::where('user_id', $id)->get();
        return view('bankAccounts', ['bankAccounts' => $bankAccounts]);
    }
}