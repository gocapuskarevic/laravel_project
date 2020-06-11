@extends('layouts.app')
@section('sadrzaj')
<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
@endif
    <div class="row">
    <form method="post" action="{{action('PostsController@update', $current->id)}}" >
    @csrf
       
        <div class="form-group">
       
            <label for="title">Post Title:</label>
            <input type="text" class="form-control" name="post-title" value={{$current->title}} />
        </div>
        <div class="form-group">
            <label for="content">Post Content:</label>
            <textarea cols="5" rows="5" class="form-control" name="post-content">{{$current->body}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection