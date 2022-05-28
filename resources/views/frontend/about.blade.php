@extends('frontend/layouts/main')

@section('title', 'About')

@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/about.css') }}">
@endpush

@section('id', 'about')
@section('content')
    <!-- Start Bio Area -->
    <div class="bio">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="profile_picture" style="background-image: url('{{ asset('storage/profile/'.$profile->profile_picture) }}');"></div>
                </div>
                <div class="col-md-6 col-12">
                    <h3 class="ut_section_title">{{ $pageName }}</h3>
                    <p class="bio_text mt-3">{{$profile->profile_description}} </p>

                    <div class="sosmed_icon d-flex">
                        @foreach ($sosmeds as $sosmed)
                            
                            <a href="{{ $sosmed->link }}" target="_blank">
                                <div class="ut_sosmed_icon">
                                    <img src="{{ asset('storage/sosmed/'.$sosmed->icon) }}" alt="{{$sosmed->name}}-icon">
                                </div>
                            </a>

                        @endforeach

                    </div>

                    <a href="{{ asset('storage/'.$profile->cv_file) }}" download="cv-arya" class="ut_btn_primary btn">Download CV</a>

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
                            <h5>{{ $education1->education_name }}</h5>
                            <p>{{$education1->start_year}} - {{$education1->end_year}}</p>
                        </div>
                        <p>{{$education1->education_description}}</p>
                    </div>
                </div>
                <div class="col-md-2 col-12">
                    <img src="{{asset('frontend/assets/img/arrow.png')}}" class="d-block m-auto arrow arrow_right" alt="arrow-icon">
                </div>
                <div class="col-md-5 right_col smp">
                    <div class="education">
                        <div class="education_title">
                            <h5>{{ $education1->education_name }}</h5>
                            <p>{{$education1->start_year}} - {{$education1->end_year}}</p>
                        </div>
                        <p>{{$education1->education_description}}</p>
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
                            <h5>{{ $education4->education_name }}</h5>
                            <p>{{$education4->start_year}} - {{$education4->end_year}}</p>
                        </div>
                        <p>{{$education4->education_description}}</p>
                    </div>
                </div>

                <div class="col-md-2 col-12 order-2">
                    <img src="{{asset('frontend/assets/img/arrow.png')}}" class="d-block m-auto arrow arrow_left" alt="arrow-icon">
                </div>

                <div class="col-md-5 col-12 right_col smk order-3">
                    <div class="education">
                        <div class="education_title">
                            <h5>{{ $education3->education_name }}</h5>
                            <p>{{$education3->start_year}} - {{$education3->end_year}}</p>
                        </div>
                        <p>{{$education3->education_description}}</p>
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
@endsection


@push('js')
    
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

@endpush

</body>
</html>