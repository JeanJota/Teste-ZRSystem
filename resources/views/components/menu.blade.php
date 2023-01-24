<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">

  <script>
    var navbarStyle = localStorage.getItem("navbarStyle");
    if (navbarStyle && navbarStyle !== 'transparent') {
      document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
    }
  </script>

  <div class="d-flex align-items-center">
    <div class="toggle-icon-wrapper">

      <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Menu principal"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>

    </div>
    <a class="navbar-brand" href="/">
      <div class="d-flex align-items-center py-3"><img class="me-2" src="{{ asset('assets/img/icons/spot-illustrations/falcon.png') }}" alt="" width="40" /><span class="font-sans-serif">OS 2.0</span>
      </div>
    </a>
  </div>
  <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
    <div class="navbar-vertical-content scrollbar">
      <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
        <a class="nav-link" href="/" role="button">
          <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-flag"></span></span><span class="nav-link-text ps-1">Início</span>
          </div>
        </a>
        <li class="nav-item">
          <!-- label-->
          <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
            <div class="col-auto navbar-vertical-label">Clientes</div>
            <div class="col ps-0">
              <hr class="mb-0 navbar-vertical-divider" />
            </div>
          </div>

          <a class="nav-link" href="" role="button">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-users"></span></span><span class="nav-link-text ps-1">Clientes</span>
            </div>
          </a>

        </li>

      </ul>
      <div class="settings mb-3">
        <div class="card shadow-none">
          <div class="card-body alert mb-0" role="alert">
            <div class="btn-close-falcon-container">
              <button class="btn btn-link btn-close-falcon p-0" aria-label="Close" data-bs-dismiss="alert"></button>
            </div>
            <div class="text-center"><img src="{{ asset('assets/img/icons/spot-illustrations/navbar-vertical.png') }}" alt="" width="80" />
              <p class="fs--2 mt-2">Quer mais comodidade? <br />Baixe agora o nosso app!</p>
              <div class="d-grid"><a class="btn btn-sm btn-purchase" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/" target="_blank">Baixar</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>