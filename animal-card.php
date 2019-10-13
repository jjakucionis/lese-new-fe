<?php include './partials/head.php'; ?>
<?php include './partials/header.php'; ?>
<main>
  <section class="controls controls--padding">
    <div class="container">
      <div class="flexwrap">
        <div class="breadcrumbs">
          <a class="btn__breadcrumb" href="">Lesė</a>
          <a class="btn__breadcrumb" href="">Globotiniai</a>
          <a class="btn__breadcrumb" href="">Rudis</a>
        </div>
        <div class="go-back">
          <a class="btn__back" href="#">
            <svg enable-background="new 0 0 31.494 31.494" version="1.1" viewBox="0 0 31.494 31.494" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
              <path d="m10.273 5.009c0.444-0.444 1.143-0.444 1.587 0 0.429 0.429 0.429 1.143 0 1.571l-8.047 8.047h26.554c0.619 0 1.127 0.492 1.127 1.111s-0.508 1.127-1.127 1.127h-26.554l8.047 8.032c0.429 0.444 0.429 1.159 0 1.587-0.444 0.444-1.143 0.444-1.587 0l-9.952-9.952c-0.429-0.429-0.429-1.143 0-1.571l9.952-9.952z" fill="#1E201D"/>
            </svg>
          Atgal</a>
        </div>
      </div>
    </div>
  </section>
  <section class="section animalCard">
    <div class="container">
      <div class="animalCard__head">
        <div class="animalCard__titleWrap">
          <h3 class="animalCard__title">Rudis</h3>
          <p class="animalCard__subtitle">Some text</p>
        </div>
        <div class="ageBlock">
          <table class="ageBlock__table">
            <thead>
              <tr>
                <th colspan="3" class="ageBlock__title">Prieglaudoje esu:</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="ageBlock__subtitle">Metai:</td>
                <td class="ageBlock__subtitle">Mėnesiai:</td>
                <td class="ageBlock__subtitle">Dienos:</td>
              </tr>
              <tr>
                <td class="ageBlock__time">0</td>
                <td class="ageBlock__time">4</td>
                <td class="ageBlock__time">3</td>
              </tr>
            </tbody>
          </table>
          <table class="ageBlock__table">
              <thead>
                <tr>
                  <th colspan="2" class="ageBlock__title">Man jau:</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="ageBlock__subtitle">Metai:</td>
                  <td class="ageBlock__subtitle">Mėnesiai:</td>
                </tr>
                <tr>
                  <td class="ageBlock__time">0</td>
                  <td class="ageBlock__time">7</td>
                </tr>
              </tbody>
            </table>
        </div>
      </div>
      <div class="animalCard__body">
        <div class="imgGallery">
          <div class="main-image">
            <img src="./assets/images/profile.jpg" alt="">
          </div>


        </div>
        <div class="cardContent">
          <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'tab-info')">Informacija</button>
            <button class="tablinks" onclick="openCity(event, 'tab-details')">Aprašymas</button>
          </div>
          <div id="tab-info" class="tabcontent">
            <h3>Informacija</h3>
            <p>London is the capital city of England.</p>
          </div>
          <div id="tab-details" class="tabcontent">
            <h3>Aprašymas</h3>
            <p>Paris is the capital of France.</p>
          </div>
        </div>
        <aside class="sidebar">
          <div class="sidebarBlock">
            <h3 class="sidebar__title">Kontaktai</h3>
            <p class="sidebar__text">"Lesė" prieglauda</p>
            <a class="sidebar__link sidebar__tel" href="tel:+37067102845">
              <span class="sidebar__icon"><svg enable-background="new 0 0 473.806 473.806" version="1.1" viewBox="0 0 473.806 473.806" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="m374.46 293.51c-9.7-10.1-21.4-15.5-33.8-15.5-12.3 0-24.1 5.3-34.2 15.4l-31.6 31.5c-2.6-1.4-5.2-2.7-7.7-4-3.6-1.8-7-3.5-9.9-5.3-29.6-18.8-56.5-43.3-82.3-75-12.5-15.8-20.9-29.1-27-42.6 8.2-7.5 15.8-15.3 23.2-22.8 2.8-2.8 5.6-5.7 8.4-8.5 21-21 21-48.2 0-69.2l-27.3-27.3c-3.1-3.1-6.3-6.3-9.3-9.5-6-6.2-12.3-12.6-18.8-18.6-9.7-9.6-21.3-14.7-33.5-14.7s-24 5.1-34 14.7l-0.2 0.2-34 34.3c-12.8 12.8-20.1 28.4-21.7 46.5-2.4 29.2 6.2 56.4 12.8 74.2 16.2 43.7 40.4 84.2 76.5 127.6 43.8 52.3 96.5 93.6 156.7 122.7 23 10.9 53.7 23.8 88 26 2.1 0.1 4.3 0.2 6.3 0.2 23.1 0 42.5-8.3 57.7-24.8 0.1-0.2 0.3-0.3 0.4-0.5 5.2-6.3 11.2-12 17.5-18.1 4.3-4.1 8.7-8.4 13-12.9 9.9-10.3 15.1-22.3 15.1-34.6 0-12.4-5.3-24.3-15.4-34.3l-54.9-55.1zm35.8 105.3c-0.1 0-0.1 0.1 0 0-3.9 4.2-7.9 8-12.2 12.2-6.5 6.2-13.1 12.7-19.3 20-10.1 10.8-22 15.9-37.6 15.9-1.5 0-3.1 0-4.6-0.1-29.7-1.9-57.3-13.5-78-23.4-56.6-27.4-106.3-66.3-147.6-115.6-34.1-41.1-56.9-79.1-72-119.9-9.3-24.9-12.7-44.3-11.2-62.6 1-11.7 5.5-21.4 13.8-29.7l34.1-34.1c4.9-4.6 10.1-7.1 15.2-7.1 6.3 0 11.4 3.8 14.6 7l0.3 0.3c6.1 5.7 11.9 11.6 18 17.9 3.1 3.2 6.3 6.4 9.5 9.7l27.3 27.3c10.6 10.6 10.6 20.4 0 31-2.9 2.9-5.7 5.8-8.6 8.6-8.4 8.6-16.4 16.6-25.1 24.4-0.2 0.2-0.4 0.3-0.5 0.5-8.6 8.6-7 17-5.2 22.7l0.3 0.9c7.1 17.2 17.1 33.4 32.3 52.7l0.1 0.1c27.6 34 56.7 60.5 88.8 80.8 4.1 2.6 8.3 4.7 12.3 6.7 3.6 1.8 7 3.5 9.9 5.3 0.4 0.2 0.8 0.5 1.2 0.7 3.4 1.7 6.6 2.5 9.9 2.5 8.3 0 13.5-5.2 15.2-6.9l34.2-34.2c3.4-3.4 8.8-7.5 15.1-7.5 6.2 0 11.3 3.9 14.4 7.3l0.2 0.2 55.1 55.1c10.3 10.2 10.3 20.7 0.1 31.3z"/><path d="m256.06 112.71c26.2 4.4 50 16.8 69 35.8s31.3 42.8 35.8 69c1.1 6.6 6.8 11.2 13.3 11.2 0.8 0 1.5-0.1 2.3-0.2 7.4-1.2 12.3-8.2 11.1-15.6-5.4-31.7-20.4-60.6-43.3-83.5s-51.8-37.9-83.5-43.3c-7.4-1.2-14.3 3.7-15.6 11s3.5 14.4 10.9 15.6z"/><path d="m473.26 209.01c-8.9-52.2-33.5-99.7-71.3-137.5s-85.3-62.4-137.5-71.3c-7.3-1.3-14.2 3.7-15.5 11-1.2 7.4 3.7 14.3 11.1 15.6 46.6 7.9 89.1 30 122.9 63.7 33.8 33.8 55.8 76.3 63.7 122.9 1.1 6.6 6.8 11.2 13.3 11.2 0.8 0 1.5-0.1 2.3-0.2 7.3-1.1 12.3-8.1 11-15.4z"/></svg></span>
              +370 671 02845
            </a>
            <a class="sidebar__link sidebar__mail" href="mailto:gyvunai@lese.lt">
              <span class="sidebar__icon"><svg enable-background="new 0 0 483.3 483.3" version="1.1" viewBox="0 0 483.3 483.3" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="m424.3 57.75h-365.2c-32.6 0-59.1 26.5-59.1 59.1v249.6c0 32.6 26.5 59.1 59.1 59.1h365.1c32.6 0 59.1-26.5 59.1-59.1v-249.5c0.1-32.6-26.4-59.2-59-59.2zm32.1 308.7c0 17.7-14.4 32.1-32.1 32.1h-365.2c-17.7 0-32.1-14.4-32.1-32.1v-249.5c0-17.7 14.4-32.1 32.1-32.1h365.1c17.7 0 32.1 14.4 32.1 32.1v249.5h0.1z"/><path d="m304.8 238.55l118.2-106c5.5-5 6-13.5 1-19.1-5-5.5-13.5-6-19.1-1l-163 146.3-31.8-28.4c-0.1-0.1-0.2-0.2-0.2-0.3-0.7-0.7-1.4-1.3-2.2-1.9l-129.4-115.8c-5.6-5-14.1-4.5-19.1 1.1s-4.5 14.1 1.1 19.1l119.6 106.9-119.1 111.5c-5.4 5.1-5.7 13.6-0.6 19.1 2.7 2.8 6.3 4.3 9.9 4.3 3.3 0 6.6-1.2 9.2-3.6l120.9-113.1 32.8 29.3c2.6 2.3 5.8 3.4 9 3.4s6.5-1.2 9-3.5l33.7-30.2 120.2 114.2c2.6 2.5 6 3.7 9.3 3.7 3.6 0 7.1-1.4 9.8-4.2 5.1-5.4 4.9-14-0.5-19.1l-118.7-112.7z"/></svg></span>
              gyvunai@lese.lt
            </a>
            <a class="btn__common btn--orange btn--sm btn--shadow" href="#">Visi kontaktai</a>
          </div>
          <div class="sidebarBlock">
            <h3 class="sidebar__title">Paaukok</h3>
            <p class="sidebar__text">"Lesė" sąskaita<br>
                LT647044060005976189<br>
                Įmonės kodas: 300709225
            </p>
            <a class="btn__common btn--orange btn--sm btn--shadow" href="#">Aukoti</a>
          </div>
        </aside>
      </div>
    </div>
  </section>
  <section class="share section">
    <div class="container">
        <a href="#" class="share-button printPage" target="_blank">
          <svg enable-background="new 0 0 482.5 482.5" version="1.1" viewBox="0 0 482.5 482.5" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="m399.25 98.9h-12.4v-27.6c0-39.3-32-71.3-71.3-71.3h-149.7c-39.3 0-71.3 32-71.3 71.3v27.6h-11.3c-39.3 0-71.3 32-71.3 71.3v115c0 39.3 32 71.3 71.3 71.3h11.2v90.4c0 19.6 16 35.6 35.6 35.6h221.1c19.6 0 35.6-16 35.6-35.6v-90.4h12.5c39.3 0 71.3-32 71.3-71.3v-115c0-39.3-32-71.3-71.3-71.3zm-277.8-27.6c0-24.4 19.9-44.3 44.3-44.3h149.6c24.4 0 44.3 19.9 44.3 44.3v27.6h-238.2v-27.6zm238.3 375.8c0 4.7-3.9 8.6-8.6 8.6h-221.1c-4.7 0-8.6-3.9-8.6-8.6v-149.1h238.3v149.1zm83.8-161.8c0 24.4-19.9 44.3-44.3 44.3h-12.4v-31.6h17.8c7.5 0 13.5-6 13.5-13.5s-6-13.5-13.5-13.5h-330c-7.5 0-13.5 6-13.5 13.5s6 13.5 13.5 13.5h19.9v31.6h-11.3c-24.4 0-44.3-19.9-44.3-44.3v-115c0-24.4 19.9-44.3 44.3-44.3h316c24.4 0 44.3 19.9 44.3 44.3v115z"/><path d="m154.15 364.4h171.9c7.5 0 13.5-6 13.5-13.5s-6-13.5-13.5-13.5h-171.9c-7.5 0-13.5 6-13.5 13.5s6.1 13.5 13.5 13.5z"/><path d="m327.15 392.6h-172c-7.5 0-13.5 6-13.5 13.5s6 13.5 13.5 13.5h171.9c7.5 0 13.5-6 13.5-13.5s-6-13.5-13.4-13.5z"/><path d="m398.95 151.9h-27.4c-7.5 0-13.5 6-13.5 13.5s6 13.5 13.5 13.5h27.4c7.5 0 13.5-6 13.5-13.5s-6-13.5-13.5-13.5z"/></svg>
          Print this page
        </a>
        <a href="#" class="share-button facebook" target="_blank">
          <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M19,4V7H17A1,1 0 0,0 16,8V10H19V13H16V20H13V13H11V10H13V7.5C13,5.56 14.57,4 16.5,4M20,2H4A2,2 0 0,0 2,4V20A2,2 0 0,0 4,22H20A2,2 0 0,0 22,20V4C22,2.89 21.1,2 20,2Z" /></svg>
          Share on Facebook
        </a>
    </div>
  </section>
  <script>
    function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
  </script>
</main>
<?php include './partials/footer.php'; ?>
<?php include './partials/foot.php'; ?>
