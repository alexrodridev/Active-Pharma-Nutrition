@extends('layouts.master')

@section('title', 'Minha Conta - ')

@section('page-title')
<!-- Page Title -->
<section class="page-title text-center bg-light">
  <div class="container relative clearfix">
    <div class="title-holder">
      <div class="title-text">
        <h1 class="uppercase">Minha Conta</h1>
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
<!-- Cart -->
<section class="section-wrap shopping-cart">
  <div class="container relative">
    <div class="row">

      <div class="col-md-12">
        <div class="table-wrap mb-30">
          <table class="shop_table cart table">
            <thead>
              <tr>
                <th class="product-name" colspan="2">Product</th>
                <th class="product-price">Price</th>
                <th class="product-quantity">Quantity</th>
                <th class="product-subtotal" colspan="2">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr class="cart_item">
                <td class="product-thumbnail">
                  <a href="#">
                    <img src="img/shop/shop_item_3.jpg" alt="">
                  </a>
                </td>
                <td class="product-name">
                  <a href="#">Fashion Shorts</a>
                  <ul>
                    <li>Size: XL</li>
                    <li>Color: White</li>
                  </ul>
                </td>
                <td class="product-price">
                  <span class="amount">$1250.00</span>
                </td>
                <td class="product-quantity">
                  <div class="quantity buttons_added">                  
                    <input type="number" step="1" min="0" value="1" title="Qty" class="input-text qty text">
                    <div class="quantity-adjust">
                      <a href="#" class="plus">
                        <i class="fa fa-angle-up"></i>
                      </a>
                      <a href="#" class="minus">
                        <i class="fa fa-angle-down"></i>
                      </a>
                    </div>
                  </div>
                </td>
                <td class="product-subtotal">
                  <span class="amount">$1250.00</span>
                </td>
                <td class="product-remove">
                  <a href="#" class="remove" title="Remove this item">
                    <i class="ui-close"></i>
                  </a>
                </td>
              </tr>

              <tr class="cart_item">
                <td class="product-thumbnail">
                  <a href="#">
                    <img src="img/shop/shop_item_7.jpg" alt="">
                  </a>
                </td>
                <td class="product-name">
                  <a href="#">Business Suit</a>
                  <ul>
                    <li>Size: L</li>
                    <li>Color: Black</li>
                  </ul>
                </td>
                <td class="product-price">
                  <span class="amount">$240.00</span>
                </td>
                <td class="product-quantity">
                  <div class="quantity buttons_added">                  
                    <input type="number" step="1" min="0" value="1" title="Qty" class="input-text qty text">
                    <div class="quantity-adjust">
                      <a href="#" class="plus">
                        <i class="fa fa-angle-up"></i>
                      </a>
                      <a href="#" class="minus">
                        <i class="fa fa-angle-down"></i>
                      </a>
                    </div>
                  </div>
                </td>
                <td class="product-subtotal">
                  <span class="amount">$240.00</span>
                </td>
                <td class="product-remove">
                  <a href="#" class="remove" title="Remove this item">
                    <i class="ui-close"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="row mb-50">
          <div class="col-md-5 col-sm-12">
            <div class="coupon">
              <input type="text" name="coupon_code" id="coupon_code" class="input-text form-control" value placeholder="Coupon code">
              <input type="submit" name="apply_coupon" class="btn btn-lg btn-stroke" value="Apply">
            </div>
          </div>

          <div class="col-md-7">
            <div class="actions">
              <input type="submit" name="update_cart" value="Update Cart" class="btn btn-lg btn-stroke">
              <div class="wc-proceed-to-checkout">
                <a href="{{ route('checkout') }}" class="btn btn-lg btn-dark"><span>proceed to checkout</span></a>
              </div>
            </div>
          </div>
        </div>

      </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
      <div class="col-md-6 shipping-calculator-form">
        <h2 class="heading relative uppercase bottom-line full-grey mb-30">Calculate Shipping</h2>
        <div class="row row-10">
          <div class="col-sm-6">
            <p class="form-row form-row-wide">
              <input type="text" class="input-text" value placeholder="CEP" name="calc_shipping_postcode" id="calc_shipping_postcode">
            </p>
          </div>
          <div class="col-sm-6">
            <p class="form-row form-row-wide">
              <input type="text" class="input-text" value placeholder="State / county" name="calc_shipping_state" id="calc_shipping_state">
            </p>
          </div>
        </div>
        <p>
          <input type="submit" name="calc_shipping" value="Calcular valor do frete" class="btn btn-lg btn-stroke mt-10 mb-mdm-40">
        </p>                
      </div> <!-- end col shipping calculator -->

      <div class="col-md-6">
        <div class="cart_totals">
          <h2 class="heading relative bottom-line full-grey uppercase mb-30">Cart Totals</h2>

          <table class="table shop_table">
            <tbody>
              <tr class="cart-subtotal">
                <th>Cart Subtotal</th>
                <td>
                  <span class="amount">$1490.00</span>
                </td>
              </tr>
              <tr class="shipping">
                <th>Shipping</th>
                <td>
                  <span>Free Shipping</span>
                </td>
              </tr>
              <tr class="order-total">
                <th>Order Total</th>
                <td>
                  <strong><span class="amount">$1490.00</span></strong>
                </td>
              </tr>
            </tbody>
          </table>

        </div>
      </div> <!-- end col cart totals -->

    </div> <!-- end row -->     

    
  </div> <!-- end container -->
</section> <!-- end cart -->
@endsection