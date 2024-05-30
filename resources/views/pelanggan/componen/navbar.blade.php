<nav>
    <nav class="navbar navbar-dark navbar-expand-lg " style="background-color: #BA0100
    ">
<div class="container">
<a class="navbar-brand" href="#">Eskasaba Mart</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse justify-content-end gap-4" id="navbarSupportedContent">
  <ul class="navbar-nav gap-4 ">
    <li class="nav-item gap-4 ml-4">
      <a class="nav-link fs-5 active" aria-current="page" href="/"></a>
    </li>
    <li class="nav-item gap-4 ml-4">
        <a class="nav-link fs-5 " href="{{ route('home') }}">Home</a>
      </li>
    <li class="nav-item">
      <a class="nav-link fs-5 " href="{{ route('shop') }}">Shop</a>
    </li>
  <li class="nav-item">
      <a class="nav-link fs-5 " href="{{ route('contact') }}">Contact Us</a>
   </li>
  </ul>
  <div class="d-flex gap-4 align-items-center " >
  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"
  >Login | Register</button>
  <div class="notif">
    <a href="{{ route('transaksi') }}" class="fs-5">
        <i class="fa-solid icon-nav fa-bag-shopping "></i>
      </a>
  </div>
  <div class="circle">10</div>
  </form>
</div>
</div>
</nav>
    </nav>
