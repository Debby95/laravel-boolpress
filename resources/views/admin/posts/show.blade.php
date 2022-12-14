@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-3">
                <h1>Post: {{$post->title}}</h1>
                <a href="{{route('admin.posts.index') }}"></a>
            </div>
            <dl>
                <div class="row">
                    <div class="col">
                        <img class="img-fluid" src="{{ asset('storage/' . $post->cover_img) }}" alt="">
                    </div>
                    <div class="col">
                        <dt>Title</dt>
                        <dd>{{$post->title}}</dd>
                        <dt>Content</dt>
                        <dd>{{$post->content}}</dd>
                        <dt>Slug</dt>
                        <dd>{{$post->slug}}</dd>
                        <dt>Author</dt>
                        <dd>{{$post->user->name}}</dd>
                        <dt>Category</dt>
                        <dd>
                            @if($post->category)
                                <a href="{{route('admin.categories.posts', $post->category_id)}}">
                                    {{ $post->category->name }}
                                </a>
                            @endif
                        </dd>
                        <dt>Tags</dt>
                        <dd>
                            {{$post->tags->implode('name', ' - ')}}
                        </dd>
                    </div>
                </div>
                
            </dl>
            <a href="{{route('admin.posts.edit', ['post' => $post->slug])}}">
                <button type="submit" class="btn btn-info text-white">Edit</button>
            </a>
            <a href="{{route('admin.posts.index', $post->slug)}}">
                <button type="submit" class="btn btn-primary">Posts</button>
            </a>
            <form action="{{route('admin.posts.destroy', ['post' => $post->slug])}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mt-2">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection

<style>
    button {
        /* From https://css.glass */
        background: rgba(170, 112, 218, 0.35);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(170, 112, 218, 1);
    }
</style>