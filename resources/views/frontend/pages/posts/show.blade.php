<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>{{ $post->title }}</h2>
    {!! $post->description !!}
    <p>{{ $post->slug }}</p>
    <p>{{ $post->status }}</p>
    <p>{{ $post->category_id }}</p>
    <br>
</div> <br>
{{--  many to many  --}}
@foreach ($post->tags as $tag)
<mark> {{ $tag->name }} </mark> |
@endforeach
<hr>

<h4>Comments:</h4>
        @foreach ($post->comments as $comment)
            <p>{{ $comment->comment }} at {{ $comment->post->title }} by - {{ $comment->user->name }}</p>
            <p>at - {{ $comment->created_at->diffForHumans() }}</p>
            <br>
        @endforeach


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
</body>
</html>