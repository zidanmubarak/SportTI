<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="public/assets/img/favicon.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>

    <link rel="stylesheet" href="public/assets/css/style.css">

    <title>SportTI-22</title>

</head>
<body>
    <img src="public/assets/img/shape-bg.png" alt="" class="shape__bg">

    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <img src="public/assets/img/logo-skull.png" alt="logo image">
                SPORTTI-22
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__items">
                        <a href="#about" class="nav__link">About Us</a>
                    </li>
                    <li class="nav__items">
                        <a href="#items" class="nav__link">Items</a>
                    </li>
                    <li class="nav__items">
                        <a href="#party" class="nav__link">Register</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
                <img src="public/assets/img/nav-bat.png" alt="nav image" class="nav__img">
            </div>

            <!-- toggle button -->
             <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-4-fill"></i>
             </div>
        </nav>
    </header>

    <main class="main" id="main">
        <section class="home section" id="home">
            <div class="shape__small"></div>
            <div class="shape__big"></div>
            <div class="home__container container grid">
                <div class="home__data">
                    <h1 class="home__title">
                        <span>Mari Kita</span> Taklukkan Lapangan
                        <img src="public/assets/img/stars.png" alt="home image" class="home__title-img-1">
                        <img src="public/assets/img/stars.png" alt="home image" class="home__title-img-2">
                    </h1>

                    <p class="home__description">
                        SPORTTI-22 adalah tempat di mana semangat olahraga Anda hidup dan berkembang. 
                        Mari bergabung bersama kami untuk menciptakan momen-momen luar biasa di setiap 
                        langkah perjalanan Anda!
                    </p>

                    <a href="#" class="button">Explore Now!!</a>
                </div>

                <img src="public/assets/img/Sports.png" alt="home image" class="home__img">

                <img src="public/assets/img/home-tree1.png" alt="home image" class="home__tree-1">
                <img src="public/assets/img/home-tree2.png" alt="home image" class="home__tree-2">
            </div>
        </section>

        <section class="category section">
            <div class="shape__small"></div>
            <h2 class="section__title">
                Choose your <br>
                spooky category
            </h2>

            <div class="category__container container grid">
                <div class="category__card">
                    <img src="public/assets/img/anak.png" alt="category image" class="category__img">
                    <h3 class="category__title">Anak-anak</h3>
                    <p class="category__description">
                        Dunia olahraga yang menyenangkan untuk anak-anak. Jadikan mereka aktif, ceria, dan percaya diri
                    </p>
                    <img src="public/assets/img/stars.png" alt="category image" class="category__star">
                </div>

                <div class="category__card">
                    <img src="public/assets/img/remaja.png" alt="category image" class="category__img">
                    <h3 class="category__title">Remaja</h3>
                    <p class="category__description">
                        Energi tak terbatas, semangat tak terkalahkan! Pilihan olahraga untuk remaja yang siap menghadapi dunia.
                    </p>
                    <img src="public/assets/img/stars.png" alt="category image" class="category__star">
                </div>

                <div class="category__card">
                    <img src="public/assets/img/dewasa.png" alt="category image" class="category__img">
                    <h3 class="category__title">Dewasa</h3>
                    <p class="category__description">
                        Tetap aktif, tetap bugar! Pilihan olahraga terbaik untuk dewasa, baik pemula maupun profesional.
                    </p>
                    <img src="public/assets/img/stars.png" alt="category image" class="category__star">
                </div>
            </div>
        </section>

        <section class="about section" id="about">
            <div class="shape__small"></div>
            <div class="shape__big"></div>
            <div class="about__container container grid">
                <div class="about__data">
                    <h2 class="section__title">
                        Olahraga untuk Semua,  <br>
                        Kapan Saja
                    </h2>
                    <p class="about__description">
                        SPORTTI-22 menyediakan ruang bagi setiap individu untuk bergerak, bermain, dan berkembang. 
                        Baik untuk anak-anak, remaja, maupun dewasa, kami hadir untuk menciptakan pengalaman olahraga 
                        yang tak terlupakan. 
                    </p>
                    <a href="public/crud.php" class="button">Crud Data!!</a>
                </div>

                <img src="public/assets/img/about.png" alt="about image" class="about__img">
            </div>
        </section>

        <section class="items section" id="items">
            <div class="shape__big"></div>
            <h2 class="section__title">
                Select Your <br>
                Lost item
            </h2>
            <div class="items__container container grid">
                <article class="items__card">
                    <img src="public/assets/img/Table tennis.png" alt="items image" class="items__img">

                    <h3 class="items_name">Tennis Meja</h3>
                    <span class="items__price">20k/Team</span>

                    <button class="items__button">
                        <i class="ri-heart-3-line"></i>
                    </button>
                </article>

                <article class="items__card">
                    <img src="public/assets/img/Football.png" alt="items image" class="items__img">

                    <h3 class="items_name">Futsal</h3>
                    <span class="items__price">150k/Team</span>

                    <button class="items__button">
                        <i class="ri-heart-3-line"></i>
                    </button>
                </article>

                <article class="items__card">
                    <img src="public/assets/img/Basketball.png" alt="items image" class="items__img">

                    <h3 class="items_name">Basket</h3>
                    <span class="items__price">80k/Team</span>

                    <button class="items__button">
                        <i class="ri-heart-3-line"></i>
                    </button>
                </article>

                <article class="items__card">
                    <img src="public/assets/img/Badminton.png" alt="items image" class="items__img">

                    <h3 class="items_name">Badminton</h3>
                    <span class="items__price">50k/Team</span>

                    <button class="items__button">
                        <i class="ri-heart-3-line"></i>
                    </button>
                </article>

                <article class="items__card">
                    <img src="public/assets/img/Volleyball.png" alt="items image" class="items__img">

                    <h3 class="items_name">Bola Voli</h3>
                    <span class="items__price">70k/Team</span>

                    <button class="items__button">
                        <i class="ri-heart-3-line"></i>
                    </button>
                </article>
            </div>
        </section>

        <section class="party section" id="party">
            <div class="party__container container grid">
                <div class="party__data">
                    <h2 class="section__title">
                        Pendaftaran Mudah, <br>
                        Manfaat Luar Biasa 
                    </h2>
                    <p class="party__description">
                        Hanya butuh beberapa menit untuk bergabung dan menikmati manfaat dari program olahraga kami. Mulai hari ini, tingkatkan kualitas hidup Anda bersama SPORTTI-22!
                    </p>
                    <a href="public/pendaftaran_lomba.php" class="button">Register Now!!!</a>
                </div>
                <div class="party__images">
                    <img src="public/assets/img/register.png" alt="party image" class="party__img">
                    <img src="public/assets/img/stars.png" alt="party image" class="party__star-1">
                    <img src="public/assets/img/stars.png" alt="party image" class="party__star-2">
                </div>
            </div>
        </section>
    </main>

    <footer class="footer section">
        <div class="shape__small"></div>
        <div class="shape__big"></div>
        <div class="footer__container container grid">
            <div>
                <a href="#" class="footer__logo">
                    <img src="public/assets/img/logo-skull.png" alt="logo image">
                    Halloween
                </a>
                <p class="footer__description">
                    Enjoy the spookies <br>
                    night of your life.
                </p>
            </div>
            <div class="footer__content">
                <div>
                    <h3 class="footer__title">About Us</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">About Us</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Features</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">News & Blog</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title">Services</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Pricing</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Discount</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">end a gift</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title">Company</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Blog</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Celebration</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">About</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title">Social Media</h3>

                    <ul class="footer__social">
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                            <i class="ri-facebook-circle-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://www.twitter.com/" target="_blank" class="footer__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </ul>
                </div>
            </div>
            <img src="public/assets/img/footer-tree1.png" alt="footer image" class="footer__tree-1">
            <img src="public/assets/img/footer-tree2.png" alt="footer image" class="footer__tree-2">
        </div>
        <span class="footer__copy">
            Copyright &#169; SportTI-22. All rights reserved
        </span>
    </footer>

    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>

    <script src="public/assets/js/scrollreveal.min.js"></script>

    <script src="public/assets/js/main.js"></script>
</body>
</html>