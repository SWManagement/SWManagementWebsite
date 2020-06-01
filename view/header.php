<nav class="navbar  is-spaced is-transparent" role="navigation" aria-label="main navigation">

  </div>
  <div class="navbar-brand">
  <a href="<?= BASE_URL . "homepage" ?>">
    <img src="../static/img/coverVector.svg" alt="Pametno z odpadki" width="325" height="125">
  </a>
  
  <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample" onclick="showMenu()">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
  </a>

  </div>

  <div id="navigation" class="navbar-menu">
    <div class="navbar-end">
      <a class="navbar-item" href="<?= BASE_URL . "project-info"?>">
        O projektu
      </a>

      <a class="navbar-item" href="<?= BASE_URL . "team-info"?>">
        O ekipi
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Pametni zabojnik
        </a>
        <div class="navbar-dropdown is-right">
          <a href="<?=BASE_URL . "pametnizabojnik" ?>" class="navbar-item">
            Prikaži polnost pametnih zabojnikov
          </a>
          <p class="help">Vsebina pametnega zabojnika je v izdelavi.</p>
        </div>
      </div>
    </div>
    </div>
  </div>
</nav>
<div id="mobileMenu">
      <a class = "button is-success is-rounded mobileMenuLinks" href="<?= BASE_URL . "project-info"?>">O projektu</a>
      <a class = "button is-success is-rounded mobileMenuLinks" href="<?= BASE_URL . "team-info"?>">O ekipi</a>
    <!-- <a href="" >Prikaži polnost pametnih zabojnikov</a> -->
</div>