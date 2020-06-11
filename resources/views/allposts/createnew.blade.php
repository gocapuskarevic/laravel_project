@extends('layouts.app')
@section('sadrzaj')

  <h1>Add post about music</h1>

  {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
      {{Form::label('post-title', 'Title')}}
      {{Form::text('post-title', ' ', ['class' =>'form-control', 'placeholder'=>'Title'])}}
      </div>
  <div class="form-group">
    {{Form::label('post-content', 'Content')}}
    {{Form::textarea('post-content', ' ', ['class' =>'form-control', 'placeholder' =>'Add content'])}}
  </div>
    {{Form::submit('Create post!', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
  

@endsection