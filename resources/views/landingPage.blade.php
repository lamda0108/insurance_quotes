@extends('layouts.app')

@section('content')

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="banner">
    <div class="banner-content text-center">
        <img src="{{asset('images/truck.png')}}" alt="">
        <h1 class="text-capitalize text-title">
            Tracking your quotes
        </h1>
        <h3 class="banner-title-2 text-uppercase mb-4">
            fast & convenient
        </h3>
    </div>
</div>

@endsection