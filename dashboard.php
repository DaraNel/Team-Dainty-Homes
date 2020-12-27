<?php
include'header.php';
include'config.php';
?>

 <section class="row">

        <aside class="col s3 navigation">
            <div class=" profile">
                    <span class=" profile-img" >
                        <img src="assets/img/profile.jpg" alt="">
                    </span>
                    <span class="right">
                        <p class="black-text">Aisha Olubiyo <span class="badge" style="color: white;">Gold</span ><br><h6><span class="indigo-text" >Dainty Subscriber</span></h6></p>
                    </span>
             </div>
             <div class="row  navbar ">
                 <div class="col s5 nav-item active"><span;"><i class="fas fa-tachometer-alt"></i><p>Dashboard</p></span></div>
                 <div class="col s5  nav-item"><i class="fas fa-table"></i><p class="black-text">Statistics</p>
                </div>
                 <div class="col s5 nav-item"><i class="fas fa-wallet"></i><p class="black-text">Wallet</p></div>
                 <div class="col s5 nav-item"><i class="fas fa-clipboard-check"></i><p class="black-text">To do</p></div>
                 <div class="col s5 nav-item"><i class="fas fa-money-bill-alt"></i><p class="black-text">Loans</p></div>
                 <div class="col s5 nav-item"><i class="fas fa-home"></i><p class="black-text">Properties</p></div>
             </div>
        </aside>
        <div class="col s1"></div>
        <main class="col s8">
            <div class="row">
                <div class="col s8"><h2>My Dashboard</h2></div>
                <div class="col s3">
                    <div class="notification">
                            <span class="noti-wrapper"> <i class="far fa-comment-dots"></i></span><span class="white-text">7 unread messages</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s5 statistic">
                    <div>
                        <h6 class="black-text">December 2020  <i class="fas fa-sort-down"></i></h6>
                    </div>
                    <div>
                        <img src="assets/img/yes.svg" width="300"style="margin: 0 auto;" alt="">
                    </div>
                 </div>
                <div class="col s5 statistic">
                      <div>
                        <h6 class="black-text">December 2020  <i class="fas fa-sort-down"></i></h6>
                    </div>
                    <div>
                        <svg height="150" width="150" viewBox="0 0 20 20">
                        <circle r="10" cx="10" cy="10" fill="#123C69" />
                        <circle r="5" cx="10" cy="10" fill="transparent"
                                stroke="#880e4f"
                                stroke-width="10"
                                stroke-dasharray="calc(35 * 31.4 / 100) 31.4"
                                transform="rotate(-90) translate(-20)" />
                        </svg><span>₦10 Million Naira Spent</span>
                    </div>
                </div>
            </div>
            <br>
            <h3>Discount Listing</h3>
            <br>
                <div class="row">
                    <div class="col s4">
                        <div class="row">
                            <div class="col s12 ">
                                <div class="card">
                                    <div class="card-image">
                                    <img src="assets/img/service bg 3.jpg">
                                    <span class="card-title">Luxury</span>
                                    </div>
                                    <div class="card-content">
                                    <h6 class="black-text">Lekki, Lagos, Nigeria</h6>
                                    <p class="black-text">₦20 Million Naira (20% Off)</p>
                                    </div>
                                    <div class="card-action">
                                    <a href="#">Click to view more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s4">
                             <div class="card">
                                    <div class="card-image">
                                    <img src="assets/img/house pic 1.jpg">
                                    <span class="card-title">Modern</span>
                                    </div>
                                    <div class="card-content">
                                    <h6 class="black-text">Maryland, Lagos, Nigeria</h6>
                                    <p class="black-text">₦1 Million Naira (20% Off)</p>
                                    </div>
                                    <div class="card-action">
                                    <a href="#">Click to view more</a>
                                    </div>
                                </div>
                    </div>
                    <div class="col s4">
                             <div class="card">
                                    <div class="card-image">
                                    <img src="assets/img//luxury.jpg">
                                    <span class="card-title ">Luxury</span>
                                    </div>
                                    <div class="card-content">
                                    <h6 class="black-text">Surulere, Lagos, Nigeria</h6>
                                    <p class="black-text">₦10 Million Naira (20% Off)</p>
                                    </div>
                                    <div class="card-action">
                                    <a href="#">Click to view more</a>
                                    </div>
                                </div>
                    </div>
                </div>
        </main>
    </section>
<?php
include'footer.php';
?>