<?php
session_start();
  $email = '';
  $password = '';
  $errors = array();
  $db = mysqli_connect('localhost','zeusprime','Hemanth@1711','user_info');
  if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($db, $_POST['emailId']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    
    if(empty($email)){
      array_push($errors, "Email is required");
    }
    if(empty($password)){
      array_push($errors, "Password is required");
    }
    
    $sql = "SELECT * FROM user_login WHERE email='$email'";
    $_SESSION["email"] = $email;
    $result=mysqli_query($db,$sql);
    $count = mysqli_num_rows($result);
    if($count == 0){
        array_push($errors, 'Incorrect password');
        $_SESSION['errors'] = $errors;
        array_push($errors, "User does not exist");
    }
    if(count($errors)==0){
      // $sql = "SELECT password FROM user_login WHERE email='$email'";
      // $result=mysqli_query($db,$sql);
      
      
        $row = mysqli_fetch_array($result);
        $stored_pass = $row['password'];
        if(password_verify($password, $stored_pass)){
          header('Location: courseList.html');
        }else {
            array_push($errors, 'Incorrect password');
            $_SESSION['errors'] = $errors;
            header('Location: index.php');
        }
    }
  }
?>