@extends('frontend/layouts/main')

@section('title', 'Projects')

@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/project.css') }}">
@endpush

@section('id', 'projects')

@section('content')        
    <!-- Start Banner Area  -->
    <div class="banner" style="background-image: url({{ asset('storage/background/'.$projectPage->background_page) }});">

        <div class="banner_text">
            <h2 class="banner_title">{{ $projectPage->title }}</h2>
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

                @foreach ($projects as $project)
                    
                    <div class="col-lg-6 col-12 d-flex justify-content-center">
                        <div class="project">
                            <div class="project_thumb" style="background-image: url({{ asset('storage/projects/'.$project->project_picture) }});"></div>
                            <div class="project_text">
                                <a href="{{ $project->project_link }}"><h5 class="project_title">{{ $project->project_name }}</h5></a>

                                <!-- <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg> Visit Website</a> -->

                                <a href="{{ $project->project_link }}" target="_blank" class="btn ut_btn_white">View</a>
                            </div>
                        </div>
                    </div>

                @endforeach 

                
            </div>
        </div>
    </div>
    <!-- End Projects Area -->
@endsection


</body>
</html>