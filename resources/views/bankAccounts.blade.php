@extends('layouts.app')

@section('content')
<div class="centered">
<a href="{{ url('sendMollie') }}">Maak nieuwe rekening aan</a>
  <div class="row2">
    <div class="column">
      <h2>{{ Auth::user()->name }}'s rekeningen</h2>
      <section class="cards">
          @foreach($bankAccounts as $bankAccount)
                  @include('bankAccount', ['bankAccount' => $bankAccount])
              @endforeach
        </section>
  </div>
</div>

  </div>
  @endsection