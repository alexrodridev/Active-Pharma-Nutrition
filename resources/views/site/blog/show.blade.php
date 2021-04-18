@extends('layout.master')

@section('title', "$b->titulo - ")

@section('page-title')
<!-- Page Title -->
<section class="page-title text-center bg-light">
  <div class="container relative clearfix">
    <div class="title-holder">
      <div class="title-text">
        <h1 class="uppercase">{{ $b->titulo }}</h1>
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
            <a href="{{ Request::url() }}#interacao">{{ $b->comentario()->where('blog_id',$b->id)->count() }} Comentarios</a>
          </li>             
        </ul>
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
            <img src="{{ asset('img/blog/post_img_1.jpg') }}" alt="">
          </div>
          <div class="entry-wrap">
            <div class="entry">
              <h3>{{ $b->subtitulo }}</h3>
              <div class="entry-content">
                <div class="article">
                  {{ $b->conteudo }}
                  {{-- <p class="lead">
                    {{ $b->subtitulo }}
                  </p> --}}
                </div> <!-- end article -->

                <div id='interacao' class="row mt-30 mb-50">
                  <div class="col-md-8">
                    <div class="entry-tags">
                      <span>Tags:</span>
                      @php
                        $tags = explode(' ', $b->tag);
                      @endphp
                      @foreach ($tags as $t)
                      <a href="#">{{ $t }}</a>,
                      @endforeach
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


                {{-- <!-- entry author -->
                <div class="entry-author-box clearfix">
                  <img src="img/blog/author.jpg" class="author-img" alt="img">
                  <div class="author-info">
                    <h6 class="author-name">Robert Patterson</h6>
                    <span>CFO of <a href="#">DeoThemes</a></span>
                    <p class="mb-10">In order to understand how the conscious and subconscious minds. Find me on <a href="#">Facebook</a>, on <a href="#">Twitter</a> or <a href="#">Google +</a>. As a team to create your reality, let me again use an analogy <a href="#">visit website.</a> And finally the subconscious is the mechanism through which thought impulses which are repeated regularly.</p>                
                  </div>                        
                </div> --}}
                

                <!-- Comments -->
                <div class="entry-comments mt-20">
                  <h6 class="heading relative bottom-line full-grey mb-30">{{ $b->comentario()->where('blog_id',$b->id)->count() }} comentarios</h6>

                  @php
                    $comentarios = $b->comentario()->where('blog_id',$b->id)->get();
                  @endphp

                  <ul class="comment-list">
                    @foreach ($comentarios as $c)
                    <li>
                      <div class="comment-body">
                        <img src="{{ asset('img/blog/comment_3.jpg') }}" class="comment-avatar" alt="">
                        <div class="comment-content">
                          <span class="comment-author">{{ $c->nome }}</span>
                          <span><a href="#">{{ date('d-m-Y H:i:s', strtotime($c->created_at)) }}</a></span>    
                          <p>{{ $c->comentario }}</p>
                          <a href="#">Responder</a>
                        </div>
                      </div>
                    </li> <!-- end comment -->
                    @endforeach
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
          <div id="example1"></div>
          <ul class="list-no-dividers" id="tweets" data-twitter-id="594366594521804800" data-max-tweets="2">
          </ul>
        </div>


        <!-- Tags -->
        <div class="widget tags light clearfix">
          <h3 class="widget-title heading relative bottom-line full-grey">Tags</h3>
          @php
            $tags = explode(' ', $b->tag);
          @endphp
          @foreach ($tags as $t)
          <a href="#">{{ $t }}</a>
          @endforeach
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

@section('js')
<script>
  $(document).ready(function() {
    $('blockquote').addClass('blockquote-style-1 mt-30 mb-30');
  });
</script>
@endsection