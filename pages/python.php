<?php
include '../session.php';

$_SESSION['coursename'] = "python";
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
        <h1>PYTHON</h1>

        <h2 class="reference">Reference Material</h2>
        <div class="link-courses">
          <div class="card js-nested-link">
            <h2 class="card__block">Python Docs</h2>
            <img
              class="card__image"
              src="https://www.cvitnigeria.com/wp-content/uploads/2017/08/newpythonlogo.png"
            />
            <p class="card__block">
              Python official documentation is available on python dot org
              website
            </p>
            <div class="card__block">
              <a href="https://docs.python.org/" class="card__link"
                >Read more
              </a>
            </div>
          </div>
          <div class="card js-nested-link">
            <h2 class="card__block">W3 Schools</h2>
            <img
              class="card__image"
              src="https://www.cvitnigeria.com/wp-content/uploads/2017/08/newpythonlogo.png"
            />
            <p class="card__block">
              W3 Schools documentation is also famous, And is also used by lot
              of developers
            </p>
            <div class="card__block">
              <a href="https://www.w3schools.com/python/" class="card__link"
                >Read more
              </a>
            </div>
          </div>
          <div class="card js-nested-link">
            <h2 class="card__block">Tutorialspoint</h2>
            <img
              class="card__image"
              src="https://www.cvitnigeria.com/wp-content/uploads/2017/08/newpythonlogo.png"
            />
            <p class="card__block">
              Tutorials Point is similar to w3 schools and popular among
              developers
            </p>
            <div class="card__block">
              <a
                href="https://www.tutorialspoint.com/python/index.htm"
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
                src="https://www.youtube.com/embed/kqtD5dpn9C8"
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
                src="https://www.youtube.com/embed/rfscVS0vtbw"
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
                src="https://www.youtube.com/embed/WGJJIrtnfpk"
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
    <script src="../js/python.js"></script>
  </body>
</html>
