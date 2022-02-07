@extends('layouts.app')

@section('content')
<div class="container">
    <h1> {{$post->title}} </h1>
    <h4>
        @if ($post->category)
            {{$post->category->name}}
        @endif
    </h4>


    <p> {{$post->content}} </p>
    <a href=" {{route('admin.posts.index')}} ">Torna all'elenco</a>

    <div class="p-4"><a class="btn-success p-2 rounded" href=" {{route('admin.posts.edit', $post)}} ">Edit</a></div>
    
   

</div>
@endsection