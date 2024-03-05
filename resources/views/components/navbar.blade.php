<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="https://bulma.io">
        <img src="https://www.albergoalponte.it/wp-content/uploads/2017/06/ristorante_alponte_scritta-300x133.png" width="112" height="28">
      </a>

      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item">
          Home
        </a>

        <a class="navbar-item">
          Recensioni
        </a>
        @auth


        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">
            {{auth()->user()->name}}
          </a>

          <div class="navbar-dropdown">
            <a class="navbar-item">
              Inserisci Feedback
            </a>
            <hr class="navbar-divider">
            <a class="navbar-item" onclick="
                            event.preventDefault();
                            getElementById('form-logout').submit();
                            ">Logout</a>
                        <form action="/logout" method="POST" id="form-logout">
                        @csrf
                        </form>
          </div>
        </div>
        @endauth
      </div>
      @guest


      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a class="button is-success" href="/register">
              <strong>Sign up</strong>
            </a>
            <a class="button is-light" href="/login">
              Log in
            </a>
          </div>
        </div>
      </div>
      @endguest
    </div>
  </nav>
