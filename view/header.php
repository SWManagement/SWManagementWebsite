<nav class="navbar  is-spaced is-primary" role="navigation" aria-label="main navigation">

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
  <div class="navbar-brand">
  <a href="<?= BASE_URL . "homepage" ?>">
    <img src="../static/img/coverVector.svg" alt="Pametno z odpadki" width="325" height="125">
  </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-end">
      <a class="navbar-item" href="<?= BASE_URL . "project-info"?>">
        O projektu
      </a>

      <a class="navbar-item" href="<?= BASE_URL . "team-info"?>">
        O ekipi
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Senzor
        </a>
        <div class="navbar-dropdown is-right">
          <a class="navbar-item">
            Prikaži podatke o senzorju
          </a>
        </div>
      </div>
    </div>
    </div>
  </div>
</nav>