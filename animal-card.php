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
        <h3>Rudis</h3>
        <div class="ageBlock">
          <p>Man jau <span class="">0</span> <span>0</span></p>
          <p>Prieglaudoje jau esu <span>0</span> <span>0</span> <span>0</span></p>
        </div>
      </div>
      <div class="animalCard__body">
        <div class="imgGallery">
          <div class="main-image">
            <img src="./assets/images/profile.jpg" alt="">
          </div>


        </div>
        <div class="content">
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
