<?php
include'header.php';
include'config.php';

    if(isset($_POST['submit']))
    {
        $username = mysqli_real_escape_string( $conn, $_POST['username']);
        $password =mysqli_real_escape_string( $conn, $_POST['password']);
  
  

        $sel = "SELECT *
                        FROM signup
                        WHERE username = '$username'
                        AND password = '$password'";
                        
        $sel_query = mysqli_query($conn, $sel);
        
        $data = mysqli_fetch_array($sel_query);
        if ($data['username'] == $username && $data['password'] == $password){
            
                header("location:dashboard.php");
            }
        else{
            echo "Access denied";
        }
    }   

?>

<section>
<div class="container"><h2 class="#880e4f">Sign In</h2></div>
    <div class="container">
    <div class="row">
    <form class="col s12" method="post" action="login.php">
    <div class="row">
    <div class="input-field col s12">
        <input placeholder="Username" name="username" type="text" class="validate">
        <label class="active" for="first_name">Enter username</label>
    </div>
    
    <div class="input-field col s12">
        <input placeholder="Enter Password" name="password" type="password" class="validate">
        <label class="active" for="password">Password</label>
        <div>
        <button class="waves- btn-large pink darken-4" type="submit" name="submit">Log In</button>
        </div>
    </div>
    </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    </section>
