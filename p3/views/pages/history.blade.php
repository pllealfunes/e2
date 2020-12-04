@extends('templates.master')

@section('title')
Game History
@endsection

@section('body')
<h1 id='history-title'>History <i class="fas fa-history"></i> </h1>

<a href='/' id='home-link'> &#x2190; Home</a>

<br>

<div>

    <br>
    @foreach($results as $result)
    <a href='/details?id={{ $result["id"] }}'>
        <div id='round-container'>
            <div>Round # {{ $result['id'] }} &#xbb;</div>
        </div>
    </a>
    @endforeach

</div>
@endsection
