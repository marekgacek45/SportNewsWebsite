
<div class="container-fluid">
    <div class="row">
      <div class="col-md-3" style="display:flex;justify-content:center;align-items:center">
        <div class="sidebar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="{{route('home')}}">
                <i class="uil uil-home"></i>
                <span class="sidebar-text">Strona główna</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.newses')}}">
                <i class="uil uil-newspaper"></i>
                <span class="sidebar-text">Wszystkie Newsy</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.newses.create')}}">
                <i class="uil uil-plus-circle"></i>
                <span class="sidebar-text">Dodaj newsa</span>
              </a>
            </li>
            
           
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.categories')}}">
                <i class="uil uil-list-ul"></i>
                <span class="sidebar-text">Kategorie</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-9">
       @yield ('content')
      </div>
    </div>
  </div>