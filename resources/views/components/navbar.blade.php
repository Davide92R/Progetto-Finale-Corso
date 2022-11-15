
<nav class="navbar navbar-expand-lg bg-nav fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('welcome')}}">Presto.it</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center align-item-center" id="navbarNav">
      <ul class="navbar-nav mb-2 h4">
        <li class="nav-item ms-3">
          <a class="nav-link" aria-current="page" href="{{route("welcome")}}">Home</a>
        </li>
        <li class="nav-item ms-3">
          <a class="nav-link" aria-current="page" href="{{route("announcementIndex")}}">{{__('ui.announces')}}</a>
        </li>
        <li class="nav-item dropdown ms-3">
          <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{__('ui.category')}}</a>
          <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
            @foreach ($categories as $category)
            <li><a class="dropdown-item" href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a></li>
            <li><hr class="dropdown-divider"></li>
            @endforeach
          </ul>
        </li>
        @guest
        <li class="nav-item ms-3">
          <a class="nav-link" href="{{route('registerview')}}">{{__('ui.register')}}</a>
        </li>
        <li class="nav-item ms-3">
          <a class="nav-link" href="{{route('loginview')}}">Login</a>
        </li>
        @endguest
        @auth
          <li class="nav-item ms-3">
            <a class="nav-link">{{__('ui.welcome2')}} {{Auth::user()->name}}</a>
          </li>


          @if(Auth::user()->is_revisor)
          <li class="nav-item ms-3">
            <a class="nav-link btn btn-success position-relative" aria-current="page" href="{{route('revisor.index')}}">
              {{__('ui.revisor')}}

              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                {{App\Models\Announce::toBeRevisionedCount()}}
                <span class="visually-hidden">Messaggi non letti</span>
              </span>
            </a>
          </li>
          @endif
          <li class="nav-item ms-3">
        @endif
          <li class="nav-item">

            <a class="nav-link" href="{{route('logout')}}">Logout</a>
          </li>
        @endauth
      </ul>
      <form action="{{route('announces.search')}}" method="GET" class="d-flex ms-3">
        <input name="searched" class="form-control me-2" type="search" placeholder="Cerca" aria-label="Cerca">
        <button class="btn btn-outline-success" type="submit">Cerca</button>
      </form>
      <ul class="navbar-nav"> 
        <li class="nav-item me-0">
          <x-_locale lang="it" nation="it"/>
        </li>
        <li class="nav-item">
          <x-_locale lang="en" nation="gb"/>
        </li>
        <li class="nav-item">
          <x-_locale lang="es" nation="es"/>
        </li>
      </ul>
    </div>
  </div>
</nav>
