@extends('templates.master')

@section('title')
Round Details
@endsection

@section('body')
<h1>Details</h1>

@if($result)
<div>
    <span>Round #{{ $result['id'] }}</span>
    <p>Player Guess: {{ $result['guess'] }}</p>
    @if( $result['outcome'] == 1)
    <p>Player Won</p>
    @else
    <p>Player Lost</p>
    @endif
</div>
@endif

<a href='/history' id='history-link'>&#x2190; History</a>

@endsection
