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

<section>    
<div class="container">
    <div class="row">
    <form class="col s12" action="signup.php" method="post" enctype="multipart/form-data">
    <br>
    <br>
    <h2 class="indigo-text">Sign Up</h2>
      <div class="row">
        <div class="input-field col s12">
          <input id="first_name" type="text" name="firstname" class="validate">
          <label for="first_name">First Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="last_name" type="text" name="lastname" class="validate">
          <label for="last_name">Last Name</label>
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
          <input id="password" type="password" name="password">
          <label for="password">Password</label>
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
          <input id="number" type="number" name="phonenumber" class="validate">
          <label for="number">Phone Number</label>
        </div>
      </div>
      <div class="file-field input-field">
      <div class="btn indigo">
        <span>File</span>
        <input type="file" multiple>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload one or more files">
      </div>
      <br>
      
      <button class="waves-effect waves-light btn-large indigo" type="submit" name="register">Register</button>
    </div>
    </div>
    </div>
    </form>
  </div>
</div>   
</section>


