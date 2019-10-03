<?php include './partials/head.php'; ?>
<?php include './partials/header.php'; ?>
<main>
  <section class="section hero">
    <div class="hero-cont swiper-container">
      <div class="hero-cont__wrapper swiper-wrapper">
          <!-- Slides -->
          <div class="hero-slide swiper-slide">
            <div class="hero-slide__background" style="background-image: url('./assets/images/hero1.png')"></div>
            <div class="hero-slide__content">
              <h2 class="hero-slide__title">Paremk beglobius gyvūnus</h2>
              <a class="btn__common btn--orange hero-slide__btn" href="#">Paaukoti</a>
            </div>
          </div>
          <div class="hero-slide swiper-slide">
            <div class="hero-slide__background" style="background-image: url('./assets/images/hero2.jpg')"></div>
            <div class="hero-slide__content">
              <h2 class="hero-slide__title">Tapk vienu iš mūsų super savanorių</h2>
              <a class="btn__common btn--orange hero-slide__btn" href="#">Daugiau informacijos</a>
            </div>
          </div>
      </div>
      <div class="swiper-button-prev"><svg enable-background="new 0 0 477.175 477.175" version="1.1" viewBox="0 0 477.175 477.175" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="m145.19 238.58l215.5-215.5c5.3-5.3 5.3-13.8 0-19.1s-13.8-5.3-19.1 0l-225.1 225.1c-5.3 5.3-5.3 13.8 0 19.1l225.1 225c2.6 2.6 6.1 4 9.5 4s6.9-1.3 9.5-4c5.3-5.3 5.3-13.8 0-19.1l-215.4-215.5z"/></svg></div>
      <div class="swiper-button-next"><svg enable-background="new 0 0 477.175 477.175" version="1.1" viewBox="0 0 477.175 477.175" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="m360.73 229.08l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1 0s-5.3 13.8 0 19.1l215.5 215.5-215.5 215.5c-5.3 5.3-5.3 13.8 0 19.1 2.6 2.6 6.1 4 9.5 4s6.9-1.3 9.5-4l225.1-225.1c5.3-5.2 5.3-13.8 0.1-19z"/></svg></div>
    </div>
  </section>
  <section class="section animal">
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
      </div>
      <div class="btn-wrap--centered">
        <a class="btn__common btn--orange btn--shadow animal-btn" href="#">Visi gyvūnai</a>
      </div>
    </div>
  </section>
  <section class="section news">
    <div class="section-decoration">
      <div class="section-decoration__line section-decoration__line--white"></div>
      <svg class="section-decoration__svg" width="551.06px" height="551.06px" enable-background="new 0 0 551.062 551.062" version="1.1" viewBox="0 0 551.062 551.062" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
	      <path d="m465.19 453.46c14.749 67.688-58.752 82.375-91.127 73.562s-98.41-10.281-98.41-10.281-66.218 1.469-98.593 10.281c-32.375 8.874-105.94-5.875-91.249-73.562s79.438-64.75 97.186-156c17.687-91.249 92.718-85.374 92.718-85.374s74.847-5.875 92.535 85.374c17.625 91.249 82.252 88.311 96.94 156zm-121.6-247.31c39.841 11.505 83.844-19.951 98.349-70.258 14.504-50.245-5.998-100.31-45.839-111.81-39.842-11.506-83.844 19.951-98.349 70.258-14.504 50.245 5.998 100.31 45.839 111.81zm165.12-18.298c-38.372-15.668-85.496 10.894-105.26 59.363-19.768 48.471-4.712 100.43 33.66 116.04 38.372 15.606 85.496-10.894 105.26-59.364s4.713-100.37-33.66-116.03zm-301.29 18.298c39.841-11.506 60.343-61.567 45.839-111.81s-58.568-81.702-98.349-70.196c-39.78 11.505-60.343 61.566-45.839 111.81 14.505 50.245 58.508 81.701 98.349 70.196zm-93.453 157.1c38.373-15.667 53.428-67.626 33.66-116.04s-66.892-75.031-105.26-59.363c-38.372 15.667-53.427 67.626-33.659 116.03 19.767 48.47 66.891 75.031 105.26 59.364z"/>
      </svg>
      <div class="section-decoration__line section-decoration__line--white"></div>
    </div>
    <h2 class="section-title animal-title">Naujienos</h2>
    <div class="container">
      <div class="news-cont swiper-container">
        <div class="news-cont__wrapper swiper-wrapper">
            <!-- Slides -->
            <div class="news-slide swiper-slide">
              <a href="#"><div class="news-slide__img" style="background-image: url(./assets/images/news1.jpg)"></div></a>
              <div class="news-slide__date">2019-06-11</div>
              <h3 class="news-slide__title">Naujienos pavadinimas</h3>
              <p class="news-slide__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
              <div class="news-slide__read-more-wrap"><a class="news-slide__read-more" href="#">Skaityti daugiau</a></div>
            </div>
            <div class="news-slide swiper-slide">
              <a href="#"><div class="news-slide__img" style="background-image: url(./assets/images/news1.jpg)"></div></a>
              <div class="news-slide__date">2019-06-11</div>
              <h3 class="news-slide__title">Naujienos pavadinimas</h3>
              <p class="news-slide__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
              <div class="news-slide__read-more-wrap"><a class="news-slide__read-more" href="#">Skaityti daugiau</a></div>
            </div>
            <div class="news-slide swiper-slide">
              <a href="#"><div class="news-slide__img" style="background-image: url(./assets/images/news1.jpg)"></div></a>
              <div class="news-slide__date">2019-06-11</div>
              <h3 class="news-slide__title">Naujienos pavadinimas</h3>
              <p class="news-slide__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              <div class="news-slide__read-more-wrap"><a class="news-slide__read-more" href="#">Skaityti daugiau</a></div>
            </div>
            <div class="news-slide swiper-slide">
              <a href="#"><div class="news-slide__img" style="background-image: url(./assets/images/news1.jpg)"></div></a>
              <div class="news-slide__date">2019-06-11</div>
              <h3 class="news-slide__title">Naujienos pavadinimas</h3>
              <p class="news-slide__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
              <div class="news-slide__read-more-wrap"><a class="news-slide__read-more" href="#">Skaityti daugiau</a></div>
            </div>
        </div>
      </div>
      <!-- swipper controls for news section -->
      <div class="news-button news-button__prev"><div class="arrow"></div></div>
      <div class="news-button news-button__next"><div class="arrow"></div></div>
      <div class="news-pagination"></div>
    </div>
  </section>
  <section class="section statistics">
      <div class="stat">
        <div class="stat-block">
          <div class="stat-round"><span class="stat-number">1</span></div>
          <p class="stat-text">Rado namus</p>
        </div>
        <div class="stat-block">
          <div class="stat-round stat-round--noSub stat-round--orange"><a href="#" class="stat-link">Statistika</a></div>
        </div>
        <div class="stat-block">
          <div class="stat-round"><span class="stat-number">4</span></div>
          <p class="stat-text">Laukia šeimininkų</p>
        </div>
      </div>
    <div class="statistics__overlay overlay overlay--brown"></div>
    <div class="statistics__image" style="background-image: url(./assets/images/stat-bg.png)"></div>
  </section>
  <section class="section stories">
    <div class="section-decoration">
      <div class="section-decoration__line section-decoration__line--white"></div>
      <svg class="section-decoration__svg" width="551.06px" height="551.06px" enable-background="new 0 0 551.062 551.062" version="1.1" viewBox="0 0 551.062 551.062" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
	      <path d="m465.19 453.46c14.749 67.688-58.752 82.375-91.127 73.562s-98.41-10.281-98.41-10.281-66.218 1.469-98.593 10.281c-32.375 8.874-105.94-5.875-91.249-73.562s79.438-64.75 97.186-156c17.687-91.249 92.718-85.374 92.718-85.374s74.847-5.875 92.535 85.374c17.625 91.249 82.252 88.311 96.94 156zm-121.6-247.31c39.841 11.505 83.844-19.951 98.349-70.258 14.504-50.245-5.998-100.31-45.839-111.81-39.842-11.506-83.844 19.951-98.349 70.258-14.504 50.245 5.998 100.31 45.839 111.81zm165.12-18.298c-38.372-15.668-85.496 10.894-105.26 59.363-19.768 48.471-4.712 100.43 33.66 116.04 38.372 15.606 85.496-10.894 105.26-59.364s4.713-100.37-33.66-116.03zm-301.29 18.298c39.841-11.506 60.343-61.567 45.839-111.81s-58.568-81.702-98.349-70.196c-39.78 11.505-60.343 61.566-45.839 111.81 14.505 50.245 58.508 81.701 98.349 70.196zm-93.453 157.1c38.373-15.667 53.428-67.626 33.66-116.04s-66.892-75.031-105.26-59.363c-38.372 15.667-53.427 67.626-33.659 116.03 19.767 48.47 66.891 75.031 105.26 59.364z"/>
      </svg>
      <div class="section-decoration__line section-decoration__line--white"></div>
    </div>
    <h2 class="section-title animal-title">Istorijos iš namų</h2>
    <div class="container">
      <div class="stories-wrap">
        <div class="story">
          <div class="story__img story__img--imgTop" style="background-image: url(./assets/images/news1.jpg)"></div>
          <div class="story__content story__content--imgTop">
            <div class="story__date">2019-05-13</div>
            <a href="#"><h3 class="story__title">Rudis laimingas naujuose namuose</h3></a>
            <p class="story__text">tekstukas koks nors trumpas tekstukas koks nors trumpas</p>
            <a class="story__button btn btn--white" href="#">Skaityti daugiau</a>
          </div>
        </div>
        <div class="story">
          <div class="story__img story__img--imgBottom" style="background-image: url(./assets/images/news1.jpg)"></div>
          <div class="story__content story__content--imgBottom">
            <div class="story__date">2019-05-13</div>
            <a href="#"><h3 class="story__title">Rudis laimingas naujuose namuose</h3></a>
            <p class="story__text">tekstukas koks nors trumpas tekstukas koks nors trumpas</p>
            <a class="story__button btn btn--white" href="#">Skaityti daugiau</a>
          </div>
        </div>
        <div class="story">
          <div class="story__img story__img--imgTop" style="background-image: url(./assets/images/news1.jpg)"></div>
          <div class="story__content story__content--imgTop">
            <div class="story__date">2019-05-13</div>
            <a href="#"><h3 class="story__title">Rudis laimingas naujuose namuose</h3></a>
            <p class="story__text">tekstukas koks nors trumpas tekstukas koks nors trumpas tekstukas koks nors trumpas tekstukas koks nors trumpas</p>
            <a class="story__button btn btn--white" href="#">Skaityti daugiau</a>
          </div>
        </div>
        <div class="story">
          <div class="story__img story__img--imgBottom" style="background-image: url(./assets/images/news1.jpg)"></div>
          <div class="story__content story__content--imgBottom">
            <div class="story__date">2019-05-13</div>
            <a href="#"><h3 class="story__title">Rudis laimingas naujuose namuose</h3></a>
            <p class="story__text">tekstukas koks nors trumpas tekstukas koks nors trumpas</p>
            <a class="story__button btn btn--white" href="#">Skaityti daugiau</a>
          </div>
        </div>
      </div>
      <div class="btn-wrap--centered">
        <a class="btn__common btn--orange btn--shadow stories-btn" href="#">Daugiau istorijų</a>
      </div>
    </div>
  </section>
  <section class="section learn">
    <div class="section-decoration">
      <div class="section-decoration__line"></div>
      <svg class="section-decoration__svg" width="551.06px" height="551.06px" enable-background="new 0 0 551.062 551.062" version="1.1" viewBox="0 0 551.062 551.062" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
	      <path d="m465.19 453.46c14.749 67.688-58.752 82.375-91.127 73.562s-98.41-10.281-98.41-10.281-66.218 1.469-98.593 10.281c-32.375 8.874-105.94-5.875-91.249-73.562s79.438-64.75 97.186-156c17.687-91.249 92.718-85.374 92.718-85.374s74.847-5.875 92.535 85.374c17.625 91.249 82.252 88.311 96.94 156zm-121.6-247.31c39.841 11.505 83.844-19.951 98.349-70.258 14.504-50.245-5.998-100.31-45.839-111.81-39.842-11.506-83.844 19.951-98.349 70.258-14.504 50.245 5.998 100.31 45.839 111.81zm165.12-18.298c-38.372-15.668-85.496 10.894-105.26 59.363-19.768 48.471-4.712 100.43 33.66 116.04 38.372 15.606 85.496-10.894 105.26-59.364s4.713-100.37-33.66-116.03zm-301.29 18.298c39.841-11.506 60.343-61.567 45.839-111.81s-58.568-81.702-98.349-70.196c-39.78 11.505-60.343 61.566-45.839 111.81 14.505 50.245 58.508 81.701 98.349 70.196zm-93.453 157.1c38.373-15.667 53.428-67.626 33.66-116.04s-66.892-75.031-105.26-59.363c-38.372 15.667-53.427 67.626-33.659 116.03 19.767 48.47 66.891 75.031 105.26 59.364z"/>
      </svg>
      <div class="section-decoration__line"></div>
    </div>
    <h2 class="section-title learn-title">Švietimas</h2>
    <div class="learn__background" style="background-image: url(./assets/images/happy-dog.jpg)">
      <div class="container">
        <div class="learn__content">
          <h3 class="learn__title">Tekstas apie švietimą</h3>
          <p class="learn__text">Jau daugiau nei penkerius metus ypatingą dėmesį skiriame švietimui. Pradėjome nuo mokinių grupių priėmimo savo prieglaudoje, o dabar stengiamės šviesti ne tik jaunuolius, bet ir visą visuomenę. Šiam tikslui naudojame socialinius tinklus, taip pat dalyvaujame įvairiuose renginiuose. Ekskursijų metu su mokiniais diskutuojame apie benamius gyvūnus: iš kur jie atsiranda, ką daryti, kad jų mažėtų, kokią funkciją atlieka gyvūnų prieglaudos. Mokiniai sužino apie šunų kūno kalbą, naminių gyvūnų priežiūrą, savanorystę. Taip pat neužmirštame ir mūsų kačių - jos gauna daug dėmesio ir švelnių paglostymų iš moksleivių. Pakviesti vykstame ir į mokyklas, kur vedame pamokas. Pamokų tikslas - puoselėti jaunosios kartos atsakingą požiūrį į augintinius ir padėti suprasti, kaip bendrauti su šunimi, kad išvengti įkandimų. Pamokų turinys yra pritaikytas skirtingoms amžiaus grupėms, tad parašykite, jei norite mus pasikviesti! Pamokos yra nemokamos.</p>
          <a class="learn__button btn btn--white" href="#">Skaityti daugiau</a>
        </div>
      </div>
    </div>
  </section>
  <section class="section sponsors">
    <div class="section-decoration">
      <div class="section-decoration__line"></div>
      <svg class="section-decoration__svg" width="551.06px" height="551.06px" enable-background="new 0 0 551.062 551.062" version="1.1" viewBox="0 0 551.062 551.062" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
	      <path d="m465.19 453.46c14.749 67.688-58.752 82.375-91.127 73.562s-98.41-10.281-98.41-10.281-66.218 1.469-98.593 10.281c-32.375 8.874-105.94-5.875-91.249-73.562s79.438-64.75 97.186-156c17.687-91.249 92.718-85.374 92.718-85.374s74.847-5.875 92.535 85.374c17.625 91.249 82.252 88.311 96.94 156zm-121.6-247.31c39.841 11.505 83.844-19.951 98.349-70.258 14.504-50.245-5.998-100.31-45.839-111.81-39.842-11.506-83.844 19.951-98.349 70.258-14.504 50.245 5.998 100.31 45.839 111.81zm165.12-18.298c-38.372-15.668-85.496 10.894-105.26 59.363-19.768 48.471-4.712 100.43 33.66 116.04 38.372 15.606 85.496-10.894 105.26-59.364s4.713-100.37-33.66-116.03zm-301.29 18.298c39.841-11.506 60.343-61.567 45.839-111.81s-58.568-81.702-98.349-70.196c-39.78 11.505-60.343 61.566-45.839 111.81 14.505 50.245 58.508 81.701 98.349 70.196zm-93.453 157.1c38.373-15.667 53.428-67.626 33.66-116.04s-66.892-75.031-105.26-59.363c-38.372 15.667-53.427 67.626-33.659 116.03 19.767 48.47 66.891 75.031 105.26 59.364z"/>
      </svg>
      <div class="section-decoration__line"></div>
    </div>
    <h2 class="section-title sponsors-title">Mūsų rėmėjai</h2>
    <div class="container">
      <div class="sponsors-cont swiper-container">
        <div class="swiper-wrapper">
          <div class="sponsors-slide swiper-slide">
            <div class="sponsors__logo-wrap">
              <a href="" target="_blank">
                <img class="sponsors__logo" src="./assets/images/logotipai/logo1.jpg" alt="">
              </a>
            </div>
            <div class="sponsors__logo-wrap">
              <a href="" target="_blank">
                <img class="sponsors__logo" src="./assets/images/logotipai/logo3.jpg" alt="">
              </a>
            </div>
            <div class="sponsors__logo-wrap">
              <a href="" target="_blank">
                <img class="sponsors__logo" src="./assets/images/logotipai/logo4.png" alt="">
              </a>
            </div>
            <div class="sponsors__logo-wrap">
              <a href="" target="_blank">
              <img class="sponsors__logo" src="./assets/images/logotipai/logo3.jpg" alt="">
            </a>
          </div>
            <div class="sponsors__logo-wrap">
              <a href="" target="_blank">
              <img class="sponsors__logo" src="./assets/images/logotipai/logo1.jpg" alt="">
            </a>
          </div>
            <div class="sponsors__logo-wrap">
              <a href="" target="_blank">
              <img class="sponsors__logo" src="./assets/images/logotipai/logo3.jpg" alt="">
            </a>
          </div>
            <div class="sponsors__logo-wrap">
              <a href="" target="_blank">
              <img class="sponsors__logo" src="./assets/images/logotipai/logo6.png" alt="">
            </a>
          </div>
            <div class="sponsors__logo-wrap"><a href="" target="_blank">
              <img class="sponsors__logo" src="./assets/images/logotipai/logo1.jpg" alt="">
            </a>
          </div>
          </div>
          <div class="sponsors-slide swiper-slide">
            <div class="sponsors__logo-wrap">
              <a href="" target="_blank">
              <img class="sponsors__logo" src="./assets/images/logotipai/logo2.png" alt="">
            </a>
          </div>
            <div class="sponsors__logo-wrap">
              <a href="" target="_blank">
              <img class="sponsors__logo" src="./assets/images/logotipai/logo3.jpg" alt="">
            </a>
          </div>
            <div class="sponsors__logo-wrap">
              <a href="" target="_blank">
              <img class="sponsors__logo" src="./assets/images/logotipai/logo1.jpg" alt="">
            </a>
          </div>
            <div class="sponsors__logo-wrap">
              <a href="" target="_blank">
              <img class="sponsors__logo" src="./assets/images/logotipai/logo3.jpg" alt="">
            </a>
          </div>
            <div class="sponsors__logo-wrap">
              <a href="" target="_blank">
              <img class="sponsors__logo" src="./assets/images/logotipai/logo6.png" alt="">
            </a>
          </div>
            <div class="sponsors__logo-wrap">
              <a href="" target="_blank">
              <img class="sponsors__logo" src="./assets/images/logotipai/logo2.png" alt="">
            </a>
          </div>
            <div class="sponsors__logo-wrap">
              <a href="" target="_blank">
              <img class="sponsors__logo" src="./assets/images/logotipai/logo3.jpg" alt="">
            </a>
          </div>
            <div class="sponsors__logo-wrap">
              <a href="" target="_blank">
                <img class="sponsors__logo" src="./assets/images/logotipai/logo1.jpg" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include './partials/footer.php'; ?>
<?php include './partials/foot.php'; ?>
