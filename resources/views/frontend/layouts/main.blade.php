<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arya Ashari - @yield('title')</title>

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <!-- Google Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
 
     <!-- My CSS -->
     <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css')}}">
 
     <!-- Utilities -->
     <link rel="stylesheet" href="{{ asset('frontend/assets/css/utilities.css') }}">
     <link rel="stylesheet" href="{{ asset('frontend/assets/css/utilities-responsive.css') }}">

     <!-- Fontawesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

     @stack('css')

</head>
<body id="@yield('id')">

    <!-- Start Header Area -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="project.html">Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.html">Blog</a>
              </li>
            </ul>
        </div>
      </nav>
      <!-- End Header Area -->



    <!-- Start Main Area -->

       <main>

            @yield('content')


       </main> 
      
    <!-- Content Main Area -->



    <!-- Start Footer Area -->
    <footer>
        <p>copyright <i class="far fa-copyright" style="font-weight: 300; font-size: 12px;"></i> 2020 Arya Ashari</p>
    </footer>
    <!-- End Footer Area -->
    

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    @stack('js')
</body>
</html>