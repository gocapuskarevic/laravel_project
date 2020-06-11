@extends('layouts.app')
@section('sadrzaj')

<div class="row">
  <div class="col-12 col-md-6 offset-md-3">
    <h1>Welcome to login page</h1>
    {{ Form::open(array('url' => 'login')) }}

    <!-- if there are login errors, show them here -->
    <p>
        {{ $errors->first('email') }}
        {{ $errors->first('password') }}
    </p>

    <p>
        {{ Form::label('email', 'Email Address') }}
        {{ Form::text('email', '',['class' =>'form-control','placeholder'=>'Your email']) }}
    </p>

    <p>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password',['class' =>'form-control','placeholder'=>'Your password']) }}
    </p>

    <p>{{ Form::submit('Submit!') }}</p>
    {{ Form::close() }}
  </div>
</div>

  
  
    

@endsection