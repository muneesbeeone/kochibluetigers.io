@extends('layouts.app')
@section('content')
<div id="blog-details">
    <div class="">
        @include('includes.blog.hero_section_details')
        @include('includes.blog.section-blog-details')
    </div>
</div>
@endsection
@section('afterScript')
<script>
    var slug = "{{ $slug }}"
</script>
    <script src="/js/frontend/blog-details.js"></script>
@endsection