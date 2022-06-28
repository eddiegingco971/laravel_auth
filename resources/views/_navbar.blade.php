<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Laravel User Auth</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="{{url('/dashboard')}}">Dashboard</a>
          <a class="nav-link" href="{{url('/posts')}}">Posts</a>
          <a class="nav-link" href="{{url('/users')}}">User</a>
          @if(auth()->guest())
          <a class="nav-link"href="{{url('/login')}}">Login</a>
          @else
          <a class="nav-link"href="{{url('/logout')}}">Logout</a>
          @endif
        </div>
      </div>
    </div>
  </nav>