<?php

namespace App\Http\Controllers;
use App\User;
use App\mollie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $allMollies = mollie::All();
        //$Last10Users = User::orderBy('id', 'desc')->take(10)->get();
        return view('home', ['mollies' => $allMollies]);
    }
}
