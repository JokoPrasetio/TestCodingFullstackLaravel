<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container">
      <a class="navbar-brand fs-4" href="/" style="font-weight: 600;">Test Coding </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse ms-5 navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item fs-5">
        <a href="/" class="nav-link {{Request::is("/") ? "active" : ""}}" >Home</a>
          </li>
          <li class="nav-item fs-5">
            <a href="/data-barang" class="nav-link {{Request::is("data-barang*") ? "active" : ""}}">Data Barang</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
