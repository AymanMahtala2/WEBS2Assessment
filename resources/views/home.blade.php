@extends('layouts.app')

@section('content')
<div class="centered">
<a href="{{ url('sendMollie') }}">Stuur Mollie</a>
  <div class="row2">
    <div class="column">
      <h2>Inkomende mollies:</h2>
      
    </div>
    <div class="column">
      <h2>Uitgaande mollies:</h2>
      <section class="cards">
          @foreach($mollies as $mollie)
                  @include('mollie', ['mollie' => $mollie])
              @endforeach
        </section>
    </div>
</div>

  </div>
  @endsection