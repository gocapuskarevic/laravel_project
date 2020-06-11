@extends('layouts.app')
@section('sadrzaj')

  <h1>{{$current->title}}</h1>
  <p>{{$current->body}}</p>

  @if( session('admin') && (session('admin') == 'success' ))

    {!!Form::open(['action'=>['PostsController@destroy',$current->id],'method'=>'POST'])!!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete post', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}

    <a href="{{url('/posts/edit/'.$current->id)}}">Edit post</a>

  @endif

  <a class="btn btn-primary" href="{{ URL::previous() }}">Vrati se nazad!</a>

@endsection