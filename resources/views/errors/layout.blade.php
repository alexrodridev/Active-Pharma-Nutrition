@extends('layout.master')

@section('page-title')
<!-- Page Title -->
<section class="page-title text-center bg-img overlay" style="background-image: url(img/page_title/about_us_title_bg.jpg)">
  <div class="container relative clearfix">
    <div class="title-holder">
      <div class="title-text">
        <h1 class="uppercase">@yield('code')</h1>
        <ol class="breadcrumb">
          <li>
            <a href="index.html">Home</a>
          </li>
          <li>
            <a href="index.html">Paginas</a>
          </li>
          <li class="active">
            @yield('code') - @yield('title')
          </li>
        </ol>
      </div>
    </div>
  </div>
</section>
@endsection

@section('content-page')
  <!-- @yield('code') -->
  <section class="section-wrap page-404">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-6 col-md-offset-3">
          <h1>@yield('code')</h1>
          <h2 class="mb-50">@yield('title')</h2>
          <p class="mb-50">@yield('message')</p>
          <p class="mb-20">Você pode voltar para <a href="/">Pagina Inicial</a> ou faça uma busca</p>
          <form class="relative">
            <input type="search" placeholder="Search" class="mb-0">
            <button type="submit" class="search-button"><i class="fa fa-search"></i></button>
          </form>
        </div>
      </div>
    </div>
  </section> <!-- end @yield('code') -->
@endsection