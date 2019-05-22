<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bankaccount;
use App\Http\Controllers\Controller;
use Auth;

class RekeningenBeheerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = \Auth::user()->id;
        $bankAccounts = bankaccount::where('user_id', $id)->get();
        return view('RekeningenCRUD.index', ['bankAccounts' => $bankAccounts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('RekeningenCRUD.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bankAccount = new bankaccount();
        $bankAccount->user_id = Auth::user()->id;
        $bankAccount->balance = $request['balance'];
        if(empty($bankAccount->balance)){
            $bankAccount->balance = 0.00;
        }
        $bankAccount->save();
        return redirect()->action('RekeningenBeheerController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bankAccount = bankaccount::all()->find($id);
        return view('RekeningenCRUD.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bankAccount = bankaccount::all()->find($id);
        $bankAccount->user_id = Auth::user()->id;
        $bankAccount->balance = $request['balance'];
        if(empty($bankAccount->balance)){
            $bankAccount->balance = 0.00;
        }
        $bankAccount->save();
        return redirect()->action('RekeningenBeheerController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
