@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <a href="{{route('admin.posts.create')}}"><button class="btn btn-primary">New Post</button></a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Slug</th>
                    <th>Author</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <thead>
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->content}}</td>
                            <td>{{$post->slug}}</td>
                            <td>{{$post->user->name}}</td>
                            <td>
                                <div>{{ $post->category ? $post->category->name : '' }}</div>
                                <div>{{ $post->tags->implode('name', ' - ') }}</div>
                            </td>
                            <td>
                                <a href="{{route('admin.posts.show', ['post' => $post->slug])}}">
                                    <button class="btn btn-primary">Show</button>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('admin.posts.edit', ['post' => $post->slug])}}">
                                    <button class="btn btn-info text-white">Edit</button>
                                </a>
                            </td>
                            @csrf
                            @method('DELETE')
                            <td>
                                <a href="{{route('admin.posts.destroy', ['post' => $post->slug])}}">
                                    <button class="btn btn-danger">Delete</button>
                                </a>
                            </td>
                        </tr>
                    </thead>
                @endforeach
            </tbody>
        </table>
        {{$posts->links()}}
    </div>
</div>
@endsection

<style>
    
</style>


