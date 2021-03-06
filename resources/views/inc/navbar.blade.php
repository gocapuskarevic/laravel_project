<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="{{url('/')}}">Home</a>
        <a class="nav-item nav-link" href="{{url('about')}}">About Us</a>
        <a class="nav-item nav-link" href="{{url('posts')}}">Our posts</a>

        @if( session('admin') != 'success')
          <a class="nav-item nav-link" href="{{url('/login')}}">Login</a>
        @endif

        @if( session('admin') && (session('admin') == 'success' ))
          <a class="nav-link" href="{{url('posts/create')}}">Create post</a>
          <a class="nav-link" href="{{url('/logout')}}">Logout</a>
        @endif
        
      </div>
    </div>
  </nav>
</div>