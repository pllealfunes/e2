@extends('templates.master')

@section('title')
Mystery Animal
@endsection

@section('content')

<h2>Instructions</h2>

<p>Read the description and guess the animal. If you get it right you will win a brand new Jeep
    and a trip to Isla Nublar to visit the incredible Jurassic World! </p>
<p>{{ $randDescription }}</p>
@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@elseif($guess)
@if($guess == $randAnimal)
You guessed right! {{ $randAnimal }}
@endif
@endif

<form method='POST' action='/play'>
    <label for='guess'><input type='text' name='guess'></label>
    <button type='submit'>Go!</button>
</form>
<a href='/history'>History</a>

@endsection
