@extends('layouts.app')
@section('content')
    <div id="app">
        <div class="">
            @include('includes.landing-page.hero_section')
            @include('includes.landing-page.about_section')
            @include('includes.landing-page.sponsors_section')
            @include('includes.landing-page.news')
            @include('includes.landing-page.team')
            @include('includes.landing-page.gallary')
        </div>
    </div>
@endsection
@section('afterScript')
    <script src="js/frontend/home.js"></script>
@endsection
