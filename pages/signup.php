<?php

  $name = '';
  $email = '';
  $password = '';
  $password_2 = '';
  $errors = array();
  $db = mysqli_connect('localhost','root','','user_info');
  if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['emailId']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    if(empty($name)){
      array_push($errors, "name is required");
    }
    if(empty($email)){
      array_push($errors, "email is required");
    }
    if(empty($password)){
      array_push($errors, "password is required");
    }
    if($password != $password_2){
      array_push($errors, "The passwords do not match");
    }

    if(count($errors)==0){
      $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO user_login (email,name,password) values ('$name','$email','$hashed_pass')";
      mysqli_query($db, $sql);
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Course Exercise" />
    <meta name="author" content="Emmanuel, omar1024, hemanthkumar" />
    <title>Coursera</title>
    <link rel="icon" href="src/icon.png" />
    <link rel="stylesheet" href="../css/login.css" />
    <!-- CSS only -->
  
  </head>
  <body>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
    <form class="form2" method="post" action="signup.php">
      
      <div class="title">WebCoursera</div>
      <div class="subtitle">Sign Up as a Member</div>
      <?php if (count($errors)>0): 
        foreach($errors as $error):?>
        <div class="alert alert-danger" role="alert">
          <?php $error ?>
        </div>
        <?php 
          endforeach;
        endif; ?>
      <div class="input-container ic1">
        <input id="emailId" name="emailId" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="emailId" class="placeholder">Email Id</label>
      </div>
      <!-- <div class="input-container ic2">
        <input
          id="phoneno"
          class="input"
          type="tel"
          pattern="[0-9]{10}"
          placeholder=" "
        />
        <div class="cut-big"></div>
        <label for="phoneno" class="placeholder">Phone Number</label>
      </div> -->
      <div class="input-container ic2">
        <input id="name" name="name" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="name" class="placeholder">Name</label>
      </div>
      <div class="input-container ic2">
        <input id="password" name="password" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="password" class="placeholder">Password</label>
      </div>
      <div class="input-container ic2">
        <input id="password_2" name="password_2" class="input" type="text" placeholder=" " />
        <div class="cut-big"></div>
        <label for="password" class="placeholder">Confirm Password</label>
      </div>
      <button name="submit" type="submit" class="button">Sign Up</button>
</form>
    <!-- <script type="text/javascript">
      document.getElementById("submit").onclick = function () {
        location.href = "../index.html";
      };
    </script> -->
  </body>
</html>
