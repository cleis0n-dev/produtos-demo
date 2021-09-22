<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/produtos') }}">{{ config('app.name', 'Laravel') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{ route('produtos') }}"><i class="fas fa-store"></i> Cadastrar Produto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('produtos_list') }}"><i class="fas fa-search-dollar"></i> Lista de Produtos</a>
          </li>
        </ul>
        <div class="d-flex">
            <div class="dropdown ">
                <button class="btn btn-light dropdown-toggle text-secondary" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                  @if(Auth::user() != null)  {{ Auth::user()->email }} @else Api_user @endif
                </button>
                <ul class="dropdown-menu dropdown-menu-primary" aria-labelledby="dropdownMenuButton2">
                  <li>
                    <a class="dropdown-item text-info" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </li>
                </ul>
              </div>
          </div>

      </div>
    </div>
  </nav>