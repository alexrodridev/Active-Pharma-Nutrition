@extends('layout.master')

@section('title', 'Active Pharma Nutrition - ')

@section('page-title')
<!-- Page Title -->
<section class="page-title text-center bg-light">
  <div class="container relative clearfix">
    <div class="title-holder">
      <div class="title-text">
        <h1 class="uppercase">Blog</h1>
        <ol class="breadcrumb">
          <li>
            <a href="{{ url('/') }}">Home</a>
          </li>
          <li>
            <a href="{{ route('blog.index') }}">Blog</a>
          </li>
          <li class="active">
            Blog
          </li>
        </ol>
      </div>
    </div>
  </div>
</section>
@endsection

@section('content-page')
<!-- Blog Single -->
<section class="section-wrap post-single pb-10">
  <div class="container relative">
    <div class="row">
      
      <!-- content -->
      <div class="col-md-9 post-content mb-50">

        <article class="entry-item">
          <div class="entry-img">
            <img src="img/blog/post_img_1.jpg" alt="">
          </div>
          <div class="entry-wrap">
            <div class="entry">
              <h3>Let's try to design your first mobile app</h3>
              <div class="entry-content">
                <div class="article">
                  <p class="lead">
                    We possess within us two minds. So far I have written only of the conscious mind. The Best theme on ThemeForest. We possess within us two minds. So far I have written only of the conscious mind. This Theme is the Best theme on ThemeForest. So far I have written only of the conscious mind.
                  </p>
                  <p>Zenna Theme is a very slick and clean e-commerce template with endless possibilities. Creating an awesome clothes store with this Theme is easy than you can imagine. We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Our subconscious mind contains such power and complexity that it literally staggers the imagination.</p>

                  <blockquote class="blockquote-style-1 mt-30 mb-30">
                    <p>
                      Be who you are and say what you feel, because those who mind don't matter, and those who matter don't mind.
                    </p>
                    <span>Bernard M. Baruch</span>
                  </blockquote>

                  <p>Afela Theme is a very slick and clean e-commerce template with endless possibilities. Creating an awesome clothes store with this Theme is easy than you can imagine. We possess within us two minds. <strong>So far I have written</strong> only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Our subconscious mind contains such power and complexity that it literally staggers the imagination.</p>

                  <h5>This is the best flexible theme from DeoThemes</h5>

                  <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. And finally the subconscious is the mechanism through which thought impulses which are repeated regularly with feeling and emotion are quickened, charged. And finally the subconscious is the mechanism through which thought impulses which are repeated regularly with feeling and emotion are quickened, charged and changed into their physical equivalent.</p>
                </div> <!-- end article -->

                <div class="row mt-30 mb-50">
                  <div class="col-md-8">
                    <div class="entry-tags">
                      <span>Tags:</span>
                      <a href="#">Design</a>,
                      <a href="#">Photography</a>,
                      <a href="#">Branding</a>,
                      <a href="#">Creative</a>
                    </div>
                  </div> <!-- end tags -->

                  <div class="col-md-4 clearfix">
                    <div class="socials-share text-right">
                      <span>Share:</span>
                      <div class="social-icons nobase">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                      </div>
                    </div>
                  </div>
                </div>


                <!-- entry author -->
                <div class="entry-author-box clearfix">
                  <img src="img/blog/author.jpg" class="author-img" alt="img">
                  <div class="author-info">
                    <h6 class="author-name">Robert Patterson</h6>
                    <span>CFO of <a href="#">DeoThemes</a></span>
                    <p class="mb-10">In order to understand how the conscious and subconscious minds. Find me on <a href="#">Facebook</a>, on <a href="#">Twitter</a> or <a href="#">Google +</a>. As a team to create your reality, let me again use an analogy <a href="#">visit website.</a> And finally the subconscious is the mechanism through which thought impulses which are repeated regularly.</p>                
                  </div>                        
                </div>
                

                <!-- Comments -->
                <div class="entry-comments mt-20">
                  <h6 class="heading relative bottom-line full-grey mb-30">4 comments</h6>

                  <ul class="comment-list">
                    <li>
                      <div class="comment-body">
                        <img src="img/blog/comment_1.jpg" class="comment-avatar" alt="">
                        <div class="comment-content">
                          <span class="comment-author">Joeby Ragpa</span>
                          <span><a href="#">May 6, 2017 at 12:48 pm</a></span>    
                          <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                          <a href="#">Reply</a>
                        </div>
                      </div>

                      <ul class="comment-reply">
                        <li>
                          <div class="comment-body">
                            <img src="img/blog/comment_2.jpg" class="comment-avatar" alt="">
                            <div class="comment-content">
                              <span class="comment-author">Alexander Samokhin</span>
                              <span><a href="#">May 6, 2017 at 12:48 pm</a></span>    
                              <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                              <a href="#">Reply</a>
                            </div>
                          </div>
                        </li> <!-- end reply comment -->
                      </ul>

                    </li> <!-- end 1-2 comment -->

                    <li>
                      <div class="comment-body">
                        <img src="img/blog/comment_3.jpg" class="comment-avatar" alt="">
                        <div class="comment-content">
                          <span class="comment-author">Christopher Robins</span>
                          <span><a href="#">May 6, 2017 at 12:48 pm</a></span>    
                          <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                          <a href="#">Reply</a>
                        </div>
                      </div>
                    </li> <!-- end 3 comment -->

                  </ul>         
                </div> <!--  end comments -->

                <!-- Leave a Comment -->
                <div class="comment-form mt-60">
                  <h6 class="heading relative bottom-line full-grey mb-30">Leave a Reply</h6>
                  <form id="form" method="post" action="#">

                    <label for="comment">Comment</label>
                    <textarea name="comment" id="comment" rows="8"></textarea>

                    <label for="name">Name</label>
                    <input name="name" id="name" type="text">

                    <label for="mail">Email</label>
                    <input name="mail" id="mail" type="email">

                    <label for="website">Website</label>
                    <input name="website" id="website" type="text">

                    <input type="submit" class="btn btn-lg btn-dark" value="Post Comment" id="submit-message">
                  </form>
                </div>

              </div> <!-- end entry content -->


            </div>
          </div>
        </article>

      </div> <!-- end col -->

      <!-- Sidebar -->
      <aside class="col-md-3 sidebar">

        <div class="widget search">
          <form class="relative">
            <input type="search" class="searchbox mb-0" placeholder="Search">
            <button type="submit" class="search-button"><i class="fa fa-search"></i></button>
          </form>
        </div>        

        <!-- Categories -->
        <div class="widget categories">
          <h3 class="widget-title heading relative bottom-line full-grey">Categories</h3>
          <ul class="list-dividers">
            <li>
              <a href="#">Women</a>
            </li>
            <li>
              <a href="#">Men</a>
            </li>
            <li>
              <a href="#">Accessories</a>
            </li>
            <li>
              <a href="#">Bags</a>
            </li>
            <li>
              <a href="#">Watches</a>
            </li>
          </ul>
        </div>

        <!-- Recent posts -->
        <div class="widget recent-posts">
          <h3 class="widget-title heading relative bottom-line full-grey">Recent Posts</h3>
          <div class="entry-list">
            <ul class="posts-list">
              <li class="entry-li">
                <article class="post-small clearfix">
                  <div class="entry-img">
                    <a href="blog-single.html">
                      <img src="img/blog/latest_posts_1.jpg" alt="">
                    </a>
                  </div>
                  <div class="entry">                          
                    <h3 class="entry-title"><a href="blog-single.html">6 Ways to Be More Productive</a></h3>
                    <ul class="entry-meta list-inline">
                      <li class="entry-date">
                        <i class="fa fa-calendar-o"></i>
                        19 Mar, 2016
                      </li>
                    </ul>
                  </div>
                </article>
              </li>
              <li class="entry-li">
                <article class="post-small clearfix">
                  <div class="entry-img">
                    <a href="blog-single.html">
                      <img src="img/blog/latest_posts_2.jpg" alt="">
                    </a>
                  </div>
                  <div class="entry">
                    <h3 class="entry-title"><a href="blog-single.html">3 Tips to Align Your Startup</a></h3>
                    <ul class="entry-meta list-inline">
                      <li class="entry-date">
                        <i class="fa fa-calendar-o"></i>
                        16 Mar, 2016
                      </li>
                    </ul>
                  </div>
                </article>
              </li>
              <li class="entry-li">
                <article class="post-small clearfix">
                  <div class="entry-img">
                    <a href="blog-single.html">
                      <img src="img/blog/latest_posts_3.jpg" alt="">
                    </a>
                  </div>
                  <div class="entry">                          
                    <h3 class="entry-title"><a href="blog-single.html">Make more money blogging with these 6 tips</a></h3>
                    <ul class="entry-meta list-inline">
                      <li class="entry-date">
                        <i class="fa fa-calendar-o"></i>
                        16 Mar, 2016
                      </li>
                    </ul>
                  </div>
                </article>
              </li>
            </ul>
          </div>
        </div>

        <!-- Twitter -->
        <div class="widget recent-tweets">
          <h3 class="widget-title heading relative bottom-line full-grey">Recent Tweets</h3>
          <ul class="list-no-dividers" id="tweets" data-twitter-id="594366594521804800" data-max-tweets="2">
          </ul>
        </div>


        <!-- Tags -->
        <div class="widget tags light clearfix">
          <h3 class="widget-title heading relative bottom-line full-grey">Tags</h3>
          <a href="#">Multi-purpose</a>
          <a href="#">Creative</a>
          <a href="#">Elegant</a>
          <a href="#">Clean</a>
          <a href="#">Modern</a>
          <a href="#">Responsive</a>
          <a href="#">E-commerce</a>
          <a href="#">WordPress</a>
          <a href="#">Woocommerce</a>
          <a href="#">Store</a>
          <a href="#">Business</a>
        </div>

      </aside> <!-- end sidebar -->

    </div> <!-- end row -->
  </div> <!-- end container -->
</section> <!-- end blog standard -->
@endsection