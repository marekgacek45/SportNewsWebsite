<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('storage/logo.png')}}" alt="Bootstrap" width="30" height="24">Sportowe Newsy
          </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Piłka Nożna</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Hokej</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pozostałe sporty
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Felietony</a>
          </li>
        </ul>
        <div>
            <a href="{{route('login')}}"><i class="uil uil-user"></i></a>
            @auth
                <a href="{{route('logout')}}"><i class="uil uil-sign-out-alt"></i></a>
            @endauth
            <a href="{{route('admin')}}"><i class="uil uil-edit"></i></a>
        </div>
      </div>
    </div>
  </nav>
  




