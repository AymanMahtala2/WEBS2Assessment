@extends('layouts.app')

@section('content')
<div class="centered">
    <h2>Nieuwe rekening:</h2>
    <div class="card-body">
    
    <form method="POST" action="{{ action('RekeningenBeheerController@store') }}">
        {{ csrf_field() }}
        Hoeveel geld wil je op de rekening zetten?
        <input type="text" name="balance" class="form-control"/>
        <br />
        <input type="submit" value="Save"/>
    </form>
    </div>

</div>
@endsection