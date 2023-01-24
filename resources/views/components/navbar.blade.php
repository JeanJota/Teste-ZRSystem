<div class="modal fade" id="aimodal" tabindex="-1" aria-labelledby="tooltippopoversLabel" aria-hidden="true">
  <div class="modal-dialog mt-6" role="document">
    <div class="modal-content border-0">
      <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1"><button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Fechar"></button></div>
      <div class="modal-body p-0">
        <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
          <h4 class="mb-1" id="tooltippopoversLabel">Inteligência Artificial</h4>
        </div>
        <div class="p-4 pb-0">
          <div class="row">
            <div class="col">
              <p id="aimodaltexto">Seu dispositivo não suporta inteligência artificial!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand">

  <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
  <a class="navbar-brand me-1 me-sm-3" href="index.html">
    <div class="d-flex align-items-center"><img class="me-2" src="{{ asset('assets/img/icons/spot-illustrations/falcon.png') }}" alt="" width="40" /><span class="font-sans-serif">OS 2.0</span>
    </div>
  </a>
  <ul class="navbar-nav align-items-center d-none d-lg-block">
    <li class="nav-item">
      <div class="search-box" data-list='{"valueNames":["title"]}'>
        <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
          <input class="form-control search-input fuzzy-search" type="search" placeholder="Pesquisar..." aria-label="Search" />
          <span class="fas fa-search search-box-icon"></span>
        </form>
        <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none" data-bs-dismiss="search">
          <button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button>
        </div>
        <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
          <div class="scrollbar list py-3" style="max-height: 24rem;">
            <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs--2 pt-0 pb-2">Mais pesquisados</h6>
            <a class="dropdown-item fs--1 px-x1 py-1 hover-primary" href="cadastrocliente">
              <div class="d-flex align-items-center">
                <span class="fas fa-circle me-2 text-300 fs--2"></span>
                <div class="fw-normal title">Clientes <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Cadastrar cliente</div>
              </div>
            </a>
            <hr class="text-200 dark__text-900" />
            <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs--2 pt-0 pb-2">Filtros sugeridos</h6>
            <a class="dropdown-item px-x1 py-1 fs-0" href="cadastrocliente">
              <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-warning">Clientes:</span>
                <div class="flex-1 fs--1 title">Cadastrar clientes</div>
              </div>
            </a>
            <hr class="text-200 dark__text-900" />
            <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs--2 pt-0 pb-2">Arquivos</h6>
            <a class="dropdown-item px-x1 py-2" href="#!">
              <div class="d-flex align-items-center">
                <div class="file-thumbnail me-2"><img class="border h-100 w-100 fit-cover rounded-3" src="{{ asset('assets/img/products/3-thumb.png') }}" alt="" /></div>
                <div class="flex-1">
                  <h6 class="mb-0 title">iPhone</h6>
                  <p class="fs--2 mb-0 d-flex"><span class="fw-semi-bold">Antony</span><span class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></p>
                </div>
              </div>
            </a>
            <a class="dropdown-item px-x1 py-2" href="#!">
              <div class="d-flex align-items-center">
                <div class="file-thumbnail me-2"><img class="img-fluid" src="{{ asset('assets/img/icons/zip.png') }}" alt="" /></div>
                <div class="flex-1">
                  <h6 class="mb-0 title">Falcon v1.8.2</h6>
                  <p class="fs--2 mb-0 d-flex"><span class="fw-semi-bold">John</span><span class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                </div>
              </div>
            </a>
            <hr class="text-200 dark__text-900" />
            <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs--2 pt-0 pb-2">Pessoas</h6>
            <a class="dropdown-item px-x1 py-2" href="#">
              <div class="d-flex align-items-center">
                <div class="avatar avatar-l status-online me-2">
                  <img class="rounded-circle" src="{{ asset('assets/img/team/1.jpg') }}" alt="" />
                </div>
                <div class="flex-1">
                  <h6 class="mb-0 title">Anna Karinina</h6>
                  <p class="fs--2 mb-0 d-flex">Technext Limited</p>
                </div>
              </div>
            </a>
          </div>
          <div class="text-center mt-n3">
            <p class="fallback fw-bold fs-1 d-none">Pesquisa livre</p>
          </div>
        </div>
      </div>
    </li>    
  </ul>
  <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
    <li class="nav-item" id="aili1" style="display: none;">
      <button class="btn btn-link" id="aibtnmodal" data-bs-toggle="modal" data-bs-target="#aimodal"><span class="fas fa-warning"></span></button>
    </li>
    <li class="nav-item" id="aili2">
      <button class="btn btn-link" id="aibtn"><span class="fas fa-microphone"></span></button>
      <div class="spinner-grow text-primary" id="aispan" style="display: none;" role="status"></div>
    </li>
  </ul>
  <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
    <li class="nav-item">
      <div class="theme-control-toggle fa-icon-wait px-2">
        <input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" />
        <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Modo claro"><span class="fas fa-sun fs-0"></span></label>
        <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Modo escuro"><span class="fas fa-moon fs-0"></span></label>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
      <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
        <div class="card card-notification shadow-none">
          <div class="card-header">
            <div class="row justify-content-between align-items-center">
              <div class="col-auto">
                <h6 class="card-header-title mb-0">Notificações</h6>
              </div>
              <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Marcar tudo como lido</a></div>
            </div>
          </div>
          <div class="scrollbar-overlay" style="max-height:19rem">
            <div class="list-group list-group-flush fw-normal fs--1">
              <div class="list-group-title border-bottom">Novo</div>              
              <div class="list-group-item">
                <a class="notification notification-flush notification-unread" href="#!">
                  <div class="notification-avatar">
                    <div class="avatar avatar-2xl me-3">
                      <div class="avatar-name rounded-circle"><span>ZS</span></div>
                    </div>
                  </div>
                  <div class="notification-body">
                    <p class="mb-1"><strong>ZR System: </strong>Boas vindas ao novo sistema</p>
                    <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                  </div>
                </a>
              </div>              
            </div>
          </div>
          <div class="card-footer text-center border-top"><a class="card-link d-block" href="#">Ver tudo</a></div>
        </div>
      </div>
    </li>
    <li class="nav-item dropdown px-1">
      <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button" data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="43" viewBox="0 0 16 16" fill="none">
          <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
          <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
          <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
          <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
          <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
          <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
          <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
          <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
          <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
        </svg></a>
        <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg" aria-labelledby="navbarDropdownMenu">
          <div class="card shadow-none">
            <div class="scrollbar-overlay nine-dots-dropdown">
              <div class="card-body px-3">
                <div class="row text-center gx-0 gy-0">
                  <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="{{ asset('assets/img/nav-icons/google.png') }}" alt="" width="40" height="40" />
                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Google</p>
                  </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="{{ asset('assets/img/nav-icons/spotify.png') }}" alt="" width="40" height="40" />
                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Spotify</p>
                  </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="{{ asset('assets/img/nav-icons/steam.png') }}" alt="" width="40" height="40" />
                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Steam</p>
                  </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="{{ asset('assets/img/nav-icons/github-light.png') }}" alt="" width="40" height="40" />
                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Github</p>
                  </a></div>
                  <div class="col-12">
                    <hr class="my-3 mx-n3 bg-200" />
                  </div>
                  <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="app/events/event-detail.html" target="_blank">
                    <div class="avatar avatar-2xl">
                      <div class="avatar-name rounded-circle bg-soft-primary text-primary"><span class="fs-2">E</span></div>
                    </div>
                    <p class="mb-0 fw-medium text-800 text-truncate fs--2">Events</p>
                  </a></div>
                  <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4" href="#!">Exibir minhas empresas</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </li>
      <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <div class="avatar avatar-xl">
          <img class="rounded-circle" src="{{ asset('assets/img/team/3-thumb.png') }}" alt="" />

        </div>
      </a>
      <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
        <div class="bg-white dark__bg-1000 rounded-2 py-2">
          <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Oficina Car</span></a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#!">Status do sistema</a>
          <a class="dropdown-item" href="#">Perfil &amp; Conta</a>
          <a class="dropdown-item" href="#!">Suporte</a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ url('opcoessistema') }}">Opções do sistema</a>
          <a class="dropdown-item" href="#">Sair</a>
        </div>
      </div>
    </li>
  </ul>
</nav>

@if(session('msg'))
  <div class="col-lg-12">
    {{ session('msg') }}
  </div>
@endif