@extends('frontend/layouts/main')

@section('title', 'Single Post')

@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/single.post.css') }}">
@endpush

@section('id', 'projetcs')


@section('content')
  <!-- Start Post Area -->
  <div class="post">


      <div class="container">
          <div class="row">
              <div class="col-lg-9 col-12 post_content">

                  <div class="post_image" style="background-image: url({{ asset('storage/posts/'.$post->post_background) }});"></div>

                  <h1 class="post_title">{{ $post->title }}</h1>

                  <div class="post_info">
                      <p>{{ $post->author }} - {{ $post->created_at->diffForHumans() }}</p>
                      <a href="{{ url('/blog/category/'.$post->category->category) }}">{{ $post->category->category }}</a>
                  </div>

                  <div class="post_body">
                      <p>{{ $post->body }}</p>
                  </div>


                  <div class="post_comments">
                    <h4>{{ count($comments) }} COMMENTS</h4>

                    @foreach ($comments as $comment)
                      <div class="post_comment">
                        
                        <div class="post_comment_content">
                          <img src="{{ asset('frontend/assets/img/user_lg.png') }}" alt="user-icon">

                          <div class="comment_text">
                            <h5 class="comment_username">{{ $comment->username }}</h5>
                            <p class="comment_date">{{ $comment->created_at->diffForHumans() }}</p>
                            <p class="comment">{{ $comment->comment }}</p>
                          </div>

                          <!-- <a href="#" class="btn_reply">REPLY</a> -->

                        </div>

                        @foreach ($comment->reply as $reply)
                          
                          <div class="post_reply">
                            <div class="post_comment_content">
                              <img src="{{ asset('frontend/assets/img/user_lg.png') }}" alt="user-icon">

                              <div class="comment_text">
                                <h5 class="comment_username">admin</h5>
                                <p class="comment_date">{{ $reply->created_at->diffForHumans() }}</p>
                                <p class="comment">{{ $reply->comment }}</p>
                              </div>
                            </div>
                          </div>
                          
                        @endforeach

                      </div>
                    @endforeach
                    



                    <!-- <div class="post_comment_form">

                      <h5>Leave a Comment</h5>

                      <form action="#">

                        <div class="form">
                          <input type="text" name="username" placeholder="Enter your username" autocomplete="off">
                        </div>
                        <div class="form">
                          <input type="email" name="email" placeholder="Enter your email" autocomplete="off">
                        </div>
                        <div class="form">
                          <textarea name="comment" cols="30" rows="7" placeholder="Comment"></textarea>
                        </div>

                        <button type="submit" class="btn ut_btn_primary">Comment</button>
                        
                      </form>

                    </div> -->
                    
                    
                  </div>


              </div>


              <aside class="col-12 col-lg-3 post_sidebar mt-md-5 mt-lg-0">

                <div class="post_categories">
                  <h5>Post Categories</h5>
                  
                  @foreach ($categories as $category)
                    
                    <a href="{{ url('/blog/category/'.$category->category) }}">
                      <div class="post_category">
                        <h6>{{ $category->category }}</h6>
                        <p>{{ count($category->post()->get()) }}</p>
                      </div>
                    </a>

                  @endforeach
                  

                </div>
                

              </aside>


          </div>
          <div class="row">
            <div class="col-md-4 col-12">
              <div class="post_comment_form">

                <h5>Leave a Comment</h5>

                <form action="#">

                  <div class="form">
                    <input type="text" name="username" placeholder="Enter your username" autocomplete="off">
                  </div>
                  <div class="form">
                    <input type="email" name="email" placeholder="Enter your email" autocomplete="off">
                  </div>
                  <div class="form">
                    <textarea name="comment" cols="30" rows="7" placeholder="Comment"></textarea>
                  </div>

                  <button type="submit" class="btn ut_btn_primary">Comment</button>
                  
                </form>

              </div>
            </div>
          </div>
      </div>


  </div>
  <!-- End Post Area -->
@endsection


</body>
</html>