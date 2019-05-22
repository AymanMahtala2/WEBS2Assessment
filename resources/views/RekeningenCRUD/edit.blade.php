@extends('layouts.app')

@section('content')
<div class="centered">
    <h2>Rekening opwaarderen/afwaarderen:</h2>
    <div class="card-body">
    
    <form method="POST" action="{{ action('RekeningenBeheerController@update, $bankAccount->accountnumber') }}">
        {{ csrf_field() }}
        Hoeveel geld wil je op de rekening hebben?
        <input type="text" value="{{ (old('balance') ? old('balance') : $bankAccount->balance) }}" name="balance" class="form-control"/>
        <br />
        <input type="submit" value="Save"/>
    </form>
    </div>

</div>
@endsection