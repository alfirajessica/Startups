<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <a class="navbar-brand mx-4" href="#">Startupss</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto mt-2">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('layout.home') }}">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      
      @if ( $LoggedUserInfo['role'] == "1" )
      {{-- developer page-nav --}}
      <li class="nav-item">
        <a class="nav-link" href="#">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Event</a>
      </li>
      {{--end of developer page-nav --}}
      @endif

      @if ( $LoggedUserInfo['role'] == "2" )
      {{-- investor page-nav --}}
      <li class="nav-item">
        <a class="nav-link" href="#">Invest</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Event</a>
      </li>
      {{--end of investor page-nav --}}
      @endif
    </ul>
    <ul class="navbar-nav mt-2 mt-lg-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          {{ $LoggedUserInfo['firstname']. " ".$LoggedUserInfo['lastname'] }}
        </a>
        <div class="dropdown-menu dropdown-menu-right py-0">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('auth.logout')}}" >Logout </a>
        </div>
      </li>
      
    </ul>

    {{-- <ul class="navbar-nav mr-right mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="{{ route('login') }}">{{ __('Login') }} </a>
      </li>
      <li class="nav-item">
        <button type="button" class="btn btn-outline-success">Register</button>
      </li>
    </ul> --}}

    {{-- @guest

        <li class="nav-item px-2 active">
            <a role="button" class="btn btn-primary  {{ Request::is('login') ? 'active' : '' }}" href="{{ route('login') }}">{{ __('Login') }}
            </a>                              
        </li>
        @if (Route::has('register'))
            <li class="nav-item px-2 active">
                <a class="btn btn-outline-primary {{ Request::is('register') ? 'active' : '' }}" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else --}}

  </div>
</nav>

