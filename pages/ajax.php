<?php
include '../session.php';

$_SESSION['coursename'] = "ajax";
$db = mysqli_connect('localhost','zeusprime','Hemanth@1711','user_info');
$email = mysqli_real_escape_string($db, $_SESSION['email']);
$coursename = $_SESSION['coursename'];
$query = "select count(*) from reg where email='$email' and coursename='$coursename';";
$results = mysqli_query($db, $query);
$number_of_courses = mysqli_fetch_array($results);
if ($number_of_courses[0] == 0) {
    $_SESSION['stringenroll'] = "Enroll the course";
}
else {
    $_SESSION['stringenroll'] = "Complete course";
}
    function getbutton(){
  $string = $_SESSION['stringenroll'];
  echo "<input type='submit' name='coursename' value='$string' class='card__link' />";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Login Page" />
    <meta name="author" content="Emmanuel, omar1024, hemanthkumar" />
    <title>Coursera</title>
    <link rel="icon" href="../src/icon.png" />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/course.css" />
  </head>
  <body>
    <center>
      <div class="course-page">
        <input type="image" class="homeimg" src="../src/icon.png" name="home" onclick="document.location.href='../courseList.html'" />
        <h1>AJAX</h1>

        <h2 class="reference">Reference Material</h2>
        <div class="link-courses">
          <div class="card js-nested-link">
            <h2 class="card__block">MDN Docs</h2>
            <img
              class="card__image"
              src="https://upload.wikimedia.org/wikipedia/commons/a/a1/AJAX_logo_by_gengns.svg"
            />
            <p class="card__block">
              Morzilla Wev Docs are standard documentation for all web related
              queries
            </p>
            <div class="card__block">
              <a
                href="https://developer.mozilla.org/en-US/docs/Web/Guide/AJAX"
                class="card__link"
                >Read more
              </a>
            </div>
          </div>
          <div class="card js-nested-link">
            <h2 class="card__block">W3 Schools</h2>
            <img
              class="card__image"
              src="https://upload.wikimedia.org/wikipedia/commons/a/a1/AJAX_logo_by_gengns.svg"
            />
            <p class="card__block">
              W3 Schools documentation is also famous, And is also used by lot
              of developers
            </p>
            <div class="card__block">
              <a
                href="https://www.w3schools.com/js/js_ajax_intro.asp"
                class="card__link"
                >Read more
              </a>
            </div>
          </div>
          <div class="card js-nested-link">
            <h2 class="card__block">CMS docs</h2>
            <img
              class="card__image"
              src="https://upload.wikimedia.org/wikipedia/commons/a/a1/AJAX_logo_by_gengns.svg"
            />
            <p class="card__block">
              Winter CMS documentation is one of the famous documentation out
              there for Ajax
            </p>
            <div class="card__block">
              <a
                href="https://wintercms.com/docs/ajax/introduction"
                class="card__link"
                >Read more
              </a>
            </div>
          </div>
        </div>
        <h2 class="vid">Videos</h2>
        <div class="select">
          <select name="duration" id="duration">
            <option value="all">All</option>
            <option value="short">Short</option>
            <option value="medium">Medium</option>
            <option value="long">Long</option>
          </select>
        </div>
        <div class="iframes" id="iframes">
          <div class="iframe-div">
            <div class="iframe">
              <iframe
                width="300"
                height="200"
                src="https://www.youtube.com/embed/tHRNuBf_8xg"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
            </div>
            <div class="input-checkbox">
              <input id="checkbox-1" type="checkbox" class="check-box" /><label
                class="checkbox"
                for="checkbox-1"
                >Toggle</label
              >
            </div>
          </div>
          <div class="iframe-div">
            <div class="iframe">
              <iframe
                class="iframe"
                width="300"
                height="200"
                src="https://www.youtube.com/embed/rJesac0_Ftw"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
            </div>
            <div class="input-checkbox">
              <input id="checkbox-2" type="checkbox" class="check-box" /><label
                class="checkbox"
                for="checkbox-2"
                >Toggle</label
              >
            </div>
          </div>

          <div class="iframe-div">
            <div class="iframe">
              <iframe
                class="iframe"
                width="300"
                height="200"
                src="https://www.youtube.com/embed/82hnvUYY6QA"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
            </div>
            <div class="input-checkbox">
              <input id="checkbox-3" type="checkbox" class="check-box" /><label
                class="checkbox"
                for="checkbox-3"
                >Toggle</label
              >
            </div>
          </div>
          <div class="card__block">
            <form method="post" action="../courses.php">
              <?php getbutton()?>
            </form>
          </div>
        </div>
      </div>
    </center>
    <footer class="footer">
      <a href="./tnc.html">Terms of use</a>
      |
      <a href="./privacy.html">Privacy Policy</a>
      |
      <a href="./about_us.html">About Us</a>
      |
      <a href="https://wa.me/8220710221">Help and Support</a>
      |
      <a href="https://wa.me/8220710221">Contact Us</a>
    </footer>
    <script src="../js/ajax.js"></script>
  </body>
</html>
