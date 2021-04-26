@extends('layout.master')

@section('title', 'Catalogo de Produtos - ')

@section('page-title')
<!-- Page Title -->
<section class="page-title text-center bg-light">
  <div class="container relative clearfix">
    <div class="title-holder">
      <div class="title-text">
        <h1 class="uppercase">catalog sidebar</h1>
        <ol class="breadcrumb">
          <li>
            <a href="index.html">Home</a>
          </li>
          <li>
            <a href="index.html">Shop</a>
          </li>
          <li class="active">
            Catalog Sidebar
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
      <div class="col-md-9 catalogue-col right mb-50">
        <div class="shop-catalogue grid-view">

          <div class="row items-grid">
            
            @foreach ($produto as $p)
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
            @endforeach

          </div> <!-- end row -->
        </div> <!-- end grid mode -->
        
        <!-- Pagination -->
        {{-- <div class="pagination-wrap clearfix">
          <p class="result-count">Showing: 12 of 80 results</p>                 
          <nav class="pagination right clearfix">
            <a href="#"><i class="fa fa-angle-left"></i></a>
            <span class="page-numbers current">1</span>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#"><i class="fa fa-angle-right"></i></a>
          </nav>
        </div> --}}

        {{ $produto->links() }}

      </div> <!-- end col -->


      <!-- Sidebar -->
      <aside class="col-md-3 sidebar left-sidebar">

        <!-- Categories -->
        <div class="widget categories">
          <h3 class="widget-title heading uppercase relative bottom-line full-grey">Categories</h3>
          <ul class="list-dividers">
            <li>
              <a href="#">Women</a><span>(12)</span>
            </li>
            <li class="active-cat">
              <a href="#">Men</a><span>(22)</span>
            </li>
            <li>
              <a href="#">Accessories</a><span>(5)</span>
            </li>
            <li>
              <a href="#">Bags</a><span>(25)</span>
            </li>
            <li>
              <a href="#">Watches</a><span>(36)</span>
            </li>
            <li>
              <a href="#">Shoes</a><span>(7)</span>
            </li>
          </ul>
        </div>

        <!-- Filter by Price -->
        <div class="widget filter-by-price clearfix">
          <h3 class="widget-title heading uppercase relative bottom-line full-grey">Filter by Price</h3>
           
          <div id="slider-range"></div>
          <p>
            <label for="amount">Price:</label>
            <input type="text" id="amount">
            <a href="#" class="btn btn-sm btn-stroke"><span>Filter</span></a>
          </p>
        </div>

        <!-- Color -->
        <div class="widget filter-by-color">
          <h3 class="widget-title heading uppercase relative bottom-line full-grey">Color</h3>
          <ul class="color-select list-dividers">
            <li>
              <input type="checkbox" class="input-checkbox" id="green-color" name="green-color">
              <label for="green-color" class="checkbox-label">Green</label>
            </li>
            <li>
              <input type="checkbox" class="input-checkbox" id="red-color" name="red-color">
              <label for="red-color" class="checkbox-label">Red</label>
            </li>
            <li>
              <input type="checkbox" class="input-checkbox" id="blue-color" name="blue-color">
              <label for="blue-color" class="checkbox-label">Blue</label>
            </li>
            <li>
              <input type="checkbox" class="input-checkbox" id="white-color" name="white-color">
              <label for="white-color" class="checkbox-label">White</label>
            </li>
            <li>
              <input type="checkbox" class="input-checkbox" id="black-color" name="black-color">
              <label for="black-color" class="checkbox-label">Black</label>
            </li>
          </ul>
        </div>

        <!-- Size -->
        <div class="widget filter-by-size">
          <h3 class="widget-title heading uppercase relative bottom-line full-grey">Size</h3>
          <ul class="size-select list-dividers">
            <li>
              <input type="checkbox" class="input-checkbox" id="small-size" name="small-size">
              <label for="small-size" class="checkbox-label">S</label>
            </li>
            <li>
              <input type="checkbox" class="input-checkbox" id="medium-size" name="medium-size">
              <label for="medium-size" class="checkbox-label">M</label>
            </li>
            <li>
              <input type="checkbox" class="input-checkbox" id="large-size" name="large-size">
              <label for="large-size" class="checkbox-label">L</label>
            </li>
            <li>
              <input type="checkbox" class="input-checkbox" id="xlarge-size" name="xlarge-size">
              <label for="xlarge-size" class="checkbox-label">XL</label>
            </li>
            <li>
              <input type="checkbox" class="input-checkbox" id="xxlarge-size" name="xxlarge-size">
              <label for="xxlarge-size" class="checkbox-label">XXL</label>
            </li>
          </ul>
        </div>
        
        <!-- Best Sellers -->
        <div class="widget bestsellers">
          <div class="products-widget">
            <h3 class="widget-title heading uppercase relative bottom-line full-grey mb-30">Best Sellers</h3>
            <ul class="product-list-widget">
              <li class="clearfix">
                <a href="shop-single.html">
                  <img src="img/shop/shop_item_9.jpg" alt="">
                  <span class="product-title">White Shirt</span>
                </a>
                <span class="price">
                  <ins>
                    <span class="amount">$120.00</span>
                  </ins>
                </span>
              </li>
              <li class="clearfix">
                <a href="shop-single.html">
                  <img src="img/shop/shop_item_10.jpg" alt="">
                  <span class="product-title">Street Hoddie</span>
                </a>
                <span class="price">
                  <ins>
                    <span class="amount">$179.00</span>
                  </ins>
                </span>
              </li>               
            </ul>
          </div>
        </div>

        <!-- Tags -->
        <div class="widget tags clearfix">
          <h3 class="widget-title heading uppercase relative bottom-line full-grey">Tags</h3>
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
</section> <!-- end catalog -->
@endsection