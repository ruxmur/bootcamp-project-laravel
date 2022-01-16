<h3> comments {{@article->comments()->count()}}</h3>
    <ul>
    @foreach($article->comments as $comment)
     <li>{{@comment->message}}</li>
    @endforeach
    </ul>