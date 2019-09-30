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
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>
      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </section>
  <section class="section animal">
    <div class="section-decoration">
      <div class="section-decoration__line"></div>
      <svg class="section-decoration__svg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 193.43 198.26"><defs><style>.cls-1{fill:#e87e04;}</style></defs><title>vet-icon</title><path class="cls-1" d="M160.1,139.7c-6.4-4.9-13.3-9.5-18.7-15.4s-9.2-13.3-14-19.9c-1.9-2.6-3.9-5.6-6.7-7a107.06,107.06,0,0,0-18.3-7.2c-6.7-1.9-13.8-2-20.2,1.1-10.7,5.2-18.7,13.6-26.5,22.3a160.06,160.06,0,0,1-18.2,17.7c-4.2,3.4-9.9,4.9-14.6,7.8-14.5,9-17.8,35.6-6.7,47.3,5.4,5.8,11.4,10,18.7,11.8,8.4,2,17,1.1,25.4-1.7,6.3-2.1,12.7-5.3,19.2-5.4,10.8-.2,21.7,1.3,32.4,2.6,10.1,1.3,20.1,3.4,30.2,5.1,12.3.1,22-4.6,29.1-14.2,5.8-7.9,8.4-16.7,4.8-26.5C172.9,150.3,166.7,144.8,160.1,139.7ZM129.3,156H107.7v21.6h-23V156H63.1V133.1H84.7V111.5h22.9v21.6h21.6V156Z" transform="translate(-3.25 -1.02)"/><path class="cls-1" d="M118.7,84.3c6.1,6.9,18.4,7.1,26.9-4.5,7.3-10,10.4-21.4,10.4-38.5a42.24,42.24,0,0,0-7.1-22.4c-4.7-6.9-11.5-10.1-19.4-9.1-6.8.9-11.9,5.7-14.5,12.1-5.5,13.9-8.4,28.4-5.1,43.2C111.5,71.8,114.2,79.2,118.7,84.3Z" transform="translate(-3.25 -1.02)"/><path class="cls-1" d="M82.1,77.9c6.7-3.3,9.3-9.5,11.3-16.5,4.3-15.2,6.4-30.2-.2-45.3C90,8.6,83.9.1,74.8,1.1c-3.1,1.1-6.6,1.6-9.2,3.4C56.4,10.8,53,20.6,51.5,30.9A70.26,70.26,0,0,0,56,68C61.2,80.3,70.5,83.6,82.1,77.9Z" transform="translate(-3.25 -1.02)"/><path class="cls-1" d="M3.6,79.6c.4,2.6.9,7.2,1.6,10.8,1.8,8.7,5.6,16.3,14,20.3,13.2,6.1,28.3-7.4,28.9-21.4a74.32,74.32,0,0,0-2.2-21c-3-12-8.2-22.3-22.8-23.8-7.6-.8-16.5,6.2-18.2,14A66,66,0,0,0,3.6,79.6Z" transform="translate(-3.25 -1.02)"/><path class="cls-1" d="M196.1,76.9c-.7-6.8-6.6-14.1-14.1-16.5-5.8-1.8-15.3,1.3-19.1,6.3-6.8,9.1-10.2,19.5-11.3,30.8.2,3.5.4,7.1.7,10.8,1,13.2,10.9,23.6,25.2,19.2,9.8-3,13.2-12,16-20.5C196.7,97.4,197.3,87.2,196.1,76.9Z" transform="translate(-3.25 -1.02)"/></svg>
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
          </select>
        </div>
        <div class="filter__group">
          <select class="filter__select" name="status" id="status">
            <option value="visi">Visi</option>
            <option value="rado-namus">Rado namus</option>
            <option value="iesko-namu">Ieško namų</option>
          </select>
        </div>
        <div class="filter__group">
          <select class="filter__select" name="sorting" id="sorting">
            <option value="naujausi">Nuo naujausių</option>
            <option value="seniausi">Nuo seniausių</option>
          </select>
        </div>
        <a class="btn--orange filter__btn" href="#"><span></span></a>
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
      <svg class="section-decoration__svg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 193.43 198.26"><defs><style>.cls-1{fill:#e87e04;}</style></defs><title>vet-icon</title><path class="cls-1" d="M160.1,139.7c-6.4-4.9-13.3-9.5-18.7-15.4s-9.2-13.3-14-19.9c-1.9-2.6-3.9-5.6-6.7-7a107.06,107.06,0,0,0-18.3-7.2c-6.7-1.9-13.8-2-20.2,1.1-10.7,5.2-18.7,13.6-26.5,22.3a160.06,160.06,0,0,1-18.2,17.7c-4.2,3.4-9.9,4.9-14.6,7.8-14.5,9-17.8,35.6-6.7,47.3,5.4,5.8,11.4,10,18.7,11.8,8.4,2,17,1.1,25.4-1.7,6.3-2.1,12.7-5.3,19.2-5.4,10.8-.2,21.7,1.3,32.4,2.6,10.1,1.3,20.1,3.4,30.2,5.1,12.3.1,22-4.6,29.1-14.2,5.8-7.9,8.4-16.7,4.8-26.5C172.9,150.3,166.7,144.8,160.1,139.7ZM129.3,156H107.7v21.6h-23V156H63.1V133.1H84.7V111.5h22.9v21.6h21.6V156Z" transform="translate(-3.25 -1.02)"/><path class="cls-1" d="M118.7,84.3c6.1,6.9,18.4,7.1,26.9-4.5,7.3-10,10.4-21.4,10.4-38.5a42.24,42.24,0,0,0-7.1-22.4c-4.7-6.9-11.5-10.1-19.4-9.1-6.8.9-11.9,5.7-14.5,12.1-5.5,13.9-8.4,28.4-5.1,43.2C111.5,71.8,114.2,79.2,118.7,84.3Z" transform="translate(-3.25 -1.02)"/><path class="cls-1" d="M82.1,77.9c6.7-3.3,9.3-9.5,11.3-16.5,4.3-15.2,6.4-30.2-.2-45.3C90,8.6,83.9.1,74.8,1.1c-3.1,1.1-6.6,1.6-9.2,3.4C56.4,10.8,53,20.6,51.5,30.9A70.26,70.26,0,0,0,56,68C61.2,80.3,70.5,83.6,82.1,77.9Z" transform="translate(-3.25 -1.02)"/><path class="cls-1" d="M3.6,79.6c.4,2.6.9,7.2,1.6,10.8,1.8,8.7,5.6,16.3,14,20.3,13.2,6.1,28.3-7.4,28.9-21.4a74.32,74.32,0,0,0-2.2-21c-3-12-8.2-22.3-22.8-23.8-7.6-.8-16.5,6.2-18.2,14A66,66,0,0,0,3.6,79.6Z" transform="translate(-3.25 -1.02)"/><path class="cls-1" d="M196.1,76.9c-.7-6.8-6.6-14.1-14.1-16.5-5.8-1.8-15.3,1.3-19.1,6.3-6.8,9.1-10.2,19.5-11.3,30.8.2,3.5.4,7.1.7,10.8,1,13.2,10.9,23.6,25.2,19.2,9.8-3,13.2-12,16-20.5C196.7,97.4,197.3,87.2,196.1,76.9Z" transform="translate(-3.25 -1.02)"/></svg>
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
      <svg class="section-decoration__svg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 193.43 198.26"><defs><style>.cls-1{fill:#e87e04;}</style></defs><title>vet-icon</title><path class="cls-1" d="M160.1,139.7c-6.4-4.9-13.3-9.5-18.7-15.4s-9.2-13.3-14-19.9c-1.9-2.6-3.9-5.6-6.7-7a107.06,107.06,0,0,0-18.3-7.2c-6.7-1.9-13.8-2-20.2,1.1-10.7,5.2-18.7,13.6-26.5,22.3a160.06,160.06,0,0,1-18.2,17.7c-4.2,3.4-9.9,4.9-14.6,7.8-14.5,9-17.8,35.6-6.7,47.3,5.4,5.8,11.4,10,18.7,11.8,8.4,2,17,1.1,25.4-1.7,6.3-2.1,12.7-5.3,19.2-5.4,10.8-.2,21.7,1.3,32.4,2.6,10.1,1.3,20.1,3.4,30.2,5.1,12.3.1,22-4.6,29.1-14.2,5.8-7.9,8.4-16.7,4.8-26.5C172.9,150.3,166.7,144.8,160.1,139.7ZM129.3,156H107.7v21.6h-23V156H63.1V133.1H84.7V111.5h22.9v21.6h21.6V156Z" transform="translate(-3.25 -1.02)"/><path class="cls-1" d="M118.7,84.3c6.1,6.9,18.4,7.1,26.9-4.5,7.3-10,10.4-21.4,10.4-38.5a42.24,42.24,0,0,0-7.1-22.4c-4.7-6.9-11.5-10.1-19.4-9.1-6.8.9-11.9,5.7-14.5,12.1-5.5,13.9-8.4,28.4-5.1,43.2C111.5,71.8,114.2,79.2,118.7,84.3Z" transform="translate(-3.25 -1.02)"/><path class="cls-1" d="M82.1,77.9c6.7-3.3,9.3-9.5,11.3-16.5,4.3-15.2,6.4-30.2-.2-45.3C90,8.6,83.9.1,74.8,1.1c-3.1,1.1-6.6,1.6-9.2,3.4C56.4,10.8,53,20.6,51.5,30.9A70.26,70.26,0,0,0,56,68C61.2,80.3,70.5,83.6,82.1,77.9Z" transform="translate(-3.25 -1.02)"/><path class="cls-1" d="M3.6,79.6c.4,2.6.9,7.2,1.6,10.8,1.8,8.7,5.6,16.3,14,20.3,13.2,6.1,28.3-7.4,28.9-21.4a74.32,74.32,0,0,0-2.2-21c-3-12-8.2-22.3-22.8-23.8-7.6-.8-16.5,6.2-18.2,14A66,66,0,0,0,3.6,79.6Z" transform="translate(-3.25 -1.02)"/><path class="cls-1" d="M196.1,76.9c-.7-6.8-6.6-14.1-14.1-16.5-5.8-1.8-15.3,1.3-19.1,6.3-6.8,9.1-10.2,19.5-11.3,30.8.2,3.5.4,7.1.7,10.8,1,13.2,10.9,23.6,25.2,19.2,9.8-3,13.2-12,16-20.5C196.7,97.4,197.3,87.2,196.1,76.9Z" transform="translate(-3.25 -1.02)"/></svg>
      <div class="section-decoration__line section-decoration__line--white"></div>
    </div>
    <h2 class="section-title animal-title">Istorijos iš namų</h2>
    <div class="container">
      <div class="stories-wrap">
        <div class="story">
          <div class="story__img story__img--imgTop" style="background-image: url(./assets/images/news1.jpg)"></div>
          <div class="story__content story__content--imgTop">
            <div class="story__date">2019-05-13</div>
            <h3 class="story__title">Rudis laimingas naujuose namuose</h3>
            <p class="story__text">tekstukas koks nors trumpas tekstukas koks nors trumpas</p>
            <a class="story__button btn btn--white" href="#">Skaityti daugiau</a>
          </div>
        </div>
        <div class="story">
          <div class="story__img story__img--imgBottom" style="background-image: url(./assets/images/news1.jpg)"></div>
          <div class="story__content story__content--imgBottom">
            <div class="story__date">2019-05-13</div>
            <h3 class="story__title">Rudis laimingas naujuose namuose</h3>
            <p class="story__text">tekstukas koks nors trumpas tekstukas koks nors trumpas</p>
            <a class="story__button btn btn--white" href="#">Skaityti daugiau</a>
          </div>
        </div>
        <div class="story">
          <div class="story__img story__img--imgTop" style="background-image: url(./assets/images/news1.jpg)"></div>
          <div class="story__content story__content--imgTop">
            <div class="story__date">2019-05-13</div>
            <h3 class="story__title">Rudis laimingas naujuose namuose</h3>
            <p class="story__text">tekstukas koks nors trumpas tekstukas koks nors trumpas tekstukas koks nors trumpas tekstukas koks nors trumpas</p>
            <a class="story__button btn btn--white" href="#">Skaityti daugiau</a>
          </div>
        </div>
        <div class="story">
          <div class="story__img story__img--imgBottom" style="background-image: url(./assets/images/news1.jpg)"></div>
          <div class="story__content story__content--imgBottom">
            <div class="story__date">2019-05-13</div>
            <h3 class="story__title">Rudis laimingas naujuose namuose</h3>
            <p class="story__text">tekstukas koks nors trumpas tekstukas koks nors trumpas</p>
            <a class="story__button btn btn--white" href="#">Skaityti daugiau</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include './partials/footer.php'; ?>
<?php include './partials/foot.php'; ?>
