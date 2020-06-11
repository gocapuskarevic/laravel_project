@extends('layouts.app')
@section('sadrzaj')

  <h1>Our posts</h1>
  @if(count($posts)>0)
    @foreach($posts as $post)
      <div class="card p-4">
        <h3><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
        <small>Napisan je {{$post->created_at}}</small>
      </div>
      </br>
    @endforeach
    {{$posts->links()}}
  @else
    <p>No Posts found</p>
  @endif

@endsection