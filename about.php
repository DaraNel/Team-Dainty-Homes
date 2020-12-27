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
        <div class="nav bd-container transparent z-depth-0">
            <a href="#" class="nav__logo">dAiNtY HOMES</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="index.php" class="nav__link ">Home</a></li>
                    <li class="nav__item"><a href="about.php" class="nav__link active-link">About</a></li>
                    <li class="nav__item"><a href="properties.php" class="nav__link">Properties</a></li>
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

    <section class="bd-container about section">
        <div class="more-space">
            <h2 class="section-subtitle ">About Us</h2>
            <div class="row">
                <div class="col s12 m6 l6">
                    <div class="card card-background large z-depth-5">
                        <div class="card-image">
                            <img src="assets/img/house1.jpg" alt="">
                        </div>
                        <div class="card-image">
                            <img src="assets/img/house3.jpg" alt="">
                        </div>
                    </div>
                </div> 
                <div class="col s12 m6 l6">
                    <div class="card large card-background z-depth-5">
                        <div class="card-content">
                                <h4>Our Mision</h4>
                        
                            <p class="about__description about-text">Dainty Homes is a housing site that offers <br> very
                                flexible payment plans. We offer the best payments plans for everyone
                                depending on their income. We have created a housing
                                scheme that lets big organizations from banks to real estate companies, to humanitarian
                                organizations partner
                                with us to take care of your accommodation while you pay an affordable percentage from
                                whatever you earn, so that you are not homeless because you do not have bulk money to
                                rent a
                                place. 
                                Dainty Homes was borne out of the need to reduce and eventually eradicate the poor
                                housing
                                situation in Nigeria and is the first of its kind in Nigeria. </p>
                            
                        </div><br>
                        <div class="contact__button center btn-space">
                            <a href="index.php" class="button">Back to Home</a>
                        </div>
                        
                    </div>
                </div>
            </div>
    
        </div>
    </div>
    </section>


    

<?php
include'footer.php';
?>
