@extends('layouts.app')

@section('title')Edit Page @endsection

@section('content')
<form method="POST" action="{{route('posts.update',['post' => $post->id])}}">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" value="{{ $post->title }}">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea name="description" class="form-control" id="description">{{ $post->description }} </textarea>
    </div>
    <div class="form-group">
      <label  for="post_creator">Post Creator</label>
      <select name="user_id" class="form-control" id="post_creator">
          <option>{{ $post->posted_by }}</option>
          @foreach ($users as $user)
          <option value="{{$user->id}}">{{$user->name}}</option>
          @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Update Post</button>
  </form>

@endsection