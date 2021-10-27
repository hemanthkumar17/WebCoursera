<?php
include './session.php';
$errors = $_SESSION['errors'];
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
    <link rel="stylesheet" href="css/login.css" />
    <!-- CSS only -->
  
  </head>
  <body>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
    <form class="form2" method="post" action="./index.php">
      <div class="title">WebCoursera</div>
      <div class="subtitle">Login</div>
      <?php if (count($errors)>0): ?>
        <div class="alert alert-danger" role="alert">
        <?php foreach($errors as $error):?>
          <?php echo $error; ?>
          <br/>
        <?php 
          endforeach;?>
        </div>
        <?php endif; ?>
      <div class="input-container ic12">
        <input id="emailId" name="emailId" class="input" type="email" placeholder=" " />
        <div class="cut"></div>
        <label for="emailId" class="placeholder">Email Id</label>
      </div>
      <div class="input-container ic2">
        <input id="password" name="password" class="input" type="password" placeholder=" " />
        <div class="cut"></div>
        <label for="password" class="placeholder">Password</label>
      </div>
      <button name="submit" type="submit" class="button">Log In</button>
     
    </form>

    <!-- <script type="text/javascript">
      document.getElementById("submit").onclick = function () {
        location.href = "../index.html";
      };
    </script> -->
  </body>
</html>
