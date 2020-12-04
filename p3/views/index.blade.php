@extends('templates.master')

@section('title')
Mystery Animal
@endsection

@section('content')

<h2>Instructions</h2>

<p>Read the movie/tv reference and guess the animal. If you get it right you will win a brand new Jeep
    and a trip to Isla Nublar to visit the incredible Jurassic World! </p>

<h2>Description</h2>

<div id='animal-description'>{{ $randDescription }}</div>

@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@elseif($guess)
@if($message)
<div id='win-message'><i class="fas fa-trophy"></i> Congrats you did it!</div>
@else
<div id='lose-message'><i class="fas fa-times"></i> Aww try again</div>
@endif
@endif

<br>

<form method='POST' action='/play'>
    <input type='hidden' name='animal' value='{{ $randAnimal }}'>
    <label for='guess'><input type='text' name='guess'></label>
    <br>
    <button name='submit' type='submit'>Go!</button>
</form>

<br>

<a href='/history' id='history-link'> Game History &#x2192;</a>

@endsection
