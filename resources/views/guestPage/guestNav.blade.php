<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <a class="navbar-brand mx-4" href="#">Startupss</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto mt-2">
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('valToolPage.valTool')}}">Valuation Tool</a>
        </li>
      </ul>
      <ul class="navbar-nav mr-right mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="{{ route('auth.login')}}">Login </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('auth.register')}}">Register </a>
        </li>
      </ul>
    </div>
  </nav>
  
  