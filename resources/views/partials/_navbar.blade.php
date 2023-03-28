<nav class="navbar navbar-expand-lg bg-light">
    <div class="container d-flex justify-content-between">
      <div>
        <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
      </div>

      <div id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">CHARACTERS</a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link" href="{{route('comics')}}">COMICS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">MOVIES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">TV</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">GAMES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">COLLECTIBLES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">VIDEOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">FANS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">NEWS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">SHOP</a>
          </li>
        </ul>
      </div>
      <div>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
      </div>
    </div>
  </nav>



  