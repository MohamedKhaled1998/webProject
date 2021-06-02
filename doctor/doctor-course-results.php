<?php
include('../Examination.php');
$title = "Results";
$content = "No Data Found";
if(isset($_GET["course"]))
{
  if(isset($_SESSION["username"]))
  {
    $title = $_GET["course"]." Results";
    $sql = "select * from results where course_name='".$_GET["course"]."'";
    //echo $sql;
    $row = getrows($sql);
    $first = 1;
    while($result = $row->fetch_assoc())
    {
      if($first)
        $content = "";
      $first = 0;
      $content .="
                    <tr>
                    <td>".$result["student"]."</td>
                    <td>".$result["period"]."</td>
                    <td>".$result["student_score"]."</td>
                    <td><a href='doctor_reviewAnswers.php?results_id=".$result["results_id"]."' class='fas fa-eye'></a></td>
                  </tr>";
    }
  }
  else
  {
    redirect("../login.php");
  }
}
else
{
    redirect("Doctor-main-page.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="initial-scale=1.0,width=device-width" />
    <link rel="stylesheet" href="../css/mainStyle.css" />
    <link rel="stylesheet" href="../css/tableStyle.css" />
    <link rel="stylesheet" href="../css/doctor/mediaQuery_doctorResultsTableStyle.css">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
      integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk"
      crossorigin="anonymous"
    />
    <title>CC123 results</title>
  </head>

  <body>
    <div class="grid-container">
      
      <!-- 🟢 start nav-->
      <div class="item-a bg-dark">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <div class="container">
            <a class="navbar-brand" href="home.html"
              ><img
                src="../images/logo_navbar.png"
                width="30"
                height="30"
                class="d-inline-block align-top"
              />
              AAST Exam System
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbarNav" class="collapse navbar-collapse text-center">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link fas fa-university" href="home.html">
                    Home</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link fas fa-pen-square" href="exams.html">
                    Exams</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link fas fa-question-circle"
                    href="questions_bank.html"
                  >
                    Questions Bank</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link fas fa-poll active" href="results.html">
                    Results</a
                  >
                </li>
                <li class="nav-item nav-link">
                  <div class="line"></div>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link fas fa-sign-out-alt"
                    href="../login.php"
                    onClick="logoutFunction()"
                  >
                    Logout</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <!-- 🔴 end nav-->

      <!-- 🟢 start main-->
      <main class="item-b">
        <div class="shadow mainPadding">
            <h3 class="text-muted"><?php echo $_GET["course"] ?> | Review</h3>
          <table id="table" class="caption-top">
            <thead>
              <tr>
                <th>Student Name</th>
                <th>Period</th>
                <th>Score</th>
                <th>Preview</th>
              </tr>
            </thead>
            <tbody>
              <?php echo $content; ?>
            </tbody>
          </table>
        </div>
      </main>
      <!-- 🔴 end main-->

      <!-- 🟢 start footer-->
      <footer class="item-c bg-dark p-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <img src="../images/logo_footer.png" />
              <p class="text-light">
                AASTMT is now providing many educational tracks in terms of high
                quality and diversity of service in order to harmonize with the
                dynamic development.
              </p>
            </div>
            <div class="col-lg-3 col">
              <h5 class="text-uppercase text-light">FOLLOW US</h5>
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="https://www.facebook.com/pages/AAST/1463704063876547"
                    >Facebook</a
                  >
                </li>
                <li><a href="https://twitter.com/AASTMTeg">Twitter</a></li>
                <li>
                  <a
                    href="https://www.instagram.com/arab_academy_official/?hl=en"
                    >Instagram</a
                  >
                </li>
                <li>
                  <a href="https://www.youtube.com/user/aastvideo/videos"
                    >YouTube</a
                  >
                </li>
                <li>
                  <a
                    href="https://www.linkedin.com/school/arab-academy-for-science-and-technology-and-maritime-transport/"
                    >Linkedin</a
                  >
                </li>
              </ul>
            </div>
            <div class="col-lg-3 col">
              <h5 class="text-uppercase text-light">QUICK LINKS</h5>
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="https://staffportal.aast.edu/">Staff Portal</a>
                </li>
                <li>
                  <a href="https://studentportal.aast.edu/">Student Portal</a>
                </li>
                <li>
                  <a
                    href="https://aastmtic2.aast.edu/certifications/certification.aspx"
                    >Certificates Verification</a
                  >
                </li>
                <li>
                  <a href="http://www.aast.edu/en/contacts/contact-us.php"
                    >Contact Us</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
      <!-- 🔴 end footer-->
      
    </div>
    <script src="../js/main/bootstrap.bundle.min.js"></script>
  </body>
</html>
