@extends('layouts.app')

@section('content')
<div class="centered">
<a href="{{ url('sendMollie') }}">Stuur Mollie</a> <!-- als geen rekening is aangemaakt, dan doorverwijzen naar rekening aanmaak pagina -->
  <div class="row2">
    <div class="column">
      <h2>Uitgaande mollies:</h2>
      @foreach($mollies as $mollie)
                  @include('mollie', ['mollie' => $mollie])
              @endforeach
    </div>
    <div class="column">
      <h2>Betaalde mollies:</h2>
      <section class="cards">

        </section>
    </div>
</div>

  </div>
  @endsection