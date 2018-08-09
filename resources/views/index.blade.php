@extends('main')

@section('title', config('app.name'))

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div id="fullpage" class="">
    <div class="section">
        <div class="slide bg-primary">
            <div class="grid-x container">
                <div class="cell small-6">
                    <h5>6th Annual Creative Industries Event</h5>
                    <p>Dongkrak Seni UI 2018 is passionate in introducing art and music industry.</p>
                </div>
                <div class="cell small-6">
                    <h5>Community</h5>
                    <p>From various circles</p>
                    <h5>Bazaar</h5>
                    <p>From miscellanous tenants</p>
                    <h5>Exhibition</h5>
                    <p>From many art enthusiasts</p>
                    <h5>Music</h5>
                    <p>From various game</p>
                </div>
            </div>
        </div>
        <div class="slide bg-light">
            <div class="grid-x container">
                <div class="cell small-6">
                    <h5>6th Annual Creative Industries Event</h5>
                    <p>Dongkrak Seni UI 2018 is passionate in introducing art and music industry.</p>
                </div>
                <div class="cell small-6">
                    <h5>Community</h5>
                    <p>From various circles</p>
                    <h5>Bazaar</h5>
                    <p>From miscellanous tenants</p>
                    <h5>Exhibition</h5>
                    <p>From many art enthusiasts</p>
                    <h5>Music</h5>
                    <p>From various game</p>
                </div>
            </div>
        </div>
        <div class="slide bg-dark">
            <div class="grid-x container">
                <div class="cell small-6">
                    <h5>6th Annual Creative Industries Event</h5>
                    <p>Dongkrak Seni UI 2018 is passionate in introducing art and music industry.</p>
                </div>
                <div class="cell small-6">
                    <h5>Community</h5>
                    <p>From various circles</p>
                    <h5>Bazaar</h5>
                    <p>From miscellanous tenants</p>
                    <h5>Exhibition</h5>
                    <p>From many art enthusiasts</p>
                    <h5>Music</h5>
                    <p>From various game</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
