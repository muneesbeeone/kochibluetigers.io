@extends('layouts.app')
@section('content')
<div id="blog">
    <div class="">
        @include('includes.blog.hero_section')
        @include('includes.blog.section-blog')
    </div>
</div>
@endsection
@section('afterScript')
    <script src="js/frontend/blog.js"></script>
@endsection