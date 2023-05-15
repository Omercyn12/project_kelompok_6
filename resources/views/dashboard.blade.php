<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <title>HOME | Visit to Dieng</title>
  </head>
  <body id="home">
    <header>
      <!-- navigation -->
      <section class="navigation">
        <div class="container">
          <div class="box-navigation animate__animated animate__fadeInDown">
            <div class="box">
              <h1>Visit to Dieng</h1>
            </div>
            <div class="box menu-navigation">
              <ul>
                <li>
                  <i class="ri-home-3-line"></i>
                  <a href="{{ route('dashboard') }}">Home</a>
                </li>
                <li>
                  <i class="ri-information-line"></i>
                  <a href="#about">About</a>
                </li>
                <li>
                  <i class="ri-dashboard-line"></i>
                  <a href="#news">News</a>
                </li>
                <select onchange="location = this.value;">
                    <option value="Destination">Destination</option>
                    <option value="Candi">Candi Arjuna</option>
                    <option value="Kawah_Sikidang">Kawah Sikidang</option>
                    <option value="Bukit_Scooter">Bukit Scooter</option>
                    <option value="Telaga_Warna">Telaga Warna</option>
                    <option value="Tuk Bimalukar">Tuk Bimalukar</option>
                </select>
              </ul>
            </div>
            <div class="box menu-bar">
              <i class="ri-menu-3-fill" style="color: white"></i>
            </div>
          </div>
        </div>
      </section>
      <!-- navigation -->

      <!-- hero -->
      <section class="hero">
        <h1 class="animate__animated animate__pulse">Dieng Plateau</h1>
      </section>
      <!-- hero -->
    </header>

    <!-- about -->
    <section class="about" id="about">
      <div class="container">
        <div class="box-about">
          <div class="box" data-aos="fade-right" data-aos-duration="1000" data-aos-iteration="1">
            <h1>Dieng Plateau</h1>
            <p>
            Dieng Plateau is a marshy plateau that forms the floor of a caldera complex on the Dieng Volcanic
            Complex in Central Java, Indonesia. It sits at 2,000 m (6,600 ft) above sea level and has a cooler
            climate than the lowlands. The name “Dieng” means “place of the ancestors or gods” or “house of the gods”.
            It has various natural and cultural attractions, such as multi-coloured lakes, bubbling mud pits, sulphuric fumes,
             green hills, and ancient temples. It is one of the most famous tourist destinations in Java
            </p>
          </div>
          <div class="box" data-aos="zoom-in" data-aos-duration="1000" data-aos-iteration="1">
            <img src="./images/candi-arjuna-dieng.jpg" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- about -->

    <!-- destianion -->
    <section class="destination" id="destination">
        <div class="slider" x-data="{start: true, end: false}">
            <div class="slider__content" x-ref="slider" x-on:scroll.debounce="$refs.slider.scrollLeft == 0 ? start = true : start = false; Math.abs(($refs.slider.scrollWidth - $refs.slider.offsetWidth) - $refs.slider.scrollLeft) < 5 ? end = true : end = false;">
              <div class="slider__item">
                <img class="slider__image" src="./images/candi-arjuna-dieng.jpg" alt="Image">
                <div class="slider__info">
                  <h2>This is a card</h2>
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__image" src="./images/candi-arjuna-dieng.jpg" alt="Image">
                <div class="slider__info">
                  <h2>This is a card</h2>
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__image" src="./images/candi-arjuna-dieng.jpg" alt="Image">
                <div class="slider__info">
                  <h2>This is a card</h2>
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__image" src="./images/candi-arjuna-dieng.jpg" alt="Image">
                <div class="slider__info">
                  <h2>This is a card</h2>
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__image" src="./images/candi-arjuna-dieng.jpg" alt="Image">
                <div class="slider__info">
                  <h2>This is a card</h2>
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__image" src="./images/candi-arjuna-dieng.jpg" alt="Image">
                <div class="slider__info">
                  <h2>This is a card</h2>
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__image" src="./images/candi-arjuna-dieng.jpg" alt="Image">
                <div class="slider__info">
                  <h2>This is a card</h2>
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__image" src="./images/candi-arjuna-dieng.jpg" alt="Image">
                <div class="slider__info">
                  <h2>This is a card</h2>
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__image" src="./images/candi-arjuna-dieng.jpg" alt="Image">
                <div class="slider__info">
                  <h2>This is a card</h2>
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__image" src="./images/candi-arjuna-dieng.jpg" alt="Image">
                <div class="slider__info">
                  <h2>This is a card</h2>
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__image" src="./images/candi-arjuna-dieng.jpg" alt="Image">
                <div class="slider__info">
                  <h2>This is a card</h2>
                </div>
              </div>
            </div>
            <div class="slider__nav">
              <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
              <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
            </div>
          </div>
    </section>
    <!-- destination -->

    <!-- gallery -->
    <section class="gallery">
        <div class="container">
            <div class="box" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100" data-aos-iteration="1">
                <video id="video" autoplay muted loop>
                    <source src="./videos/Get Lost - Dieng Plateau.mp4" type="video/mp4">
                </video>
            </div>
         </div>
    </section>
          <!-- gallery -->

    <!-- news -->
    <section class="news" id="news">
      <div class="container">
        <div class="box-news">
          <div class="box" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100" data-aos-iteration="1">
            <img src="./images/candi-arjuna-dieng.jpg" alt="" />
            <h1>Candi Arjuna Dieng </h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime provident nisi, aliquam cum non magni.</p>
          </div>
          <div class="box" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300" data-aos-iteration="1">
            <img src="./images/candi-arjuna-dieng.jpg" alt="" />
            <h1>Candi Arjuna Dieng</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime provident nisi, aliquam cum non magni.</p>
          </div>
          <div class="box" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500" data-aos-iteration="1">
            <img src="./images/candi-arjuna-dieng.jpg" alt="" />
            <h1>Candi Arjuna Dieng</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime provident nisi, aliquam cum non magni.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- news -->


    <!-- Footer -->
    <section class="contact" id="footer">
        <footer>
            <div class="footer">
            <div class="row">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            </div>

            <div class="row">
            <ul>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Our Services</a></li>
            <li><a href="#">Privacy Policy</a></li>
            </ul>
            </div>

            <div class="row">
           Copyright © 2023 kel_6 - All rights reserved
            </div>
            </div>
            </footer>
    <!-- Footer -->

    <script src='https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.js'></script>
    <script src="./dist/js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
