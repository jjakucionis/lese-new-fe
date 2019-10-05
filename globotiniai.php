<?php include './partials/head.php'; ?>
<?php include './partials/header.php'; ?>
<main>
  <section class="section animal animal__inner">
    <div class="section-decoration">
      <div class="section-decoration__line"></div>
      <svg class="section-decoration__svg" width="551.06px" height="551.06px" enable-background="new 0 0 551.062 551.062" version="1.1" viewBox="0 0 551.062 551.062" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
        <path d="m465.19 453.46c14.749 67.688-58.752 82.375-91.127 73.562s-98.41-10.281-98.41-10.281-66.218 1.469-98.593 10.281c-32.375 8.874-105.94-5.875-91.249-73.562s79.438-64.75 97.186-156c17.687-91.249 92.718-85.374 92.718-85.374s74.847-5.875 92.535 85.374c17.625 91.249 82.252 88.311 96.94 156zm-121.6-247.31c39.841 11.505 83.844-19.951 98.349-70.258 14.504-50.245-5.998-100.31-45.839-111.81-39.842-11.506-83.844 19.951-98.349 70.258-14.504 50.245 5.998 100.31 45.839 111.81zm165.12-18.298c-38.372-15.668-85.496 10.894-105.26 59.363-19.768 48.471-4.712 100.43 33.66 116.04 38.372 15.606 85.496-10.894 105.26-59.364s4.713-100.37-33.66-116.03zm-301.29 18.298c39.841-11.506 60.343-61.567 45.839-111.81s-58.568-81.702-98.349-70.196c-39.78 11.505-60.343 61.566-45.839 111.81 14.505 50.245 58.508 81.701 98.349 70.196zm-93.453 157.1c38.373-15.667 53.428-67.626 33.66-116.04s-66.892-75.031-105.26-59.363c-38.372 15.667-53.427 67.626-33.659 116.03 19.767 48.47 66.891 75.031 105.26 59.364z"/>
      </svg>
      <div class="section-decoration__line"></div>
    </div>
    <h2 class="section-title animal-title">Gyvūnų paieška</h2>
    <div class="container">
      <div class="filter">
        <div class="filter__group">
          <select class="filter__select" name="city" id="city">
            <option value selected disabled>Rinktis miestą</option>
            <option value="vilnius">Vilnius</option>
            <option value="kaunas">Kaunas</option>
            <option value="siauliai">Šiauliai</option>
            <option value="privatus-globejai">Privatūs globėjai</option>
          </select>
        </div>
        <div class="filter__group">
          <select class="filter__select" name="type" id="type">
            <option value="kates">Katės</option>
            <option value="sunys">Šunys</option>
            <option value="kiti-gyvunai">Kiti gyvūnai</option>
          </select>
        </div>
        <div class="filter__group">
          <select class="filter__select" name="status" id="status">
            <option value="visi">Visi</option>
            <option value="rado-namus">Rado namus</option>
            <option value="iesko-namu">Ieško namų</option>
            <option value="liks-atmintyje">Liks atmintyje</option>
          </select>
        </div>
        <div class="filter__group">
          <select class="filter__select" name="sorting" id="sorting">
            <option value="naujausi">Nuo naujausių</option>
            <option value="seniausi">Nuo seniausių</option>
          </select>
        </div>
        <a class="btn--orange filter__btn btn--shadow" href="#"><svg enable-background="new 0 0 56.966 56.966" version="1.1" viewBox="0 0 56.966 56.966" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="m55.146 51.887l-13.558-14.101c3.486-4.144 5.396-9.358 5.396-14.786 0-12.682-10.318-23-23-23s-23 10.318-23 23 10.318 23 23 23c4.761 0 9.298-1.436 13.177-4.162l13.661 14.208c0.571 0.593 1.339 0.92 2.162 0.92 0.779 0 1.518-0.297 2.079-0.837 1.192-1.147 1.23-3.049 0.083-4.242zm-31.162-45.887c9.374 0 17 7.626 17 17s-7.626 17-17 17-17-7.626-17-17 7.626-17 17-17z"/></svg>
        </a>
      </div>
      <div class="animals-list">
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-04.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-09.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-06.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-07.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-08.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-09.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-17.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-04.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-08.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-06.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-17.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-07.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-08.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-06.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-17.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-07.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-08.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-06.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-17.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-07.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-04.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-09.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-06.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-07.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-08.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-09.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-17.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-04.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-08.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-06.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-17.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-07.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-08.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-06.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-17.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-07.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-08.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-06.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-17.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
        <div class="animals-list__animal">
          <a href="#"><div class="animals-list__img" style="background-image: url(./assets/images/pet-07.jpg)"></div></a>
          <div class="animals-list__content">
            <h2 class="animals-list__name">Rudis</h2>
            <p class="animals-list__details">
              Veislės tipas
              <br>
              Patinas/Patelė
            </p>
          </div>
        </div>
      </div>
      <div class="pagination">
        <a href="#" class="pagination__bullet pagination__bullet--active">1</a>
        <a href="#" class="pagination__bullet">2</a>
        <a href="#" class="pagination__bullet pagination__bullet--empty">...</a>
        <a href="#" class="pagination__bullet">4</a>
        <a href="#" class="pagination__bullet pagination__bullet--next"></a>
      </div>
    </div>
  </section>
</main>
<?php include './partials/footer.php'; ?>
<?php include './partials/foot.php'; ?>
