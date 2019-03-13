
<nav class="navbar navbar-expand-lg navbar-light  sticky-top animated fadeInDown">
        <a class="navbar-brand logo"    href="{{route('home')}}"><img class='logo' src='{{asset('assets/LOGbleu.jpg')}}'></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav .nav-tabs"role="tablist">
           
          
            
           
            <a class="nav-item nav-link mynav {{ request()->is('events') ? 'active' : '' }}" href="{{route('events')}}" >Bouge ton FLUID</a>
            <a class="nav-item nav-link mynav {{ request()->is('adhesion') ? 'active' : '' }}" href="{{url('/adhesion')}}">Rejoins le FLUID</a>
            <a class="nav-item nav-link mynav {{ request()->is('shop') ? 'active' : '' }}" href="{{route('shop')}}">Shop</a>
            <a class="nav-item nav-link mynav" href="#contact" >Contact</a>
           <div class='div-search'><input class='search-bar btn  my-2 my-sm-0' type='text'></div><i class="fas fa-search search"></i>
            
            @if(Auth::guard('web')->check())
            
            <div class="nav-item dropdown user">
            <a id="navbarDropdown" class="nav-link dropdown-toggle mynav" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <i class="fas fa-user"></i>
              
                <span class="caret"></span></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <div class='dropdown-item'>{{ Auth::guard('web')->user()->name }} 
                </div>
                
                <a class="dropdown-item" href="{{ route('user.logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Se déconnecter') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
          </div>

            @else 
            <div class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle mynav" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="fas fa-user"></i>
                    <span class="caret"></span></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('register')}}">S'enregistrer</a>
            <a class="dropdown-item" href="{{route('login')}}">Se connecter</a>
          </div>
        </div>

            @endif

            @if(Auth::guard('admin')->check())
            <div class="nav-item dropdown admin">
            <a id="navbarDropdown" class="nav-link dropdown-toggle mynav " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::guard('admin')->user()->name }} <span class="caret"></span></a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href='{{route('home')}}'>Site Fluid</a>
                <a class="dropdown-item" href='{{url('admin/event')}}'>Dashboard</a>
                <a class="dropdown-item" href="{{ route('admin.logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Se déconnecter') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              
            </div>
          </div>
            @endif
            <div class='row' id='nav-sn'>
            <a class="nav-item nav-link mynav" target="_blank" href="https://www.facebook.com/groups/1797643553621438/"><i class="fab fa-facebook-f"></i></a>
            <a class="nav-item nav-link mynav" target="_blank" href="https://www.instagram.com/fluid_flot_graphique/?hl=fr"><i class="fab fa-instagram"></i></a>
            <a class="nav-item nav-link mynav" target="_blank" href=""><i class="fab fa-pinterest"></i></a>
            </div>
          </div>
        </div>
</nav>
