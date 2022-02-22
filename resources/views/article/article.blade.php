{{-- @extends('layout')
@section('content')
<article class="blog-post">
<h1>class="blog-post-title"</h1>
<img scr="{{$article->image_url}}" alt="{{$article->title}}">
</article>
<div>
@include('article.comments', ['comments'=>@article->comments])
</div>
@endsection --}}


@extends('layout')
@section('content')
    <h1></h1>
    
    <article class="article">
        <div>
            <div class="absolute-bg">
                <img class="article_image" src="{{ $article->image_url }}" alt="{{$article->exced}}">
            </div>
        </div>
        <div class="article_container">
            <span class="article_category">{{ $article->author->name }}</span>
            <div class="article_content">
                <header>
                    <time class="article_time">{{$article->published_at}}</time>
                    <h1 class="article_header"><span>{{$article->title}}</span></h1>
                </header>
            
                <p class="article_text">{{ $article->description }}</p>
                <div class="article_content-footer">
                    <div class="article_tags">
                        @foreach ($article->tags as $tag )
                            <span>article tags </span> 
                            <i class="fas fa-arrow-right"></i>
                            <a href="" class="article_tags-link"> {{ $tag->name}}</a>
                        @endforeach
                    </div>
                    <div class="article_share">
                        <a class="article_share-item" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="article_share-item" href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="article_share-item" href="#">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </article>
    @include('article.comments', ['comments' => $article->comments])
@endsection






