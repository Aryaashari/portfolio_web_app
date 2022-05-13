@extends('frontend/layouts/main')

@section('title', 'Post Category')

@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/blog.css') }}">
@endpush

@section('id', 'projects')


@section('content')            
    <!-- Start Banner Area  -->
    <div class="banner" style="background-image: url({{ asset('frontend/assets/img/banner_project.png') }});">

        <div class="banner_text">
            <h2 class="banner_title">Posts</h2>
        </div>

        <a href="#post_section">
            <div class="banner_arrow">
                <img src="{{ asset('frontend/assets/img/arrow_bottom.png') }}" alt="arrow_icon">
            </div>
        </a>

    </div>
    <!-- End Banner Area  -->


    <!-- Start Posts Area -->
    <div class="posts" id="post_section">

        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="ut_section_title">Category: Website</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-xl-4 col-12">


                    <div class="post mt-4">
                        <div class="post_thumb" style="background-image: url({{ asset('frontend/assets/img/project_1.jpg') }});">
                            <div class="post_category">Website</div>
                        </div>
                        <div class="post_text">
                            <a href="{{ url('/single-post') }}" class="post_title">Pengenalan dasar website dengan menggunakan HTML, CSS, JS</a>
                            <p>Admin - 2 hours ago</p>
                            <a href="{{ url('/single-post') }}" class="ut_btn_primary btn">Read</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
    <!-- End Posts Area -->
@endsection

</body>
</html>