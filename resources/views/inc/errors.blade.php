@if(count($errors) > 0)
  @foreach($errors->all() as $error)
    <div class="alert alert-danger">
      {{$error}}
    </div>
  @endforeach
@endif

@if(session('success'))
  <div class="alert alert-success">
    {{session('success')}}
  </div>
@endif

@if(session('admin') && session('admin') == 'failed')
  <div class="alert alert-danger">
    Wrong email or password. Try again!
  </div>
@endif
