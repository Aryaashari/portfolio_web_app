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
            <h2 class="banner_title">{{ $category->category }}</h2>
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
                    <h3 class="ut_section_title">Category: {{ $category->category }}</h3>
                </div>
            </div>

            <div class="row">

                @foreach ($posts as $post)
                    
                    <div class="col-md-6 col-xl-4 col-12">


                        <div class="post mt-4">
                            <div class="post_thumb" style="background-image: url({{ asset('storage/posts/'.$post->post_background) }});">
                                <div class="post_category">{{ $category->category }}</div>
                            </div>
                            <div class="post_text">
                                <a href="{{ url('/blog/post/'.$post->slug) }}" class="post_title">{{ $post->title }}</a>
                                <p>{{ $post->author }} - {{ $post->created_at->diffForHumans() }}</p>
                                <a href="{{ url('/blog/post/'.$post->slug) }}" class="ut_btn_primary btn">Read</a>
                            </div>
                        </div>


                    </div>

                @endforeach
            </div>
        </div>

    </div>
    <!-- End Posts Area -->
@endsection

</body>
</html>