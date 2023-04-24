

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Menu</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href=" <?= base_url() ?>home">
              <span data-feather="file"></span>
             Listagem de Clientes
            </a>
          </li>
					<li class="nav-item">
          <a class="nav-link" href=" <?= base_url() ?>cliente">
              <span data-feather="file"></span>
              Cadastro de Clientes
            </a>
          </li>
        </ul>
      </div>
    </nav>
