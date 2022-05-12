<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arya Ashari - About</title>

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <!-- Google Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
 
     <!-- My CSS -->
     <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css')}}">
     <link rel="stylesheet" href="{{ asset('frontend/assets/css/about.css') }}">
 
     <!-- Utilities -->
     <link rel="stylesheet" href="{{ asset('frontend/assets/css/utilities.css') }}">
     <link rel="stylesheet" href="{{ asset('frontend/assets/css/utilities-responsive.css') }}">

     <!-- Fontawesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body id="about">

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

            <!-- Start Bio Area -->
            <div class="bio">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="profile_picture"></div>
                        </div>
                        <div class="col-md-6 col-12">
                            <h3 class="ut_section_title">About Me</h3>
                            <p class="bio_text mt-3">My name is Arya Ashari. I’m a Student of Computer Science I’m very passionate about computer science. I always enjoy for what i do now, everyday i’m learning about something new in computer science and i’m very intersted. I have a spirit to become a personal success </p>

                            <div class="sosmed_icon d-flex">
                                <a href="https://www.instagram.com/aryyashari/">
                                    <div class="ut_sosmed_icon">
                                        <img src="{{asset('frontend/assets/img/ig.png')}}" alt="instagram-icon">
                                    </div>
                                </a>
                                <a href="https://www.youtube.com/channel/UCZoJflrz-XUZ3Yu49_P1R-Q">
                                    <div class="ut_sosmed_icon">
                                        <img src="{{asset('frontend/assets/img/yt.png')}}" alt="youtube-icon">
                                    </div>
                                </a>

                                <a href="https://github.com/Aryaashari">
                                    <div class="ut_sosmed_icon">
                                        <img src="{{asset('frontend/assets/img/github.png')}}" alt="github-icon">
                                    </div>
                                </a>

                                <a href="https://www.linkedin.com/in/arya-ashari-321387196/">
                                    <div class="ut_sosmed_icon">
                                        <img src="{{asset('frontend/assets/img/linkedin.png')}}" alt="linkedin-icon">
                                    </div>
                                </a>

                                <a href="https://api.whatsapp.com/send?phone=6281215750405">
                                    <div class="ut_sosmed_icon">
                                        <img src="{{asset('frontend/assets/img/wa.png')}}" alt="whatsapp-icon">
                                    </div>
                                </a>

                                <a href="https://mail.google.com/mail/u/0/?fs=1&to=aryaashari100@gmail.com&tf=cm">
                                    <div class="ut_sosmed_icon">
                                        <img src="{{asset('frontend/assets/img/email.png')}}" alt="email-icon">
                                    </div>
                                </a>

                            </div>

                            <a href="#" class="ut_btn_primary btn">Download CV</a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Bio Area -->


            <!-- Start Education Area -->
            <div class="educations">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h3 class="ut_section_title">Educations</h3>
                        </div>
                    </div>

                    <div class="row mt-5 align-items-center">
                        <div class="col-md-5 col-12 sd">
                            <div class="education">
                                <div class="education_title">
                                    <h5>SD</h5>
                                    <p>2009 - 2015</p>
                                </div>
                                <p>SD YPKP 1 Sentani Kab Jayapura Papua</p>
                            </div>
                        </div>
                        <div class="col-md-2 col-12">
                            <img src="{{asset('frontend/assets/img/arrow.png')}}" class="d-block m-auto arrow arrow_right" alt="arrow-icon">
                        </div>
                        <div class="col-md-5 right_col smp">
                            <div class="education">
                                <div class="education_title">
                                    <h5>SMP</h5>
                                    <p>2015 - 2018</p>
                                </div>
                                <p>SMP N 2 Sentani Kab Jayapura Papua</p>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5 justify-content-end">
                        <div class="col-md-3 col-12">
                            <img src="{{asset('frontend/assets/img/arrow.png')}}" class="d-block m-auto arrow arrow_bottom" alt="arrow-icon">
                        </div>
                    </div>

                    <div class="row mt-5 align-items-center">
                        <div class="col-md-5 university -order-1">
                            <div class="education">
                                <div class="education_title">
                                    <h5>University</h5>
                                    <p>2021 - 2025</p>
                                </div>
                                <p>Telkom University Bandung</p>
                            </div>
                        </div>

                        <div class="col-md-2 col-12 order-2">
                            <img src="{{asset('frontend/assets/img/arrow.png')}}" class="d-block m-auto arrow arrow_left" alt="arrow-icon">
                        </div>

                        <div class="col-md-5 col-12 right_col smk order-3">
                            <div class="education">
                                <div class="education_title">
                                    <h5>SMK</h5>
                                    <p>2018 - 2021</p>
                                </div>
                                <p>SMK N 1 Sentani Kab Jayapura Papua</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Education Area -->


            <!-- Start Skill Area -->
            <div class="skills">

                <div class="container">

                    <div class="row">
                        <div class="col">
                            <h3 class="ut_section_title mb-5">Skills</h3>
                        </div>
                    </div>

                    <div class="row justify-content-between">
                        <div class="col-md-5 col-12">
                            <div class="skill">
                                
                                <div class="skill_title">
                                    <h5>HTML</h5>
                                    <p>65%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-5 col-12">
                            <div class="skill">
                                
                                <div class="skill_title">
                                    <h5>Javascript</h5>
                                    <p>35%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-between">
                        <div class="col-md-5 col-12">
                            <div class="skill">
                                
                                <div class="skill_title">
                                    <h5>CSS</h5>
                                    <p>50%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-5 col-12">
                            <div class="skill">
                                
                                <div class="skill_title">
                                    <h5>PHP</h5>
                                    <p>45%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-between">
                        <div class="col-md-5 col-12">
                            <div class="skill">
                                
                                <div class="skill_title">
                                    <h5>Laravel</h5>
                                    <p>40%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-5 col-12">
                            <div class="skill">
                                
                                <div class="skill_title">
                                    <h5>Flutter</h5>
                                    <p>25%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- End Skill Area -->


       </main> 
      
    <!-- Content Main Area -->



    <!-- Start Footer Area -->
    <footer>
        <p>copyright <i class="far fa-copyright" style="font-weight: 300; font-size: 12px;"></i> 2020 Arya Ashari</p>
    </footer>
    <!-- End Footer Area -->
    

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <script>
        $(document).ready(function () {
            if ($(document).width() < 768) {
                $('.arrow_right').addClass('arrow_bottom');
                $('.arrow_right').removeClass('arrow_right');
                
                $('.arrow_left').addClass('arrow_bottom');
                $('.arrow_left').removeClass('arrow_left');
            }
        });
    </script>
</body>
</html>