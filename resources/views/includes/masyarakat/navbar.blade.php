{{--  --}}


<nav class="navbar navbar-expand-lg bg-primary navbar-dark position-sticky top-0 z-full shadow-sm">
    <div class="container">
        <nav class="navbar bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand fw-bold text-white" href="{{ url('/')}}">
                <img src="/assets/img/logo.svg" alt="Logo" width="30" class="d-inline-block align-text-top">
                Ngaduin
              </a>
            </div>
        </nav>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active fw-semibold" href="#">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active fw-semibold" aria-current="page" href="{{ url('user')}}">Ngaduin</a>
            </li>
          <li class="nav-item">
            <a class="nav-link active fw-semibold" href="{{ url('user/pengaduan')}}">Pengaduan Saya</a>
          </li>
        </ul>
        <form action="{{Route('logout')}}" method="post">
            @csrf
            <button type="submit" class="fw-semibold btn btn-primary fs-6">Logout</button>
        </form>
      </div>
    </div>
</nav>
