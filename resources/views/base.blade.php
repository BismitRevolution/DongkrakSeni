@extends('main')

@section('title', 'Dongkrak Seni')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/base.css') }}">
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div id="fullpage" class="">
    <div class="section">
        @include('pages.home')
        @include('pages.community')
        @include('pages.bazaar')
        @include('pages.exhibition')
        @include('pages.music')
        @include('pages.lineup')
        @include('pages.schedule')
        @include('pages.ticket')
    </div>
</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/base.js') }}"></script>
<script type="application/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
