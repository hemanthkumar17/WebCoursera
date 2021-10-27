<?php
include 'session.php';
error_log(print_r($_SESSION['stringenroll'], TRUE));

if(!strcmp($_SESSION['stringenroll'], "Enroll the course")){
    $db = mysqli_connect('localhost','zeusprime','Hemanth@1711','user_info');
    $email = mysqli_real_escape_string($db, $_SESSION['email']);
    $coursename = $_SESSION['coursename'];
    $query = "insert into reg (`email`, `coursename`) values ('$email', '$coursename');";
    error_log(print_r($query, TRUE));
    $mysql = mysqli_query($db, $query);
    error_log(print_r($mysql, TRUE));
    header("location: /pages/$coursename".".php");
}
else{
if(isset($_SESSION['coursename'])){
    $db = mysqli_connect('localhost','zeusprime','Hemanth@1711','user_info');
    $email = mysqli_real_escape_string($db, $_SESSION['email']);
    $coursename = $_SESSION['coursename'];

    mysqli_query($db, "DELETE FROM reg WHERE email='$email' AND coursename='$coursename'");
    
    $query = "select count(*) from reg where email='$email';";
    $results = mysqli_query($db, $query);
    $number_of_courses = mysqli_fetch_array($results);
    

    error_log(print_r($number_of_courses[0], TRUE));
    error_log(print_r($number_of_courses[0] == 0, TRUE));

    if ($number_of_courses[0] == 0) {
        error_log(print_r("test", TRUE));
        $query = "DELETE FROM user_login WHERE email='$email'";
        mysqli_query($db, $query);
        unset($_SESSION['coursename']);
        header('location: ./index.php');
        $_SESSION['errors'] = "All courses completed! User deleted...";
    }
    else{
        error_log(print_r($coursename, TRUE));
        header("location: /pages/$coursename".".php");
    }
}}
?>