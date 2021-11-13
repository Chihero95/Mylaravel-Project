<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img  style="width: 80px; height: 30px;" src="{{url('assets/images/logo.png')}}"/></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Shop
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Shop1</a></li>
              <li><a class="dropdown-item" href="#">Shop2</a></li>
              <li><a class="dropdown-item" href="#">Shop3</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <form style="margin-right:150px" class="d-flex">
            <button class="btn" type="submit">
                <i class="bi-cart-fill me-1"></i>
                cart
                <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
            </button>
            <button class="btn" type="submit">
                <i class="bi bi-person-square"></i>
                Login 
            </button>
        </form>
    </div>
  </nav>