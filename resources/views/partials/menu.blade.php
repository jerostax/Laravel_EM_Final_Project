<nav class="navbar navbar-expand-lg navbar-light  sticky-top animated fadeInDown">
        <a class="navbar-brand" href="{{route('home')}}">Fluid</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
              
          <a class="nav-item nav-link" href="{{route('home')}}">Accueil</a>
            <a class="nav-item nav-link" href="#events">Évènements</a>
            <a class="nav-item nav-link" href="#products">Shop</a>
            <a class="nav-item nav-link" href="#partners">Partenaires</a>

            @if(Auth::guard('web')->check())
            
            <div class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::guard('web')->user()->name }} <span class="caret"></span></a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ 'App\User' == Auth::getProvider()->getModel() ? route('admin.logout') : route('user.logout') }}" method="GET" style="display: none;">
                    @csrf
                </form>
            </div>
          </div>

            @else 

            <a class="nav-item nav-link" href="{{route('register')}}">Register</a>
            <a class="nav-item nav-link" href="{{route('login')}}">Login</a>

            @endif

            @if(Auth::guard('admin')->check())
            <div class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::guard('admin')->user()->name }} <span class="caret"></span></a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href='{{route('home')}}'>Site Fluid</a>
                <a class="dropdown-item" href='{{route('admin.dashboard')}}'>Dashboard</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ 'App\Admin' == Auth::getProvider()->getModel() ? route('admin.logout') : route('user.logout') }}" method="GET" style="display: none;">
                    @csrf
                </form>
              
            </div>
          </div>
            @endif
          </div>
        </div>
      </nav>
