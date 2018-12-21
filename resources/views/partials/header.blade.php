<nav class="navbar navbar-expand-lg navbar-light" style='background-color: #c84c4e;'>
  <a class="navbar-brand" href="/"><img class="logo" src="/images/dh-logo.png" alt="logo" width="75px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"><a class="nav-link" href="/news">Novedades</a></li>
      <li class="nav-item"><a class="nav-link" href="/offers">Ofertas</a></li>
      <li class="nav-item"><a class="nav-link" href="/hotsales">Hot Sale</a></li>
      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tecnologia</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/cams">Camaras</a>
          <a class="dropdown-item" href="/cel">Celulares</a>
          <a class="dropdown-item" href="/gaming">Gaming</a>
          <a class="dropdown-item" href="/informatica">Informatica</a>
          <a class="dropdown-item" href="/tv">Tv</a>
        </div>
      </li>
      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="myDropDown" data-toggle="dropdown">Hogar</a>
        <div class="dropdown-menu" aria-labelledby="myDropDown">
          <a class="dropdown-item" href="/airesycalefaccion">Aires y Calefacciones</a>
          <a class="dropdown-item" href="/cocina">Cocina</a>
          <a class="dropdown-item" href="/lavado">Lavado</a>
          <a class="dropdown-item" href="/office">Oficina</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-md-0">
      {{-- @csrf --}}
      <input class="form-control" name="search" action="{{route('product.finder')}}" method="get" type="search" placeholder="¿Qué Buscas?" aria-label="Search" style='border-top-right-radius: 0px;border-bottom-right-radius: 0px;border-top-left-radius: 5px;border-bottom-left-radius: 5px;'>
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" style='border-top-left-radius: 0px;border-bottom-left-radius: 0px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;'><img src="/images/icon-search.jpg" alt="iconSearch" width="20px"></button>
    </form>

    <div class="class="d-flex justify-content-end"">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="myDropDown" data-toggle="dropdown">Mi Cuenta <img src=@guest "/images/default-profile.jpg" @else "/storage/users/{{ auth::user()->img}}" @endguest width="35px"></a>
          <div class="dropdown-menu" aria-labelledby="myDropDown">
            @guest
              <a class="dropdown-item" id="changeBG" href="#">Dark Theme</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/login">Log In</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/register">Sign Up</a>
            @else
              @if (Auth::user()->admin)
              <a class="dropdown-item" href="/products/create">Crear producto</a>
            @endif
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" id="changeBG" href="#">Dark Theme</a>
              {{-- <a class="dropdown-item" href="/profile?username=">Mi perfil</a> --}}
              {{-- <a class="dropdown-item" href="/settings">Configuraciones</a> --}}
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/logout" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Log Out</a><form id="logout-form" action="/logout" method="POST" style="display: none;">
                @csrf
            </form>
              </div>
            @endguest
        </ul>
      </div>
      <div class="cart">
        <a href="/shoppingCart"><img src="/images/icon-cart.png" alt="cart" width="35px"></a>
      </div>
  </div>
</nav>
