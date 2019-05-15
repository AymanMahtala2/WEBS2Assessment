@extends('layouts.app')

@section('content')
<div class="centered">
<a href="{{ url('sendMollie') }}">Stuur Mollie</a>
  <div class="row2">
    <div class="column">
      <h2>Inkomende mollies:</h2>
        <section class="cards">
          @foreach($users as $user)
                  @include('user', ['user' => $user])
              @endforeach
        </section>
    </div>
    <div class="column">
      <h2>Uitgaande mollies:</h2>
      <p>Some text..</p>
    </div>
</div>

  </div>
  @endsection