@extends('frontend/layouts/main')

@section('title', 'Projects')

@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/project.css') }}">
@endpush

@section('id', 'projects')

@section('content')        
    <!-- Start Banner Area  -->
    <div class="banner" style="background-image: url({{ asset('frontend/assets/img/banner_project.png') }});">

        <div class="banner_text">
            <h2 class="banner_title">My Projects</h2>
        </div>

        <a href="#projects_section">
            <div class="banner_arrow">
                <img src="{{ asset("frontend/assets/img/arrow_bottom.png") }}" alt="arrow_icon">
            </div>
        </a>

    </div>
    <!-- End Banner Area  -->


    <!-- Start Projects Area -->
    <div class="projects" id="projects_section">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 d-flex justify-content-center">
                    <div class="project">
                        <div class="project_thumb" style="background-image: url({{ asset('frontend/assets/img/project_1.jpg') }});"></div>
                        <div class="project_text">
                            <a href="#"><h5 class="project_title">Numbay Store Website</h5></a>

                            <!-- <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg> Visit Website</a> -->

                            <a href="https://numbaystore.com" target="_blank" class="btn ut_btn_white">View</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12 d-flex justify-content-center">
                    <div class="project">
                        <div class="project_thumb" style="background-image: url({{ asset('frontend/assets/img/project_2.jpg') }});"></div>
                        <div class="project_text">
                            <a href="#"><h5 class="project_title">Kebunku.com Website</h5></a>

                            <a href="https://kebunku.netlify.app" target="_blank" class="btn ut_btn_white">View</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Projects Area -->
@endsection


</body>
</html>