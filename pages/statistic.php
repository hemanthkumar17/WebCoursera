<?php
    $ajax = 'NA';
    $java = 'NA';
    $javascript = 'NA';
    $python = 'NA';
    $css = 'NA';
    $html = 'NA';
    $db = mysqli_connect('localhost','zeusprime','Hemanth@1711','user_info');
    $result1 = mysqli_query($db,"SELECT * FROM reg WHERE coursename='ajax'");
    if($result1){
        $ajax =  mysqli_num_rows($result1);
    }
    $result2 = mysqli_query($db,"SELECT * FROM reg WHERE coursename='css'");
    if($result2){
        $css =  mysqli_num_rows($result2);
    }
    $result3 = mysqli_query($db,"SELECT * FROM reg WHERE coursename='java'");
    if($result3){
        $java =  mysqli_num_rows($result3);
    }
    $result4 = mysqli_query($db,"SELECT * FROM reg WHERE coursename='javascript'");
    if($result4){
        $javascript =  mysqli_num_rows($result4);
    }
    $result5 = mysqli_query($db,"SELECT * FROM reg WHERE coursename='html'");
    if($result5){
        $html =  mysqli_num_rows($result5);
    }
    $result6 = mysqli_query($db,"SELECT * FROM reg WHERE coursename='python'");
    if($result6){
        $python =  mysqli_num_rows($result6);
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stats.css">
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
        <h1 class="stats-text2">Stats</h1>
        <div class="container pt-5">
            <div class="row text-center">
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
    <div class="container">
        <h1 class="stats-text2 pb-3">Students enrolled</h1>

        <?php
            if (mysqli_num_rows($result1) > 0) {?>
            <h2 class="stats-text3">AJAX</h2>
            <ul class="text-center">
            <?php
                while($rowData = mysqli_fetch_array($result1)){
                ?>
                <li class="stats-text">
                <?php
                    $email = $rowData["email"];
                    $result = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM user_login WHERE email='$email'"));
                    echo $result["name"];
                ?>
                </li>
                <?php
                }
            ?>
            </ul>
            <?php
            }
        ?>

<?php
            if (mysqli_num_rows($result2) > 0) {?>
            <h2 class="stats-text3">CSS</h2>
            <ul class="text-center">
            <?php
                while($rowData = mysqli_fetch_array($result2)){
                ?>
                <li class="stats-text">
                <?php
                    $email = $rowData["email"];
                    $result = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM user_login WHERE email='$email'"));
                    echo $result["name"];
                ?>
                </li>
                <?php
                }
            ?>
            </ul>
            <?php
            }
        ?><?php
        if (mysqli_num_rows($result3) > 0) {?>
        <h2 class="stats-text3">JAVA</h2>
        <ul class="text-center">
        <?php
            while($rowData = mysqli_fetch_array($result3)){
            ?>
            <li class="stats-text">
            <?php
                echo $rowData["email"].'<br>';
            ?>
            </li>
            <?php
            }
        ?>
        </ul>
        <?php
        }
    ?>
    <?php
            if (mysqli_num_rows($result4) > 0) {?>
            <h2 class="stats-text3">JAVASCRIPT</h2>
            <ul class="text-center">
            <?php
                while($rowData = mysqli_fetch_array($result4)){
                ?>
                <li class="stats-text">
                <?php
                    $email = $rowData["email"];
                    $result = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM user_login WHERE email='$email'"));
                    echo $result["name"];
                ?>
                </li>
                <?php
                }
            ?>
            </ul>
            <?php
            }
        ?>
        <?php
            if (mysqli_num_rows($result5) > 0) {?>
            <h2 class="stats-text3">HTML</h2>
            <ul class="text-center">
            <?php
                while($rowData = mysqli_fetch_array($result5)){
                ?>
                <li class="stats-text">
                <?php
                    $email = $rowData["email"];
                    $result = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM user_login WHERE email='$email'"));
                    echo $result["name"];
                ?>
                </li>
                <?php
                }
            ?>
            </ul>
            <?php
            }
        ?>
        <?php
            if (mysqli_num_rows($result6) > 0) {?>
            <h2 class="stats-text3">PYTHON</h2>
            <ul class="text-center">
            <?php
                while($rowData = mysqli_fetch_array($result6)){
                ?>
                <li class="stats-text">
                <?php
                    $email = $rowData["email"];
                    $result = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM user_login WHERE email='$email'"));
                    echo $result["name"];
                ?>
                </li>
                <?php
                }
            ?>
            </ul>
            <?php
            }
        ?>
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>