@extends('blog.layout')
<!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/app.css')}}"> -->
@section('content')
<h1>BLOG</h1>
<div class="row">
    <div class="col"> {{$articles->links()}}

    <!-- <div class="m-0 p-0 d-flex justify-content-between">
                    <div class="col">
                        <a class="btn btn-primary" href="/blog/article/create">Create an article</a>
                    </div>
                    <div class="col">
                        {{ $articles->links() }}
                    </div> -->

    </div>
    <div class="col">
        <a class="btn btn-ptimary" href="/blog/article/create">Create an article</a>
    </div>
</div>
<div>
    <form method="GET" action="/blog" class="row row-cols-3 m-4 mb-4">
        <div class="col">
            <select class="form-select" name="category">
                @foreach($categories as $category)
                <option value="{{$category->id}}" @if($filter['category']===$category->id) selected @endif
                    >{{$category->name}}</option>
                @endforeach
                <option value="ASC" @if($filter['sort']==='ASC' ) selected @endif>ASC</option>
            </select>
        </div>
        <div class="col">
            <select class="form-select" name="sort">
                <option value="DESC" {{ $filter['sort'] === 'DESC' ? 'selected':'' }}>DESC</option>
                <option value="ASC" @if($filter['sort']==='ASC' ) selected @endif>ASC</option>
            </select>
        </div>
    </form>
    <div class="col">
        <button class="btn btn-primary">Apply sort</button>
    </div>
</div>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    @foreach($articles as $article)
    <div class="col">
        @include('blog.article', ['article' => $article])
    </div>
    @endforeach
</div>

<div class="row">
    {{$articles->links()}}
</div>
@endsection