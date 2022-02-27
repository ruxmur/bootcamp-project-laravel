<div class="comments_container">
    {{-- add comment --}}
    <form method="post" action=""> {{-- {{ route('comment.add') }} --}}
        <h4>Leave a comment</h4>
        @csrf
        <div class="form-group add_comments">
            <label for="authorEmail">
                <input class=" form-control add_comments_input" type="email" id="authorEmail" placeholder="your email" required name="authorEMail">
            </label>
            <label for="commentBody">
            </label>
            <textarea class="form-control add_comments_text"  style="width: 33%;" type="text" id="commentBody" placeholder="your comment" name="comment_body"></textarea>
            <input type="hidden" name="post_id" value="" /> {{-- {{ $post->id }} --}}
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-dark" value="Add Comment" />
        </div>
    </form>
    {{-- display comments --}}
    <div class="display_comments">
        <h4>{{ $article->comments()->count() }} Comments</h4>
        @foreach ($article->comments as $comment)
        {{-- <i class="far fa-user-circle"></i> --}}
        <div class="comments_body  ">
            <div class="comments_content">
                <div class="comments_content_header">
                    <i class="fas fa-user"></i>
                    <span class="comments_author">{{$comment->author_email}}</span>
                    <span>{{ $comment->created_at->diffForHumans() }}</span>
                </div>
                <p class="comments_text">{{$comment->message}}</p>
            </div>
        </div>
        @endforeach
        <div class="row">
            {{-- {{ $comment->links() }} --}}
        </div>
    </div>
</div>
