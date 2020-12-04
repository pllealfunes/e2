@extends('templates.master')

@section('title')
Round Details
@endsection

@section('body')

@if($result)
<div>
    <h2>Round #{{ $result['id'] }} Details</h2>
    <p>Player Guess: {{ $result['guess'] }}</p>
    @if( $result['win'] == 1)
    <p>Player Won</p>
    @else
    <p>Player Lost</p>
    @endif
</div>
@endif

<a href='/history' id='history-link'>&#x2190; History</a>

@endsection
