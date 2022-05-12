<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/home.css">

    <!-- Utilities -->
    <link rel="stylesheet" href="assets/css/utilities.css">

    <style>
      html, body, main, .container{
        height: 100% !important;
      }
    </style>

    <title>Arya Ashari - Homepage</title>
  </head>
  <body id="home">



    <!-- Start Main Area -->
    <main>
      
      <div class="container">

      
        <div class="row m-0 h-100">

          <div class="col-12 d-flex align-items-center">
            <div class="profile_border m-auto">
              <div class="profile_picture"></div>
            </div>
          </div>

          <div class="col-12 text-center">
            <h2 class="name_text">Arya Ashari</h2>
            <p class="job_text">I'm a <span id="job"></span></p>
          </div>

          <div class="col-12" style="margin-top: -100px;">
            <a href="#" class="btn ut_btn_primary mt-3 d-block m-auto">Download CV</a>
          </div>

          <div class="col-12 menu">
            <ul>
              <li>
                <a href="index.html" class="active">Home</a>
              </li>
              <li>
                <a href="about.html">About</a>
              </li>
              <li>
                <a href="project.html">Projects</a>
              </li>
              <li>
                <a href="blog.html">Blog</a>
              </li>
            </ul>
          </div>
        </div>

      </div>

    </main>
    <!-- End Main Area -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <!-- Typing Effect -->
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script>

      new Typewriter('#job', {
        strings: ['Student', 'Web Developer'],
        autoStart: true,
        loop: true
      });
      
    </script>
  </body>
</html>