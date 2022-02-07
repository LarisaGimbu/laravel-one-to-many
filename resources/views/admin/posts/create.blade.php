@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crea un post:</h1>

    @if ($errors->any())
      <div class="alert alert-danger" role="alert">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action=" {{route('admin.posts.store')}} " method="POST">
      @csrf
      @method('POST')
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title:</label>
        <input 
        value=" {{old('title')}} "
        type="text" 
        class="form-control
        @error('title') is-invalid @enderror " 
        id="title" 
        name="title" 
        placeholder="Title" 
        aria-describedby="emailHelp">

        @error('title')
        <p class="forms-errors">{{$message}}</p>
        @enderror

      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Content:</label>
        <textarea 
        type="text" 
        class="form-control
        @error('content') is-invalid @enderror " 
        id="content"
        name="content">
        {{old('content')}}
        </textarea>

        @error('content')
        <p class="forms-errors">{{$message}}</p>
        @enderror

      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </form>

</div>
@endsection