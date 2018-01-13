<nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">BLOG</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{ route('users.index') }}">Usuarios</a></li>
            <li><a href="{{ route('categories.index') }}">Categorias</a></li>
            <li><a href="{{ route('tags.index') }}">Etiquetas</a></li>
            <li><a href="#contact">Articulos</a></li>
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
          <li class="dropdown  nav navbar-nav navbar-right">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{ route('logout') }}">Salir</a></li>
                </ul>
            </li>
          </ul>
        </div>
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>
