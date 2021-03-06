@extends('layouts.master')

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
<!-- Blog Standard -->
<section class="section-wrap blog-standard pb-50">
  <div class="container relative">
    <div class="row">
      
      <!-- content -->
      <div class="col-md-9 post-content mb-50">

        @foreach ($blog as $b)

          @switch($b->tipo)
          
            @case(1)
            <!-- standard post -->
            <article class="entry-item">
              <div class="entry-img">
                <a href="{{ route('blog.show',$b->slug) }}" class="hover-scale">
                  <img src="img/blog/post_img_1.jpg" alt="">
                </a>
              </div>

              <div class="entry-wrap">
                <div class="entry">  
                  <h2 class="entry-title">
                    <a href="{{ route('blog.show',$b->slug) }}">{{ $b->titulo }}</a>
                  </h2>
                  <ul class="entry-meta">
                    <li class="entry-date">
                      <i class="fa fa-calendar-o"></i>
                      {{ date('d-m-Y H:i:s', strtotime($b->created_at)) }}
                    </li>
                    <li class="entry-author">
                      <i class="fa fa-user"></i>
                      <a href="#">Admin</a>
                    </li> 
                    <li class="entry-category">
                      <i class="fa fa-bookmark"></i>
                      <a href="#">Fashion</a>
                    </li>                                        
                    <li class="entry-comments">
                      <i class="fa fa-comments"></i>
                      <a href="{{ route('blog.show',$b->slug) }}">Comente aqui</a>
                    </li>             
                  </ul>
                  <div class="entry-content">
                    <p>{{ $b->subtitulo }}</p>
                    <a href="{{ route('blog.show',$b->slug) }}" class="btn btn-lg btn-stroke"><span>Read More</span></a>
                  </div>
                </div>
              </div>
            </article> <!-- end standard post -->
            @break

            @case(2)
            <!-- gallery post -->
            <article class="entry-item">
              <div class="entry-slider">
                <div class="flexslider dots-inside" id="flexslider">
                  <ul class="slides clearfix">
                    <li>
                      <a href="#">
                        <img src="img/blog/gallery_post_img_1.jpg" alt="">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="img/blog/gallery_post_img_2.jpg" alt="">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="img/blog/gallery_post_img_3.jpg" alt="">
                      </a>
                    </li>
                  </ul>
                </div>
              </div> <!-- end slider -->

              <div class="entry-wrap">
                <div class="entry">                  
                  <h2 class="entry-title">
                    <a href="blog-single.html">Need a Business Idea? Here are 55.</a>
                  </h2>
                  <ul class="entry-meta">
                    <li class="entry-date">
                      <i class="fa fa-calendar-o"></i>
                      19 September, 2016
                    </li>
                    <li class="entry-author">
                      <i class="fa fa-user"></i>
                      <a href="#">Admin</a>
                    </li> 
                    <li class="entry-category">
                      <i class="fa fa-bookmark"></i>
                      <a href="#">Fashion</a>
                    </li>                                        
                    <li class="entry-comments">
                      <i class="fa fa-comments"></i>
                      <a href="blog-single.html">15 Comments</a>
                    </li>             
                  </ul>                                  
                  <div class="entry-content">
                    <p>We possess within us two minds. So far I have written only of the conscious mind. This Theme is the Best theme on ThemeForest. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Our subconscious mind contains such power.</p>
                    <a href="blog-single.html" class="btn btn-lg btn-stroke"><span>Read More</span></a>
                  </div>
                </div>
              </div>
            </article> <!-- end gallery post -->
            @break
            
            @case(3)
            <!-- video post -->
            <article class="entry-item">
              <div class="entry-video video-wrap">
                <iframe width="640" height="360" src="https://player.vimeo.com/video/17203320?badge=0" allowfullscreen></iframe>
              </div>

              <div class="entry-wrap">
                <div class="entry">  
                  <h2 class="entry-title">
                    <a href="blog-single.html">This is awesome Vimeo video post.</a>
                  </h2>
                  <ul class="entry-meta">
                    <li class="entry-date">
                      <i class="fa fa-calendar-o"></i>
                      19 September, 2016
                    </li>
                    <li class="entry-author">
                      <i class="fa fa-user"></i>
                      <a href="#">Admin</a>
                    </li> 
                    <li class="entry-category">
                      <i class="fa fa-bookmark"></i>
                      <a href="#">Fashion</a>
                    </li>                                        
                    <li class="entry-comments">
                      <i class="fa fa-comments"></i>
                      <a href="blog-single.html">15 Comments</a>
                    </li>             
                  </ul>                                     
                  <div class="entry-content">
                    <p>We possess within us two minds. So far I have written only of the conscious mind. This Theme is the Best theme on ThemeForest. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Our subconscious mind contains such power.</p>
                    <a href="blog-single.html" class="btn btn-lg btn-stroke"><span>Read More</span></a>
                  </div>
                </div>
              </div>
            </article> <!-- end video post -->
            @break
  
            @case(4)
            
            <!-- blockquote post -->
            <article class="entry-item">
              <div class="entry blockquote">              
                <blockquote class="blockquote-style-1">
                  <ul class="entry-meta">
                    <li class="entry-date">
                      <i class="fa fa-calendar-o"></i>
                      19 September, 2016
                    </li>
                    <li class="entry-author">
                      <i class="fa fa-user"></i>
                      <a href="#">Admin</a>
                    </li> 
                    <li class="entry-category">
                      <i class="fa fa-bookmark"></i>
                      <a href="#">Fashion</a>
                    </li>                                        
                    <li class="entry-comments">
                      <i class="fa fa-comments"></i>
                      <a href="blog-single.html">15 Comments</a>
                    </li>             
                  </ul>
                  <p>
                    <a href="blog-single.html">"Incredible change happens in your life when you decide to take control of what you do have power over instead of craving control over what you don't."</a>
                  </p>
                  <span>Steve Maraboli</span>
                </blockquote>
              </div>
            </article> <!-- end blockquote post -->
            @break
  
            @default
            0
          @endswitch
        @endforeach
        
        {{-- <!-- Pagination -->
        <nav class="pagination">
          <span class="page-numbers current">1</span>
          <a href="#">2</a>
          <a href="#">3</a>
          <a href="#">4</a>
          <a href="#"><i class="fa fa-angle-right"></i></a>
        </nav> --}}

        {{ $blog->links() }}

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
              @foreach ($blogRecent as $br)
              <li class="entry-li">
                <article class="post-small clearfix">
                  <div class="entry-img">
                    <a href="{{ route('blog.show', $br->slug) }}">
                      <img src="img/blog/latest_posts_1.jpg" alt="">
                    </a>
                  </div>
                  <div class="entry">                          
                    <h3 class="entry-title"><a href="{{ route('blog.show',$br->slug) }}">{{ $br->titulo }}</a></h3>
                    <ul class="entry-meta list-inline">
                      <li class="entry-date">
                        <i class="fa fa-calendar-o"></i>
                        {{ date('d-m-Y H:i:s', strtotime($b->created_at)) }}
                      </li>
                    </ul>
                  </div>
                </article>
              </li>
              @endforeach
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