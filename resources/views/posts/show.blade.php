@extends('layouts.master') 
@section('title', 'Post Page') 
@section('content')
<div class="col-md-8 blog-main">
    <div class="blog-post">
        <h2 class="blog-post-title">{{ $post->title }}</h2>
        <p class="blog-post-meta">
            {{$post->user->name }} on {{$post->created_at->toFormattedDateString()}}
        </p>

        {{$post->body}}
    </div>

    <hr> @if(!count($post->comments))
    <div class="text-center text-danger"><strong> No comments available. </strong></div> @endif
    <div class="comments">
        <ul class="list-group">
            @foreach ($post->comments as $comment)
            <li class="list-group-item">
                <strong class="text-info">
                   {{$comment->user['name']}} . </strong>
                <small class="text-secondary">{{ $comment->created_at->diffForHumans() }}</small>
                <p>{{$comment->body}}</p>

            </li>
            @endforeach
        </ul>
    </div>

    <hr>

    <div class="card">
        <div class="card-body pb-1">
            <form method="POST" action="/posts/{{$post->id}}/comments">
                {{ csrf_field() }}

                <div class="form-group">
                    <textarea name="body" placeholder="Join the discussion..." class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Add Comment</button>
                </div>

            </form>
    @include('layouts.errors')
        </div>
    </div>

</div>
@endsection