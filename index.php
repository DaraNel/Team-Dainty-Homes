<?php
include'header.php';
include'config.php';
?>

<body>
    <!---Scroller icon--->
    <a href="#" class="scrolltop" id="scroll-top">
        <i class='bx bx-chevron-up scrolltop__icon'></i>
    </a>

    <!--header section-->
    <header class="l-header" id="header">
        <div class=" nav bd-container ">
            <img class="logo" src="assets\img\logo.png" alt="" width="100" height="100">

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                    <li class="nav__item"><a href="about.php" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#services" class="nav__link">Services</a></li>
                    <li class="nav__item"><a href="property.php" class="nav__link">Properties</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    <li class="nav__item"><a href="signup.php" class="nav__link">Sign Up</a></li>

                    <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </div>
    </header>



    <main class="l-main">
        <!--hero section-->
        <section class="home background" id="home">
            <div class="home__container bd-container">
                <div class="home__data">

                    <h2 class="home__title ">Find your perfect home without breaking the bank.</h2>
                </div>
                <div class="wrapper ">
                    <input type="text" class="browser-default search " placeholder="Search for choice apartments">
                    <div class="searchbtn"><a href="properties.php"><i class='bx bx-search-alt-2'></i></a></div>
                </div>
                


            </div>
        </section>


        <!--Services -->
        <section class="services section bd-container" id="services">
            <span class="section-subtitle">Why Dainty Homes?</span>
            <h2 class="section-title">Our Amazing Services</h2>

            <div class="services__container  bd-grid">
                <div class="services__content">

                    <svg class="services__img" xmlns="http://www.w3.org/2000/svg" width="64" height="64"
                        viewBox="0 0 24 24" style="fill:#AC3B61;">
                        <path d="M18.991,2H9.01C7.899,2,7,2.899,7,4.01v5.637l-4.702,4.642c-0.289,0.285-0.377,0.717-0.223,
                                1.092 C2.229,15.755,2.595,16,3,16v1.13V21c0,0.553,0.447,1,1,1h7.922H20c0.553,0,1-0.447,1-1V4.009C21,
                                2.899,20.102,2,18.991,2z M10.922,15.111v3.027V20H5v-2.87V15v-0.568l2.987-2.949l2.935,3.003V15.111z 
                                M13,9h-2V7h2V9z M17,17h-2v-2h2V17z M17,13h-2v-2h2 V13z M17,9h-2V7h2V9z">
                        </path>
                        <path d="M7 15H9V17H7z"></path>
                    </svg>

                    <h3 class="services__title">Variety of Homes</h3>
                    <p class="services__description">We offer our clients the very best home choices. No agency
                        problems and no hassles. Rent, buy or shorlet in a few easy steps.
                    </p>
                </div>

                <div class="services__content">
                    <svg class="services__img" xmlns="http://www.w3.org/2000/svg" width="64" height="64"
                        viewBox="0 0 24 24" style="fill: #AC3B61;">
                        <circle cx="12" cy="12" r="4"></circle>
                        <path d="M13,4.069V2h-2v2.069C7.389,4.522,4.523,7.389,4.069,11H2v2h2.069c0.454,
                            3.611,3.319,6.478,6.931,6.931V22h2v-2.069 c3.611-0.453,6.478-3.319,
                            6.931-6.931H22v-2h-2.069C19.478,7.389,16.611,4.522,13,4.069z M12,18c-3.309,
                            0-6-2.691-6-6s2.691-6,6-6 s6,2.691,6,6S15.309,18,12,18z"></path>
                    </svg>

                    <h3 class="services__title">Location</h3>
                    <p class="services__description">We are location friendly and will
                        find you a home regardless of where you stay.
                    </p>
                </div>

                <div class="services__content">
                    <svg class="services__img" xmlns="http://www.w3.org/2000/svg" width="64" height="64"
                        viewBox="0 0 24 24" style="fill: #AC3B61;">
                        <path d="M21,4H3C2.447,4,2,4.447,2,5v14c0,0.553,
                        0.447,1,1,1h18c0.553,0,1-0.447,1-1V5C22,4.447,21.553,4,21,4z M20,15 c-1.657,0-3,1.343-3,
                        3H7c0-1.657-1.343-3-3-3V9c1.657,0,3-1.343,3-3h10c0,1.657,1.343,3,3,3V15z"></path>
                        <path d="M12,8c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S14.206,8,12,8z M12,14c-1.103,
                        0-2-0.897-2-2s0.897-2,2-2s2,0.897,2,2 S13.103,14,12,14z"></path>
                    </svg>

                    <h3 class="services__title">Affordable</h3>
                    <p class="services__description">We offer our clients the ability to live comfortably
                        and on a minimal budget..</p>
                </div>
            </div>
        </section>

        <!--Newly added properties-->
        <section class="menu section bd-container">
            <span class="section-subtitle">Hot Deals</span>
            <h2 class="section-title">Newly Added Properties</h2>

            <div class="row">
                <div class="col s12 m4 l4">
                    <div class="card ">
                        <div class="card-image waves-effect">
                            <img src="assets/img/house3.jpg" alt="image of a house" >
                        </div>
                        <div class="card-content menu__content">
                            <span class="menu__detail white-text">Lekki, Lagos, Nigeria</span>
                            <span class="menu__price white-text">₦1 million</span>
                            <span class="menu__price white-text">Installmental Pay: Available</span>
                            <a href="#" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4 l4">
                    <div class="card ">
                        <div class="card-image waves-effect">
                            <img src="assets/img/house4.jpg" alt="">
                        </div>
                        <div class="card-content menu__content">
                            <span class="menu__detail white-text">Lekki, Lagos, Nigeria</span>
                            <span class="menu__price white-text">₦1 million</span>
                            <span class="menu__price white-text">Installmental Pay: Available</span>
                            <a href="#" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4 l4">
                    <div class="card ">
                        <div class="card-image waves-effect">
                            <img src="assets/img/house9.jpg" alt="image of a house" >
                        </div>
                        <div class="card-content menu__content">
                            <span class="menu__detail white-text">Lekki, Lagos, Nigeria</span>
                            <span class="menu__price white-text">₦1 million</span>
                            <span class="menu__price white-text">Installmental Pay: Available</span>
                            <a href="#" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="btn-con">
                <a href="properties.php" class="button">View all properties</a>

            </div>
        </section>

        <!--===== Hot deals =======-->
        <section class="app section bd-container">
            <div class="app__container bd-grid">
                <div class="app__data">
                    <span class="section-subtitle app__initial">HOT</span>
                    <h2 class="section-title app__initial">Deal of the day!!</h2>
                    <p class="app__description">Own this beautiful home located in one of the most serene
                        environments in Nigeria's capital, Abuja. Get this for over 50% off. <br>
                        <a href="#signup" class="nav__link">Sign up</a> to get this</p>
                </div>

                <img src="assets/img/house6.jpg" alt="image of a house" class="app__img">
            </div>
        </section>

        <!--========== CONTACT US ==========-->
        <section class="contact section bd-container" id="contact">
            <div class="contact__container bd-grid">
                <div class="contact__data">
                    <span class="section-subtitle contact__initial">We are here for you.</span>
                    <h2 class="section-title contact__initial">Contact us</h2>
                    <p class="contact__description">Dear customer, we are here for you 24/7. <br>
                        Feel free to call our customer care centers <br> or leave a message on any of our channels.</p>
                </div>

                <div class="contact__button">
                    <a href="tel: 123 456 789" class="button">Contact us now</a>
                </div>
            </div>
        </section>
    </main>

<?php
include'footer.php';
?>

   