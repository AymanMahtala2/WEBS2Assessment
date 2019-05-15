<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankAccountsController extends Controller
{
    public function index()
    {
        return view('bankAccounts');
    }
}
