<?php
    $ajax = 'NA';
    $java = 'NA';
    $javascript = 'NA';
    $python = 'NA';
    $css = 'NA';
    $html = 'NA';
    $db = mysqli_connect('localhost','zeusprime','Hemanth@1711','user_info');
    $result = mysqli_query($db,"SELECT * FROM reg WHERE coursename='ajax'");
    if($result){
        $ajax =  mysqli_num_rows($result);
    }
    $result = mysqli_query($db,"SELECT * FROM reg WHERE coursename='css'");
    if($result){
        $css =  mysqli_num_rows($result);
    }
    $result = mysqli_query($db,"SELECT * FROM reg WHERE coursename='java'");
    if($result){
        $java =  mysqli_num_rows($result);
    }
    $result = mysqli_query($db,"SELECT * FROM reg WHERE coursename='javascript'");
    if($result){
        $javascript =  mysqli_num_rows($result);
    }
    $result = mysqli_query($db,"SELECT * FROM reg WHERE coursename='html'");
    if($result){
        $html =  mysqli_num_rows($result);
    }
    $result = mysqli_query($db,"SELECT * FROM reg WHERE coursename='python'");
    if($result){
        $python =  mysqli_num_rows($result);
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stats.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/875f2af2ec.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
         $(document).ready(function($) {
        $('.count-number').counterUp({
            delay: 10,
            time: 10000
        });
    });
    </script>
    <title>WebCousera</title>
</head>
<body>
<section id="statistic" class="statistic-section one-page-section">
        <div class="container pt-5">
            <div class="row text-center pb-5 pt-5">
                <div class="col-xs-12 col-md-4">
                    <div class="counter">
                        <!-- <i class="fa fa-code fa-2x stats-icon"></i> -->
                        <h2 class="timer count-title count-number"><?php echo $ajax ?></h2>
                        <div class="stats-line-black"></div>
                        <p class="stats-text">Ajax</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="counter">
                        <!-- <i class="fa fa-css3-alt fa-2x stats-icon"></i> -->
                        <h2 class="timer count-title count-number"><?php echo $css ?></h2>
                        <div class="stats-line-black"></div>
                        <p class="stats-text">CSS</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="counter">
                        <!-- <i class="fa fa-html5 fa-2x stats-icon"></i> -->
                        <h2 class="timer count-title count-number"><?php echo $html ?></h2>
                        <div class="stats-line-black"></div>
                        <p class="stats-text">HTML</p>
                    </div>
                </div>
            </div>
            <div class="row text-center pt-5">
                <div class="col-xs-12 col-md-4">
                    <div class="counter">
                        <!-- <i class="fa fa-java fa-2x stats-icon"></i> -->
                        <h2 class="timer count-title count-number"><?php echo $java ?></h2>
                        <div class="stats-line-black"></div>
                        <p class="stats-text">JAVA</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="counter">
                        <!-- <i class="fa fa-js fa-2x stats-icon"></i> -->
                        <h2 class="timer count-title count-number"><?php echo $javascript ?></h2>
                        <div class="stats-line-black"></div>
                        <p class="stats-text">JAVASCRIPT</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="counter">
                        <!-- <i class="fa fa-python fa-2x stats-icon"></i> -->
                        <h2 class="timer count-title count-number"><?php echo $python ?></h2>
                        <div class="stats-line-black"></div>
                        <p class="stats-text">PYTHON</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>