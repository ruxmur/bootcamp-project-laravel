@extends('layout')
@section('content')
<article class="blog-post">
    <h1>class="blog-post-title"</h1>
    <img scr="{{$article->image_url}}"
    alt="{{$article->title}}">
</article>
<div>
    @include('article.comments', ['comments' =>@article->comments])
</div>
@endsection