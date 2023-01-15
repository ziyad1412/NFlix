<nav class="navbar sticky-top navbar-expand-lg navbar-light shadow-sm mb-4" style="background-color: #fff">
    <div class="container">
      <a class="navbar-brand text-dark" href="/"><strong>N<span class="text-danger">Flix</span></strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/movie_list">List Movie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/genre/">Genre</a>
          </li>

        </ul>
        <form class="d-flex" action="/search" method="GET">
          @csrf
          <input class="form-control me-2" name="search" type="search" placeholder="Search Movie ...">
          <input class="btn btn-outline-danger me-2" type="submit" value="Search">
          <a href="/admin"><button type="button" class="btn btn-danger">Login</button></a>
          
        </form>
      </div>
    </div>
  </nav>