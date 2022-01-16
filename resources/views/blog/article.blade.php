<div class="card shadow-sm">
  <img src="{{ \Illuminate\Support\Facades\Storage::url($article->image) }}" alt="{{ $article->title }}">
  <div class="card-body">
    <h3>{{ $article->title }}</h3>
    <p class="card-text">{{ $article->excerpt }}</p>
    <div class="d-flex justify-content-between align-items-center">
      <div class="btn-group">
        <a type="button" class="btn btn-sm btn-outline-secondary">View</a>
      </div>
      <small class="text-muted">9 mins</small>
    </div>
  </div>
</div>