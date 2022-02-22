<div class="card shadow-sm">
  <img src="{{ \Illuminate\Support\Facades\Storage::url($article->image) }}" alt="{{ $article->title }}">
  <div class="card-body">
    <h3>{{ $article->title }}</h3>
    <p class="card-text">{{ $article->excerpt }}</p>
    <div class="d-flex justify-content-between align-items-center">
      <div class="btn-group">
        <a href="{{route('article',['id' => $article->id])}}" type="button" class="btn btn-sm btn-outline-secondary">View</a>
      </div>
      <small class="text-muted">9 mins</small>
    </div>
  </div>
</div>



<!-- 
<div class="article__card">
  <div class="article__category-name">
    <h4 class="category-name">{{ $article->category->name }}</h4>
  </div>
  <a href="{{route('article',['id' => $article->id])}}" class="article__card-link">
    <img src="{{ $article->image_url }}" alt="{{ $article->title }}" class="article__card-img">
  </a>
  <div class="article-card__content">
    <div class="aricle__card-tags">
      <span class="card-tags__item">{{ $article->category->name }}</span>
      <span class="card-tags__item">{{ $article->category->name }}</span>
      <span class="card-tags__item">{{ $article->category->name }}</span>
    </div>
    <time class="article__content-date">
      {{ Carbon\Carbon::parse($article->published_at)->format('j F, Y') }}
    </time>
    <a href="{{route('article',['id' => $article->id])}}" class="article__content-link">
      <h4 class="article__content-title">{{ $article->title }}</h4>
      <p class="article__content-text">{{ $article->excerpt }}</p>
    </a>
    <div class="article__content-footer">
      <address class="article__author"><a rel="author" href="#">{{ $article->author->name }}</a></address>
      <a href="{{route('article',['id' => $article->id])}}" class="article__comments"><i class="far fa-comment-dots"></i> <span class="article__comments-counter">{{ $article->comments()->count() }}</span></a>
    </div>
  </div>
</div> -->