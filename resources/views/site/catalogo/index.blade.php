@extends('layout.master')

@section('title', 'Catalogo de Produtos - ')

@section('page-title')
<!-- Page Title -->
<section class="page-title text-center bg-light">
  <div class="container relative clearfix">
    <div class="title-holder">
      <div class="title-text">
        <h1 class="uppercase">Produtos</h1>
        <ol class="breadcrumb">
          <li>
            <a href="{{ url('/') }}">Home</a>
          </li>
          <li class="active">
            Produtos
          </li>
        </ol>
      </div>
    </div>
  </div>
</section>
@endsection

@section('content-page')
<!-- Catalogue -->
<section class="section-wrap pt-80 pb-40 catalogue">
  <div class="container relative">

    <!-- Filter -->          
    <div class="shop-filter">
      <div class="view-mode hidden-xs">
        <span>View:</span>
        <a class="grid grid-active" id="grid"></a>
        <a class="list" id="list"></a>
      </div>
      <div class="filter-show hidden-xs">
        <span>Show:</span>
        <a href="#" class="active">12</a>
        <a href="#">24</a>
        <a href="#">all</a>
      </div>
      <form class="ecommerce-ordering">
        <select>
          <option value="default-sorting">Default Sorting</option>
          <option value="price-low-to-high">Price: high to low</option>
          <option value="price-high-to-low">Price: low to high</option>
          <option value="by-popularity">By Popularity</option>
          <option value="date">By Newness</option>
          <option value="rating">By Rating</option>
        </select>
      </form>
    </div>

    <div class="row">
      <div class="col-md-12 catalogue-col right mb-50">
        <div class="shop-catalogue grid-view">

          <div class="row items-grid">

            @foreach ($produto as $p)
            <div class="col-md-4 col-xs-6 product product-grid">
              <div class="product-item clearfix">
                <div class="product-img hover-trigger">
                  <a href="{{ route('catalogo.show', $p->slug) }}">
                    <img src="img/shop/shop_item_1.jpg" alt="">
                    <img src="img/shop/shop_item_back_1.jpg" alt="" class="back-img">
                  </a>
                  <div class="product-label">
                    <span class="sale">sale</span>
                  </div>
                  <div class="hover-2">                    
                    <div class="product-actions">
                      <a href="#" class="product-add-to-wishlist">
                        <i class="fa fa-heart"></i>
                      </a>
                    </div>                        
                  </div>
                  <a href="{{ route('catalogo.show', $p->slug) }}" class="product-quickview">Veja mais</a>
                </div>

                <div class="product-details">
                  <h3 class="product-title">
                    <a href="{{ route('catalogo.show', $p->slug) }}">{{ $p->titulo }}</a>
                  </h3>
                  <span class="category">
                    <a href="catalogue-grid.html">Women</a>
                  </span>
                </div>

                <span class="price">
                  <del>
                    <span>R$ {{ number_format((($p->preco/100)*10) + $p->preco,2,',','.') }}</span>
                  </del>
                  <ins>
                    <span class="amount">R$ {{ number_format($p->preco,2,',','.') }}</span>
                  </ins>                        
                </span>

                <div class="product-description">
                  <h3 class="product-title">
                    <a href="{{ route('catalogo.show', $p->slug) }}">{{ $p->titulo }}</a>
                  </h3>
                  <span class="price">
                    <del>
                      <span>R$ {{ number_format((($p->preco/100)*10) + $p->preco,2,',','.') }}</span>
                    </del>
                    <ins>
                      <span class="amount">R$ {{ number_format($p->preco,2,',','.') }}</span>
                    </ins>                        
                  </span>
                  <span class="rating">
                    <a href="#">3 Reviews</a>
                  </span>
                  <div class="clear"></div>
                  <p>{!! $p->descricao !!}</p>
                  <a href="#" class="btn btn-dark btn-md left"><span>Adicionar ao carrinho</span></a>
                  <div class="product-add-to-wishlist">
                    <a href="#"><i class="fa fa-heart"></i></a>
                  </div>
                </div>                      

              </div>
            </div> <!-- end product -->
            @endforeach
            
            {{-- @foreach ($produto as $p)
            <div class="col-md-4 col-xs-6 product product-grid">
              <div class="product-item clearfix">
                <div class="product-img hover-trigger">
                  <a href="{{ route('catalogo.show', $p->slug) }}">
                    <img src="img/shop/shop_item_4.jpg" alt="">
                    <img src="img/shop/shop_item_back_4.jpg" alt="" class="back-img">
                  </a>
                  <div class="hover-2">                    
                    <div class="product-actions">
                      <a href="#" class="product-add-to-wishlist">
                        <i class="fa fa-heart"></i>
                      </a>
                    </div>                        
                  </div>
                  <a href="{{ route('catalogo.show', $p->slug) }}" class="product-quickview">Click e Veja</a>
                </div>

                <div class="product-details">
                  <h3 class="product-title">
                    <a href="{{ route('catalogo.show', $p->slug) }}">{{ $p->titulo }}</a>
                  </h3>
                  <span class="category">
                    <a href="catalogue-grid.html">Men</a>
                  </span>
                </div>

                <span class="price">
                  <ins>
                    <span class="amount">R$ {{ number_format($p->preco,2,',','.') }}</span>
                  </ins>                        
                </span>

                <div class="product-description">
                  <h3 class="product-title">
                    <a href="{{ route('catalogo.show', $p->slug) }}">{{ $p->titulo }}</a>
                  </h3>
                  <span class="price">
                    <ins>
                      <span class="amount">R$ {{ number_format($p->preco,2,'.',',') }}</span>
                    </ins>                        
                  </span>
                  <span class="rating">
                    <a href="#">3 Reviews</a>
                  </span>
                  <div class="clear"></div>
                  
                  {!! $p->descricao !!}

                  <a href="#" class="btn btn-dark btn-md left"><span>Add to Cart</span></a>
                  <div class="product-add-to-wishlist">
                    <a href="#"><i class="fa fa-heart"></i></a>
                  </div>
                </div>

              </div>
            </div> <!-- end product -->
            @endforeach --}}

          </div> <!-- end row -->
        </div> <!-- end grid mode -->
        
        <!-- Pagination -->
        {{ $produto->links() }}

      </div> <!-- end col -->

    </div> <!-- end row -->
  </div> <!-- end container -->
</section> <!-- end catalog -->
@endsection