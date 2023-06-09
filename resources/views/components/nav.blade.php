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
            <a class="nav-link active" aria-current="page" href="{{route('category',$id = 1)}}">Piłka Nożna</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('category',$id = 2)}}">Koszykówka</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('category',$id = 3)}}">Hokej</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('category',$id = 4)}}">Pozostałe</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="#">Felietony</a>
          </li>
        </ul>
        <div>
            <a href="{{route('login')}}"><i class="uil uil-user"></i></a>
            <a href="{{route('admin')}}"><i class="uil uil-edit"></i></a>
            @auth
                <a href="{{route('logout')}}"><i class="uil uil-sign-out-alt"></i></a>
            @endauth
        </div>
      </div>
    </div>
  </nav>
  




