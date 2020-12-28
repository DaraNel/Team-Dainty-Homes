<?php
include'header.php';
include'config.php';

if(isset($_POST['register'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];

              // create sql 
            $sql = "INSERT INTO signup(firstname,lastname,username,password,email,phonenumber) VALUES('$firstname','$lastname','$username','$password','$email','$phonenumber')";
            
            // save to db and check
            if(mysqli_query($conn, $sql)){
                // success
                header('Location: login.php');
            } else {
                echo 'error: '. mysqli_error($conn);
            }
}

?>
<body>
    <!---Scroller icon--->
    <a href="#" class="scrolltop" id="scroll-top">
        <i class='bx bx-chevron-up scrolltop__icon'></i>
    </a>

    <!--header section-->
    <header>
        <div class=" nav bd-container ">
            <img class="logo" src="assets\img\logo.png" alt="" width="100" height="100">

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="index.php" class="nav__link active-link">Home</a></li>
                    <li class="nav__item"><a href="about.php" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#services" class="nav__link">Services</a></li>
                    <li class="nav__item"><a href="property.php" class="nav__link">Properties</a></li>
                    <li class="nav__item"><a href="dashboard.php" class="nav__link">Dashboard</a></li>
                    <li class="nav__item"><a href="login.php" class="nav__link">Log In</a></li> 

                    <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </div>
    </header>


<section>
<div class="container">
    <div class="row">
    <form class="col s12" action="signup.php" method="post" enctype="multipart/form-data">
    <br>
    <br>
    <h2 class="#880e4f">Sign Up</h2>
      <div class="row">
      <div class="input-field col s6">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="username" type="text" name="username" class="validate">
          <label for="username">Username</label>
        </div>
      </div>              
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" name="password">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="number" type="number" name="phonenumber" class="validate">
          <label for="number">Phone Number</label>
        </div>
      </div>
      <br>
      
      <button class="waves-effect waves-light btn-large pink darken-4" type="submit" name="register">Register</button>
    </div>
    </div>
    </div>
    </form>
  </div>
</div>   
</section>


