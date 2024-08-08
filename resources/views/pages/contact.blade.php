@extends('layouts.app')
@section('content')
<div id="blog">
    <div class="">
        @include('includes.contact.hero_section')
        @include('includes.contact.section-contact')
    </div>
</div>
@endsection
@section('afterScript')
    <script src="js/frontend/blog.js"></script>
@endsection