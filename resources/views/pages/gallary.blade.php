@extends('layouts.app')
@section('content')
<div id="blog">
    <div class="">
        @include('includes.gallary.hero_section')
        @include('includes.gallary.section-gallary')
    </div>
</div>
@endsection
@section('afterScript')
    <script src="js/frontend/blog.js"></script>
@endsection