<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">E-Comm</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/myorders">Orders</a>
        </li>
      </ul>
      <form action="/search" class="d-flex">
        <input name="query" class="form-control me-2 search-box" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right ">
        <li class="nav-item">
      <a class="nav-link" href="/cartlist">Cart({{$total}})</a>
        </li>
        @if (Session::has('user'))
    
        <li>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          {{Session::get('user')['name']}}
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="/logout">Logout</a></li>
          </ul>
        </div>
      </li>

      @else
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/register">Register</a>
      </li>
      @endif
    </ul>
    
    </div>
  </div>
</nav>