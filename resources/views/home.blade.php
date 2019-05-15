@extends('layouts.app')

@section('content')
<div class="centered">
  <div class="row2">
    <div class="column">
      <h2>Te betalen:</h2>
        <section class="cards">
          @foreach($users as $user)
                  @include('user', ['user' => $user])
              @endforeach
        </section>
    </div>
    <div class="column">
      <h2>Te ontvangen:</h2>
      <p>Some text..</p>
    </div>
</div>

  </div>
  @endsection