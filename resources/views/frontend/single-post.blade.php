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

                  <div class="post_image" style="background-image: url({{ asset('frontend/assets/img/project_1.jpg') }});"></div>

                  <h1 class="post_title">Pengenalan dasar website dengan menggunakan HTML, CSS, JS</h1>

                  <div class="post_info">
                      <p>Admin - 3 hours ago</p>
                      <a href="post-category.html">Website</a>
                  </div>

                  <div class="post_body">
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident labore doloribus sequi exercitationem atque consectetur. Sint doloremque possimus quae pariatur, quis saepe minus error voluptas voluptatibus, repellat accusantium assumenda vero tempora! Veritatis commodi nam fugit odio, vero cupiditate eius, obcaecati mollitia temporibus totam blanditiis cum inventore et eveniet vitae quo.</p>

                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt quas, tenetur aliquam impedit facilis consequuntur, quo pariatur accusamus quaerat saepe enim. Ipsa pariatur, adipisci vitae est quisquam dicta accusantium fugit!</p>

                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam inventore quasi obcaecati reprehenderit. Odit, impedit magni. Numquam quisquam dolorem corrupti accusamus assumenda impedit blanditiis iusto hic id autem reprehenderit animi nam incidunt eligendi, fugiat molestiae distinctio, tenetur nostrum eius? Illo consectetur dolore beatae similique voluptatem at aspernatur porro, sequi quo, numquam saepe eligendi velit qui iure voluptates, veritatis sint? Obcaecati vitae esse laudantium officiis consequuntur minus voluptatum dolorem quas animi magnam ex, voluptates qui earum vel sit quisquam, quidem accusamus nulla. Nisi tenetur cum deleniti, dolores cumque exercitationem voluptate assumenda quos, a consequatur omnis unde blanditiis nobis eos rem cupiditate.</p>
                  </div>


                  <div class="post_comments">
                    <h4>4 COMMENTS</h4>

                    <div class="post_comment">
                      
                      <div class="post_comment_content">
                        <img src="{{ asset('frontend/assets/img/user_lg.png') }}" alt="user-icon">

                        <div class="comment_text">
                          <h5 class="comment_username">Aryaashari</h5>
                          <p class="comment_date">2 hours ago</p>
                          <p class="comment">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod, illo? Error doloribus facilis exercitationem esse hic consectetur autem quasi quas? Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, praesentium? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non cum, et deleniti assumenda sit ratione at porro ex eum repellendus.</p>
                        </div>

                        <!-- <a href="#" class="btn_reply">REPLY</a> -->

                      </div>

                      <div class="post_reply">
                        <div class="post_comment_content">
                          <img src="{{ asset('frontend/assets/img/user_lg.png') }}" alt="user-icon">

                          <div class="comment_text">
                            <h5 class="comment_username">Aryaashari</h5>
                            <p class="comment_date">2 hours ago</p>
                            <p class="comment">Baik makasih banyak</p>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="post_comment">
                      
                      <div class="post_comment_content">
                        <img src="{{ asset('frontend/assets/img/user_lg.png') }}" alt="user-icon">

                        <div class="comment_text">
                          <h5 class="comment_username">Aryaashari</h5>
                          <p class="comment_date">2 hours ago</p>
                          <p class="comment">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod, illo? Error doloribus facilis exercitationem esse hic consectetur autem quasi quas? Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, praesentium? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non cum, et deleniti assumenda sit ratione at porro ex eum repellendus.</p>
                        </div>

                        <!-- <a href="#" class="btn_reply">REPLY</a> -->

                      </div>

                      <div class="post_reply">
                        <div class="post_comment_content">
                          <img src="{{ asset('frontend/assets/img/user_lg.png') }}" alt="user-icon">

                          <div class="comment_text">
                            <h5 class="comment_username">Aryaashari</h5>
                            <p class="comment_date">2 hours ago</p>
                            <p class="comment">Baik makasih banyak</p>
                          </div>
                        </div>
                      </div>

                    </div>



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
                  
                  <a href="post-category.html">
                    <div class="post_category">
                      <h6>Website</h6>
                      <p>10</p>
                    </div>
                  </a>
                  

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