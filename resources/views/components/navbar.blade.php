
    <nav class="navbar navbar-expand-lg ournav">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('welcome')}}">Presto.it</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center align-item-center" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route("welcome")}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route("announcementIndex")}}">Annunci</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorie</a>
                <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                  @foreach ($categories as $category)
                    <li><a class="dropdown-item" href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a></li>
                    <li><hr class="dropdown-divider"></li>
                  @endforeach
                </ul>
              </li>
              @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{route('registerview')}}">Registrati</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('loginview')}}">Login</a>
                </li>
              @endguest

              @auth
                <li class="nav-item">
                    <a class="nav-link">Benvenuto {{Auth::user()->name}}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('logout')}}">Logout</a>
                </li>



              @endauth
            </ul>
          </div>
        </div>
      </nav>
