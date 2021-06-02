<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="initial-scale=1.0,width=device-width" />
    <link rel="stylesheet" href="../css/mainStyle.css" />
    <link rel="stylesheet" href="../css/sidebar/sidebarStyle.css" />
    <link rel="stylesheet" href="../css/sidebar/stickyElementOnScrollStyle.css" />
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
      integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk"
      crossorigin="anonymous"
    />

    <title>Exam</title>
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
                  <a class="nav-link fas fa-poll" href="results.html">
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
          <div class="examHeader d-flex justify-content-evenly  examHeaderPaddingTopBot">
            <h5><span class="courseName">Operating Systems</span></h5>
            <h5 class="examPeriod">7th Exam</h5>
            <h5 class="timePeriod">Exam Duration: 120mins</h5>
          </div>
          <div class="examHeader timerPaddingTopBot stickyTimer d-flex justify-content-center text-center"><div id="timer"> <h5>Time Remaining: 00:00:00</h5> </div></div>
          <form class="questionform mainPadding">
            <div id="q1">
                <h3>Question will appear here</h3>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q1"
                    value="a1"
                  />
                  <label class="form-check-label" for="q1">answer 1</label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q1"
                    value="a1"
                  />
                  <label class="form-check-label" for="q1">answer 2</label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q1"
                    value="a1"
                  />
                  <label class="form-check-label" for="q1">answer 3</label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q1"
                    value="a1"
                  />
                  <label class="form-check-label" for="q1">answer 4</label>
                </div>  
            </div>
            <hr/>
            <div id="q2">
              <h3>Question will appear here</h3>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q2"
                  value="a1"
                />
                <label class="form-check-label" for="q2">answer 1</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q2"
                  value="a2"
                />
                <label class="form-check-label" for="q2">answer 2</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q2"
                  value="a3"
                />
                <label class="form-check-label" for="q2">answer 3</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q2"
                  value="a4"
                />
                <label class="form-check-label" for="q2">answer 4</label>
              </div>
            </div>
            <hr/>
            <div id="q3">
              <h3>Question will appear here</h3>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q3"
                  value="a1"
                />
                <label class="form-check-label" for="q3">answer 1</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q3"
                  value="a2"
                />
                <label class="form-check-label" for="q3">answer 2</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q3"
                  value="a3"
                />
                <label class="form-check-label" for="q3">answer 3</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q3"
                  value="a4"
                />
                <label class="form-check-label" for="q3">answer 4</label>
              </div>
            </div>
            <hr/>
            <div id="q4">
              <h3>Question will appear here</h3>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q4"
                  value="a1"
                />
                <label class="form-check-label" for="q4">answer 1</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q4"
                  value="a2"
                />
                <label class="form-check-label" for="q4">answer 2</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q4"
                  value="a3"
                />
                <label class="form-check-label" for="q4">answer 3</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q4"
                  value="a4"
                />
                <label class="form-check-label" for="q4">answer 4</label>
              </div>
            </div>
            <hr/>
            <div id="q5">
              <h3>Question will appear here</h3>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q5"
                  value="a1"
                />
                <label class="form-check-label" for="q5">answer 1</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q5"
                  value="a2"
                />
                <label class="form-check-label" for="q5">answer 2</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q5"
                  value="a3"
                />
                <label class="form-check-label" for="q5">answer 3</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q5"
                  value="a4"
                />
                <label class="form-check-label" for="q5">answer 4</label>
              </div>
            </div>
            <hr/>
            <div id="q6">
              <h3>Question will appear here</h3>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q6"
                  value="a1"
                />
                <label class="form-check-label" for="q6">answer 1</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q6"
                  value="a2"
                />
                <label class="form-check-label" for="q6">answer 2</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q6"
                  value="a3"
                />
                <label class="form-check-label" for="q6">answer 3</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q6"
                  value="a4"
                />
                <label class="form-check-label" for="q6">answer 4</label>
              </div>
            </div>
            <hr/>
            <div id="q7">
              <h3>Question will appear here</h3>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q7"
                  value="a1"
                />
                <label class="form-check-label" for="q7">answer 1</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q7"
                  value="a2"
                />
                <label class="form-check-label" for="q7">answer 2</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q7"
                  value="a3"
                />
                <label class="form-check-label" for="q7">answer 3</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q7"
                  value="a4"
                />
                <label class="form-check-label" for="q7">answer 4</label>
              </div>
            </div>
            <hr/>
            <div id="q8">
              <h3>Question will appear here</h3>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q8"
                  value="a1"
                />
                <label class="form-check-label" for="q8">answer 1</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q8"
                  value="a2"
                />
                <label class="form-check-label" for="q8">answer 2</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q8"
                  value="a3"
                />
                <label class="form-check-label" for="q8">answer 3</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q8"
                  value="a4"
                />
                <label class="form-check-label" for="q8">answer 4</label>
              </div>
            </div>
            <hr/>
            <div id="q9">
              <h3>Question will appear here</h3>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q9"
                  value="a1"
                />
                <label class="form-check-label" for="q9">answer 1</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q9"
                  value="a2"
                />
                <label class="form-check-label" for="q9">answer 2</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q9"
                  value="a3"
                />
                <label class="form-check-label" for="q9">answer 3</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q9"
                  value="a4"
                />
                <label class="form-check-label" for="q9">answer 4</label>
              </div>
            </div>
            <hr/>
            <div id="q10">
              <h3>Question will appear here</h3>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q10"
                  value="a1"
                />
                <label class="form-check-label" for="q10">answer 1</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q10"
                  value="a2"
                />
                <label class="form-check-label" for="q10">answer 2</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q10"
                  value="a3"
                />
                <label class="form-check-label" for="q10">answer 3</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q10"
                  value="a4"
                />
                <label class="form-check-label" for="q10">answer 4</label>
              </div>
            </div>
            <div id="btn_line" class="text-center">
              <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
          </form>
        </div>
      </main>
      <<!-- 🔴 end main-->

      <!--🟢 start sidebar-->
      <div class="item-d">
        <div id="stickyBar" class="list-group" style="float: right;">
          <a class="list-group-item list-group-item-action" href="#q1"
            >Q) 1</a
          >
          <a class="list-group-item list-group-item-action" href="#q2"
            >Q) 2</a
          >
          <a class="list-group-item list-group-item-action" href="#q3"
            >Q) 3</a
          >
          <a class="list-group-item list-group-item-action" href="#q4"
            >Q) 4</a
          >
          <a class="list-group-item list-group-item-action" href="#q5"
            >Q) 5</a
          >
          <a class="list-group-item list-group-item-action" href="#q6"
            >Q) 6</a
          >
          <a class="list-group-item list-group-item-action" href="#q7"
            >Q) 7</a
          >
          <a class="list-group-item list-group-item-action" href="#q8"
            >Q) 8</a
          >
          <a class="list-group-item list-group-item-action" href="#q9"
            >Q) 9</a
          >
          <a class="list-group-item list-group-item-action" href="#q10"
            >Q) 10</a
          >
        </div>
      </div>
      <!-- 🔴 end sidebar-->

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
    <script src="../js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/sidebar.js"></script>
    <script src="../js/timer.js"></script>
    <script src="../js/stickyElementOnScroll.js"></script>
  </body>
</html>
