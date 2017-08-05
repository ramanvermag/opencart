<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["custom_module_module"] = array (
  1 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'block_content' => 
    array (
      $language_id => '<p><br></p>',
      1 => '<p><br></p>',
    ),
    'html' => 
    array (
      $language_id => '                        <div class="footer-left">
                            <span class="logo">
                                <a href="index.php" title="Porto eCommerce Template">
                                    <img class="img-responsive" src="image/catalog/porto/index14/logo_footer_blue.png" alt="Porto eCommerce">
                                </a>
                            </span>
                        </div><!-- End .footer-left -->

                        <div class="footer-center">
                            <img src="image/catalog/porto/payments.png" class="img-responsive" alt="Payments">
                        </div><!-- End .footer-center -->

                        <div class="footer-right">
                        © Copyright 2016. All Rights Reserved.
                        </div><!-- End .footer-right -->',
      1 => '                        <div class="footer-left">
                            <span class="logo">
                                <a href="index.php" title="Porto eCommerce Template">
                                    <img class="img-responsive" src="image/catalog/porto/index14/logo_footer_blue.png" alt="Porto eCommerce">
                                </a>
                            </span>
                        </div><!-- End .footer-left -->

                        <div class="footer-center">
                            <img src="image/catalog/porto/payments.png" class="img-responsive" alt="Payments">
                        </div><!-- End .footer-center -->

                        <div class="footer-right">
                        © Copyright 2016. All Rights Reserved.
                        </div><!-- End .footer-right -->',
    ),
    'layout_id' => '99999',
    'position' => 'bottom',
    'status' => '1',
    'sort_order' => '',
  ),
  2 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'block_content' => 
    array (
      $language_id => '<p><br></p>',
      1 => '<p><br></p>',
    ),
    'html' => 
    array (
      $language_id => '                            <div class="header-minicart">
                                <div class="header-contact hidden-xs">
                                    <i class="fa fa-phone"></i> +(404) 158 14 25 78
                                    <span class="separator">|</span>
                                    <a href="index.php?route=information/contact">CONTACT US</a>
                                </div><!-- End .header-contact -->
                            </div><!-- End .header-mini-cart -->',
      1 => '                            <div class="header-minicart">
                                <div class="header-contact hidden-xs">
                                    <i class="fa fa-phone"></i> +(404) 158 14 25 78
                                    <span class="separator">|</span>
                                    <a href="index.php?route=information/contact">CONTACT US</a>
                                </div><!-- End .header-contact -->
                            </div><!-- End .header-mini-cart -->',
    ),
    'layout_id' => '99999',
    'position' => 'top_block',
    'status' => '1',
    'sort_order' => '',
  ),
  3 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'block_content' => 
    array (
      $language_id => '<p><br></p>',
      1 => '<p><br></p>',
    ),
    'html' => 
    array (
      $language_id => '<div class="hidden-xs hidden-sm" style="height: 10px"></div>',
      1 => '<div class="hidden-xs hidden-sm" style="height: 10px"></div>',
    ),
    'layout_id' => '3',
    'position' => 'column_left',
    'status' => '1',
    'sort_order' => '9',
  ),
  4 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'block_content' => 
    array (
      $language_id => '<p><br></p>',
      1 => '<p><br></p>',
    ),
    'html' => 
    array (
      $language_id => '                            <div class="widget widget-block2" style="margin-top: 10px">

                                <div class="info-box">
                                    <div class="info-box-icon">
                                        <i class="fa fa-truck"></i>
                                    </div>
                                    <div class="info-box-content">
                                        <h3 class="info-box-title">FREE SHIPPING & RETURN</h3>
                                        <div class="info-box-desc">Free shipping on all orders over $99.</div>
                                    </div>
                                </div>

                                <div class="info-box">
                                    <div class="info-box-icon">
                                        <i class="fa fa-dollar"></i>
                                    </div>
                                    <div class="info-box-content">
                                        <h3 class="info-box-title">MONEY BACK GUARANTEE</h3>
                                        <div class="info-box-desc">100% money back guarantee.</div>
                                    </div>
                                </div>
                                <div class="info-box">
                                    <div class="info-box-icon">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                    <div class="info-box-content">
                                        <h3 class="info-box-title">ONLINE SUPPORT 24/7</h3>
                                        <div class="info-box-desc">Lorem ipsum dolor sit amet.</div>
                                    </div>
                                </div>

                                <hr>

                                <div class="owl-carousel widget-banner-slider">
                                    <div>
                                        <a href="#">
                                            <img src="image/catalog/porto/index14/ad1.jpg" alt="banner">
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <img src="image/catalog/porto/index14/ad2.jpg" alt="banner">
                                        </a>
                                    </div>
                                </div><!-- End .widget-banner-slider -->

                                <hr>
                            </div><!-- End .widget -->',
      1 => '                            <div class="widget widget-block2" style="margin-top: 10px">

                                <div class="info-box">
                                    <div class="info-box-icon">
                                        <i class="fa fa-truck"></i>
                                    </div>
                                    <div class="info-box-content">
                                        <h3 class="info-box-title">FREE SHIPPING & RETURN</h3>
                                        <div class="info-box-desc">Free shipping on all orders over $99.</div>
                                    </div>
                                </div>

                                <div class="info-box">
                                    <div class="info-box-icon">
                                        <i class="fa fa-dollar"></i>
                                    </div>
                                    <div class="info-box-content">
                                        <h3 class="info-box-title">MONEY BACK GUARANTEE</h3>
                                        <div class="info-box-desc">100% money back guarantee.</div>
                                    </div>
                                </div>
                                <div class="info-box">
                                    <div class="info-box-icon">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                    <div class="info-box-content">
                                        <h3 class="info-box-title">ONLINE SUPPORT 24/7</h3>
                                        <div class="info-box-desc">Lorem ipsum dolor sit amet.</div>
                                    </div>
                                </div>

                                <hr>

                                <div class="owl-carousel widget-banner-slider">
                                    <div>
                                        <a href="#">
                                            <img src="image/catalog/porto/index14/ad1.jpg" alt="banner">
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <img src="image/catalog/porto/index14/ad2.jpg" alt="banner">
                                        </a>
                                    </div>
                                </div><!-- End .widget-banner-slider -->

                                <hr>
                            </div><!-- End .widget -->',
    ),
    'layout_id' => '2',
    'position' => 'column_right',
    'status' => '1',
    'sort_order' => '0',
  ),
  5 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'block_content' => 
    array (
      $language_id => '<p><br></p>',
      1 => '<p><br></p>',
    ),
    'html' => 
    array (
      $language_id => '<div class="parallax-section parallax-fixed fullscreen text-center" id="parallax-1">
    <div class="vcenter-container">
        <div class="vcenter">
            <div class="parallax-content">
                <h3><img src="image/catalog/porto/index14/p1.png" alt="p"><span>Do you need a new?</span><img src="image/catalog/porto/index14/p1.png" alt="p"></h3>
                <h2>eCOMMERCE?</h2>
                <h4>Check our options and features.</h4>
            </div><!-- End .parallax-content -->
        </div><!-- End .vcenter -->
    </div><!-- End .vcenter-container -->
</div><!-- End .parallax-section -->',
      1 => '<div class="parallax-section parallax-fixed fullscreen text-center" id="parallax-1">
    <div class="vcenter-container">
        <div class="vcenter">
            <div class="parallax-content">
                <h3><img src="image/catalog/porto/index14/p1.png" alt="p"><span>Do you need a new?</span><img src="image/catalog/porto/index14/p1.png" alt="p"></h3>
                <h2>eCOMMERCE?</h2>
                <h4>Check our options and features.</h4>
            </div><!-- End .parallax-content -->
        </div><!-- End .vcenter -->
    </div><!-- End .vcenter-container -->
</div><!-- End .parallax-section -->',
    ),
    'layout_id' => '1',
    'position' => 'slideshow',
    'status' => '1',
    'sort_order' => '0',
  ),
  6 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'block_content' => 
    array (
      $language_id => '<p><br></p>',
      1 => '<p><br></p>',
    ),
    'html' => 
    array (
      $language_id => '<div class="parallax-section parallax-lg parallax-fixed" id="parallax-2">
    <div class="vcenter-container">
        <div class="vcenter">
            <div class="container">
                <div class="text-right">
                    <div class="parallax-content dark">
                        <h3>New Arrivals</h3>
                        <h2>Fashion Dresses</h2>
                        <h4><span>Up to <strong>70% OFF</strong> in the new collection.</span> <a href="#" class="btn btn-dark">SHOP NOW</a></h4>
                    </div><!-- End .parallax-content -->
                </div><!-- End .text-right -->

                <div class="dark">
                    <h2 class="slider-title">Featured Products</h2>
                    <div class="owl-carousel parallax-featured-carousel">
                        <div class="product">
                            <div class="product-image">
                                <figure class="inner-image">
                                    <a href="#">
                                        <img src="image/catalog/porto/index14/product-1.jpg" alt="image">
                                    </a>
                                </figure>
                                <div class="product-action">
                                    <a href="#" class="product-btn btn-quickview" title="Quickview"><i class="fa fa-eye"></i>Quick View</a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-image -->

                            <h3><a href="#">Cell Phone</a></h3>

                            <div class="rating-wrap">
                                <span class="rating-before"><span class="rating-line"></span></span>
                                <div class="rating-content">
                                    <div class="star-rating" title="4.00">
                                        <span style="width:0%">4.00</span>
                                    </div><!-- End .star-rating -->
                                </div><!-- End .rating-content -->
                                <span class="rating-after"><span class="rating-line"></span></span>

                            </div><!-- End .rating-wrap -->
                            <span class="price">
                                <ins><span class="amount">$130.00</span></ins>
                            </span>
                        </div><!-- End .product -->
                        <div class="product">
                            <div class="product-image">
                                <figure class="inner-image">
                                    <a href="#">
                                        <img src="image/catalog/porto/index14/product-2.jpg" alt="image">
                                    </a>
                                </figure>
                                <div class="product-action">
                                    <a href="#" class="product-btn btn-quickview" title="Quickview"><i class="fa fa-eye"></i>Quick View</a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-image -->

                            <h3><a href="#">Cell Phone</a></h3>

                            <div class="rating-wrap">
                                <span class="rating-before"><span class="rating-line"></span></span>
                                <div class="rating-content">
                                    <div class="star-rating" title="4.00">
                                        <span style="width:0%">4.00</span>
                                    </div><!-- End .star-rating -->
                                </div><!-- End .rating-content -->
                                <span class="rating-after"><span class="rating-line"></span></span>

                            </div><!-- End .rating-wrap -->
                            <span class="price">
                                <ins><span class="amount">$130.00</span></ins>
                            </span>
                        </div><!-- End .product -->
                        <div class="product">
                            <div class="product-image">
                                <figure class="inner-image">
                                    <a href="#">
                                        <img src="image/catalog/porto/index14/product-3.jpg" alt="image">
                                    </a>
                                </figure>
                                <div class="product-action">
                                    <a href="#" class="product-btn btn-quickview" title="Quickview"><i class="fa fa-eye"></i>Quick View</a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-image -->

                            <h3><a href="#">Cell Phone</a></h3>

                            <div class="rating-wrap">
                                <span class="rating-before"><span class="rating-line"></span></span>
                                <div class="rating-content">
                                    <div class="star-rating" title="4.00">
                                        <span style="width:0%">4.00</span>
                                    </div><!-- End .star-rating -->
                                </div><!-- End .rating-content -->
                                <span class="rating-after"><span class="rating-line"></span></span>

                            </div><!-- End .rating-wrap -->
                            <span class="price">
                                <ins><span class="amount">$130.00</span></ins>
                            </span>
                        </div><!-- End .product -->
                        <div class="product">
                            <div class="product-image">
                                <figure class="inner-image">
                                    <a href="#">
                                        <img src="image/catalog/porto/index14/product-4.jpg" alt="image">
                                    </a>
                                </figure>
                                <div class="product-action">
                                    <a href="#" class="product-btn btn-quickview" title="Quickview"><i class="fa fa-eye"></i>Quick View</a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-image -->

                            <h3><a href="#">Cell Phone</a></h3>

                            <div class="rating-wrap">
                                <span class="rating-before"><span class="rating-line"></span></span>
                                <div class="rating-content">
                                    <div class="star-rating" title="4.00">
                                        <span style="width:0%">4.00</span>
                                    </div><!-- End .star-rating -->
                                </div><!-- End .rating-content -->
                                <span class="rating-after"><span class="rating-line"></span></span>

                            </div><!-- End .rating-wrap -->
                            <span class="price">
                                <ins><span class="amount">$130.00</span></ins>
                            </span>
                        </div><!-- End .product -->
                        <div class="product">
                            <div class="product-image">
                                <figure class="inner-image">
                                    <a href="#">
                                        <img src="image/catalog/porto/index14/product-5.jpg" alt="image">
                                    </a>
                                </figure>
                                <div class="product-action">
                                    <a href="#" class="product-btn btn-quickview" title="Quickview"><i class="fa fa-eye"></i>Quick View</a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-image -->

                            <h3><a href="#">Cell Phone</a></h3>

                            <div class="rating-wrap">
                                <span class="rating-before"><span class="rating-line"></span></span>
                                <div class="rating-content">
                                    <div class="star-rating" title="4.00">
                                        <span style="width:0%">4.00</span>
                                    </div><!-- End .star-rating -->
                                </div><!-- End .rating-content -->
                                <span class="rating-after"><span class="rating-line"></span></span>

                            </div><!-- End .rating-wrap -->
                            <span class="price">
                                <ins><span class="amount">$130.00</span></ins>
                            </span>
                        </div><!-- End .product -->
                        <div class="product">
                            <div class="product-image">
                                <figure class="inner-image">
                                    <a href="#">
                                        <img src="image/catalog/porto/index14/product-1.jpg" alt="image">
                                    </a>
                                </figure>
                                <div class="product-action">
                                    <a href="#" class="product-btn btn-quickview" title="Quickview"><i class="fa fa-eye"></i>Quick View</a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-image -->

                            <h3><a href="#">Cell Phone</a></h3>

                            <div class="rating-wrap">
                                <span class="rating-before"><span class="rating-line"></span></span>
                                <div class="rating-content">
                                    <div class="star-rating" title="4.00">
                                        <span style="width:0%">4.00</span>
                                    </div><!-- End .star-rating -->
                                </div><!-- End .rating-content -->
                                <span class="rating-after"><span class="rating-line"></span></span>

                            </div><!-- End .rating-wrap -->
                            <span class="price">
                                <ins><span class="amount">$130.00</span></ins>
                            </span>
                        </div><!-- End .product -->
                    </div><!-- End .parallax-arrivals-carousel -->
                </div>
            </div><!-- End .container -->
        </div><!-- End .vcenter -->
    </div><!-- End .vcenter-container -->
</div><!-- End .parallax-section -->',
      1 => '<div class="parallax-section parallax-lg parallax-fixed" id="parallax-2">
    <div class="vcenter-container">
        <div class="vcenter">
            <div class="container">
                <div class="text-right">
                    <div class="parallax-content dark">
                        <h3>New Arrivals</h3>
                        <h2>Fashion Dresses</h2>
                        <h4><span>Up to <strong>70% OFF</strong> in the new collection.</span> <a href="#" class="btn btn-dark">SHOP NOW</a></h4>
                    </div><!-- End .parallax-content -->
                </div><!-- End .text-right -->

                <div class="dark">
                    <h2 class="slider-title">Featured Products</h2>
                    <div class="owl-carousel parallax-featured-carousel">
                        <div class="product">
                            <div class="product-image">
                                <figure class="inner-image">
                                    <a href="#">
                                        <img src="image/catalog/porto/index14/product-1.jpg" alt="image">
                                    </a>
                                </figure>
                                <div class="product-action">
                                    <a href="#" class="product-btn btn-quickview" title="Quickview"><i class="fa fa-eye"></i>Quick View</a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-image -->

                            <h3><a href="#">Cell Phone</a></h3>

                            <div class="rating-wrap">
                                <span class="rating-before"><span class="rating-line"></span></span>
                                <div class="rating-content">
                                    <div class="star-rating" title="4.00">
                                        <span style="width:0%">4.00</span>
                                    </div><!-- End .star-rating -->
                                </div><!-- End .rating-content -->
                                <span class="rating-after"><span class="rating-line"></span></span>

                            </div><!-- End .rating-wrap -->
                            <span class="price">
                                <ins><span class="amount">$130.00</span></ins>
                            </span>
                        </div><!-- End .product -->
                        <div class="product">
                            <div class="product-image">
                                <figure class="inner-image">
                                    <a href="#">
                                        <img src="image/catalog/porto/index14/product-2.jpg" alt="image">
                                    </a>
                                </figure>
                                <div class="product-action">
                                    <a href="#" class="product-btn btn-quickview" title="Quickview"><i class="fa fa-eye"></i>Quick View</a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-image -->

                            <h3><a href="#">Cell Phone</a></h3>

                            <div class="rating-wrap">
                                <span class="rating-before"><span class="rating-line"></span></span>
                                <div class="rating-content">
                                    <div class="star-rating" title="4.00">
                                        <span style="width:0%">4.00</span>
                                    </div><!-- End .star-rating -->
                                </div><!-- End .rating-content -->
                                <span class="rating-after"><span class="rating-line"></span></span>

                            </div><!-- End .rating-wrap -->
                            <span class="price">
                                <ins><span class="amount">$130.00</span></ins>
                            </span>
                        </div><!-- End .product -->
                        <div class="product">
                            <div class="product-image">
                                <figure class="inner-image">
                                    <a href="#">
                                        <img src="image/catalog/porto/index14/product-3.jpg" alt="image">
                                    </a>
                                </figure>
                                <div class="product-action">
                                    <a href="#" class="product-btn btn-quickview" title="Quickview"><i class="fa fa-eye"></i>Quick View</a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-image -->

                            <h3><a href="#">Cell Phone</a></h3>

                            <div class="rating-wrap">
                                <span class="rating-before"><span class="rating-line"></span></span>
                                <div class="rating-content">
                                    <div class="star-rating" title="4.00">
                                        <span style="width:0%">4.00</span>
                                    </div><!-- End .star-rating -->
                                </div><!-- End .rating-content -->
                                <span class="rating-after"><span class="rating-line"></span></span>

                            </div><!-- End .rating-wrap -->
                            <span class="price">
                                <ins><span class="amount">$130.00</span></ins>
                            </span>
                        </div><!-- End .product -->
                        <div class="product">
                            <div class="product-image">
                                <figure class="inner-image">
                                    <a href="#">
                                        <img src="image/catalog/porto/index14/product-4.jpg" alt="image">
                                    </a>
                                </figure>
                                <div class="product-action">
                                    <a href="#" class="product-btn btn-quickview" title="Quickview"><i class="fa fa-eye"></i>Quick View</a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-image -->

                            <h3><a href="#">Cell Phone</a></h3>

                            <div class="rating-wrap">
                                <span class="rating-before"><span class="rating-line"></span></span>
                                <div class="rating-content">
                                    <div class="star-rating" title="4.00">
                                        <span style="width:0%">4.00</span>
                                    </div><!-- End .star-rating -->
                                </div><!-- End .rating-content -->
                                <span class="rating-after"><span class="rating-line"></span></span>

                            </div><!-- End .rating-wrap -->
                            <span class="price">
                                <ins><span class="amount">$130.00</span></ins>
                            </span>
                        </div><!-- End .product -->
                        <div class="product">
                            <div class="product-image">
                                <figure class="inner-image">
                                    <a href="#">
                                        <img src="image/catalog/porto/index14/product-5.jpg" alt="image">
                                    </a>
                                </figure>
                                <div class="product-action">
                                    <a href="#" class="product-btn btn-quickview" title="Quickview"><i class="fa fa-eye"></i>Quick View</a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-image -->

                            <h3><a href="#">Cell Phone</a></h3>

                            <div class="rating-wrap">
                                <span class="rating-before"><span class="rating-line"></span></span>
                                <div class="rating-content">
                                    <div class="star-rating" title="4.00">
                                        <span style="width:0%">4.00</span>
                                    </div><!-- End .star-rating -->
                                </div><!-- End .rating-content -->
                                <span class="rating-after"><span class="rating-line"></span></span>

                            </div><!-- End .rating-wrap -->
                            <span class="price">
                                <ins><span class="amount">$130.00</span></ins>
                            </span>
                        </div><!-- End .product -->
                        <div class="product">
                            <div class="product-image">
                                <figure class="inner-image">
                                    <a href="#">
                                        <img src="image/catalog/porto/index14/product-1.jpg" alt="image">
                                    </a>
                                </figure>
                                <div class="product-action">
                                    <a href="#" class="product-btn btn-quickview" title="Quickview"><i class="fa fa-eye"></i>Quick View</a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-image -->

                            <h3><a href="#">Cell Phone</a></h3>

                            <div class="rating-wrap">
                                <span class="rating-before"><span class="rating-line"></span></span>
                                <div class="rating-content">
                                    <div class="star-rating" title="4.00">
                                        <span style="width:0%">4.00</span>
                                    </div><!-- End .star-rating -->
                                </div><!-- End .rating-content -->
                                <span class="rating-after"><span class="rating-line"></span></span>

                            </div><!-- End .rating-wrap -->
                            <span class="price">
                                <ins><span class="amount">$130.00</span></ins>
                            </span>
                        </div><!-- End .product -->
                    </div><!-- End .parallax-arrivals-carousel -->
                </div>
            </div><!-- End .container -->
        </div><!-- End .vcenter -->
    </div><!-- End .vcenter-container -->
</div><!-- End .parallax-section -->',
    ),
    'layout_id' => '1',
    'position' => 'slideshow',
    'status' => '1',
    'sort_order' => '2',
  ),
  7 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'block_content' => 
    array (
      $language_id => '<p><br></p>',
      1 => '<p><br></p>',
    ),
    'html' => 
    array (
      $language_id => '<div class="parallax-section parallax-fixed fullscreen text-center" id="parallax-4">
    <div class="vcenter-container">
        <div class="vcenter">
            <div class="parallax-content smaller dark">
                <h3><img src="image/catalog/porto/index14/p2.png" alt="p"><span>LET THE MUSIC PLAY</span><img src="image/catalog/porto/index14/p2.png" alt="p"></h3>
                <h2>Connect with the best tech!</h2>
                <h4>Up to 70% OFF in the new collection.</h4>
                <a href="#" class="btn btn-dark no-radius">SHOP NOW</a>
            </div><!-- End .parallax-content -->
        </div><!-- End .vcenter -->
    </div><!-- End .vcenter-container -->
</div><!-- End .parallax-section -->',
      1 => '<div class="parallax-section parallax-fixed fullscreen text-center" id="parallax-4">
    <div class="vcenter-container">
        <div class="vcenter">
            <div class="parallax-content smaller dark">
                <h3><img src="image/catalog/porto/index14/p2.png" alt="p"><span>LET THE MUSIC PLAY</span><img src="image/catalog/porto/index14/p2.png" alt="p"></h3>
                <h2>Connect with the best tech!</h2>
                <h4>Up to 70% OFF in the new collection.</h4>
                <a href="#" class="btn btn-dark no-radius">SHOP NOW</a>
            </div><!-- End .parallax-content -->
        </div><!-- End .vcenter -->
    </div><!-- End .vcenter-container -->
</div><!-- End .parallax-section -->',
    ),
    'layout_id' => '1',
    'position' => 'slideshow',
    'status' => '1',
    'sort_order' => '4',
  ),
  8 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'block_content' => 
    array (
      $language_id => '<p><br></p>',
      1 => '<p><br></p>',
    ),
    'html' => 
    array (
      $language_id => '<div class="parallax-section parallax-lg parallax-fixed" id="parallax-3">
    <div class="vcenter-container">
        <div class="vcenter">
            <div class="container">
                <div class="parallax-content clearfix">
                    <h3>New Arrivals</h3>
                    <h2>Fashion Sunglasses</h2>
                    <h4><span>Up to <strong>70% OFF</strong> in the new collection.</span> <a href="#" class="btn btn-white pull-right">SHOP NOW</a></h4>
                </div><!-- End .parallax-content -->
                <div class="light">
                    <h2 class="slider-title text-right">Featured Products</h2>
                    <div class="owl-carousel parallax-featured-carousel-two clearfix">
                        <div class="product">
                            <div class="product-image">
                                <figure class="inner-image">
                                    <a href="#">
                                        <img src="image/catalog/porto/index14/product-6.jpg" alt="image">
                                    </a>
                                </figure>
                                <div class="product-action">
                                    <a href="#" class="product-btn btn-quickview" title="Quickview"><i class="fa fa-eye"></i>Quick View</a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-image -->

                            <h3><a href="#">Cell Phone</a></h3>

                            <div class="rating-wrap">
                                <span class="rating-before"><span class="rating-line"></span></span>
                                <div class="rating-content">
                                    <div class="star-rating" title="4.00">
                                        <span style="width:0%">4.00</span>
                                    </div><!-- End .star-rating -->
                                </div><!-- End .rating-content -->
                                <span class="rating-after"><span class="rating-line"></span></span>

                            </div><!-- End .rating-wrap -->
                            <span class="price">
                                <ins><span class="amount">$130.00</span></ins>
                            </span>
                        </div><!-- End .product -->
                        <div class="product">
                            <div class="product-image">
                                <figure class="inner-image">
                                    <a href="#">
                                        <img src="image/catalog/porto/index14/product-7.jpg" alt="image">
                                    </a>
                                </figure>
                                <div class="product-action">
                                    <a href="#" class="product-btn btn-quickview" title="Quickview"><i class="fa fa-eye"></i>Quick View</a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-image -->

                            <h3><a href="#">Cell Phone</a></h3>

                            <div class="rating-wrap">
                                <span class="rating-before"><span class="rating-line"></span></span>
                                <div class="rating-content">
                                    <div class="star-rating" title="4.00">
                                        <span style="width:0%">4.00</span>
                                    </div><!-- End .star-rating -->
                                </div><!-- End .rating-content -->
                                <span class="rating-after"><span class="rating-line"></span></span>

                            </div><!-- End .rating-wrap -->
                            <span class="price">
                                <ins><span class="amount">$130.00</span></ins>
                            </span>
                        </div><!-- End .product -->
                        <div class="product">
                            <div class="product-image">
                                <figure class="inner-image">
                                    <a href="#">
                                        <img src="image/catalog/porto/index14/product-8.jpg" alt="image">
                                    </a>
                                </figure>
                                <div class="product-action">
                                    <a href="#" class="product-btn btn-quickview" title="Quickview"><i class="fa fa-eye"></i>Quick View</a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-image -->

                            <h3><a href="#">Cell Phone</a></h3>

                            <div class="rating-wrap">
                                <span class="rating-before"><span class="rating-line"></span></span>
                                <div class="rating-content">
                                    <div class="star-rating" title="4.00">
                                        <span style="width:0%">4.00</span>
                                    </div><!-- End .star-rating -->
                                </div><!-- End .rating-content -->
                                <span class="rating-after"><span class="rating-line"></span></span>

                            </div><!-- End .rating-wrap -->
                            <span class="price">
                                <ins><span class="amount">$130.00</span></ins>
                            </span>
                        </div><!-- End .product -->
                        <div class="product">
                            <div class="product-image">
                                <figure class="inner-image">
                                    <a href="#">
                                        <img src="image/catalog/porto/index14/product-9.jpg" alt="image">
                                    </a>
                                </figure>
                                <div class="product-action">
                                    <a href="#" class="product-btn btn-quickview" title="Quickview"><i class="fa fa-eye"></i>Quick View</a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-image -->

                            <h3><a href="#">Cell Phone</a></h3>

                            <div class="rating-wrap">
                                <span class="rating-before"><span class="rating-line"></span></span>
                                <div class="rating-content">
                                    <div class="star-rating" title="4.00">
                                        <span style="width:0%">4.00</span>
                                    </div><!-- End .star-rating -->
                                </div><!-- End .rating-content -->
                                <span class="rating-after"><span class="rating-line"></span></span>

                            </div><!-- End .rating-wrap -->
                            <span class="price">
                                <ins><span class="amount">$130.00</span></ins>
                            </span>
                        </div><!-- End .product -->
                        <div class="product">
                            <div class="product-image">
                                <figure class="inner-image">
                                    <a href="#">
                                        <img src="image/catalog/porto/index14/product-10.jpg" alt="image">
                                    </a>
                                </figure>
                                <div class="product-action">
                                    <a href="#" class="product-btn btn-quickview" title="Quickview"><i class="fa fa-eye"></i>Quick View</a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-image -->

                            <h3><a href="#">Cell Phone</a></h3>

                            <div class="rating-wrap">
                                <span class="rating-before"><span class="rating-line"></span></span>
                                <div class="rating-content">
                                    <div class="star-rating" title="4.00">
                                        <span style="width:0%">4.00</span>
                                    </div><!-- End .star-rating -->
                                </div><!-- End .rating-content -->
                                <span class="rating-after"><span class="rating-line"></span></span>

                            </div><!-- End .rating-wrap -->
                            <span class="price">
                                <ins><span class="amount">$130.00</span></ins>
                            </span>
                        </div><!-- End .product -->
                        <div class="product">
                            <div class="product-image">
                                <figure class="inner-image">
                                    <a href="#">
                                        <img src="image/catalog/porto/index14/product-6.jpg" alt="image">
                                    </a>
                                </figure>
                                <div class="product-action">
                                    <a href="#" class="product-btn btn-quickview" title="Quickview"><i class="fa fa-eye"></i>Quick View</a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-image -->

                            <h3><a href="#">Cell Phone</a></h3>

                            <div class="rating-wrap">
                                <span class="rating-before"><span class="rating-line"></span></span>
                                <div class="rating-content">
                                    <div class="star-rating" title="4.00">
                                        <span style="width:0%">4.00</span>
                                    </div><!-- End .star-rating -->
                                </div><!-- End .rating-content -->
                                <span class="rating-after"><span class="rating-line"></span></span>

                            </div><!-- End .rating-wrap -->
                            <span class="price">
                                <ins><span class="amount">$130.00</span></ins>
                            </span>
                        </div><!-- End .product -->
                    </div><!-- End .parallax-arrivals-carousel -->
                </div>
            </div><!-- End .container -->
        </div><!-- End .vcenter -->
    </div><!-- End .vcenter-container -->
</div><!-- End .parallax-section -->',
      1 => '<div class="parallax-section parallax-lg parallax-fixed" id="parallax-3">
    <div class="vcenter-container">
        <div class="vcenter">
            <div class="container">
                <div class="parallax-content clearfix">
                    <h3>New Arrivals</h3>
                    <h2>Fashion Sunglasses</h2>
                    <h4><span>Up to <strong>70% OFF</strong> in the new collection.</span> <a href="#" class="btn btn-white pull-right">SHOP NOW</a></h4>
                </div><!-- End .parallax-content -->
                <div class="light">
                    <h2 class="slider-title text-right">Featured Products</h2>
                    <div class="owl-carousel parallax-featured-carousel-two clearfix">
                        <div class="product">
                            <div class="product-image">
                                <figure class="inner-image">
                                    <a href="#">
                                        <img src="image/catalog/porto/index14/product-6.jpg" alt="image">
                                    </a>
                                </figure>
                                <div class="product-action">
                                    <a href="#" class="product-btn btn-quickview" title="Quickview"><i class="fa fa-eye"></i>Quick View</a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-image -->

                            <h3><a href="#">Cell Phone</a></h3>

                            <div class="rating-wrap">
                                <span class="rating-before"><span class="rating-line"></span></span>
                                <div class="rating-content">
                                    <div class="star-rating" title="4.00">
                                        <span style="width:0%">4.00</span>
                                    </div><!-- End .star-rating -->
                                </div><!-- End .rating-content -->
                                <span class="rating-after"><span class="rating-line"></span></span>

                            </div><!-- End .rating-wrap -->
                            <span class="price">
                                <ins><span class="amount">$130.00</span></ins>
                            </span>
                        </div><!-- End .product -->
                        <div class="product">
                            <div class="product-image">
                                <figure class="inner-image">
                                    <a href="#">
                                        <img src="image/catalog/porto/index14/product-7.jpg" alt="image">
                                    </a>
                                </figure>
                                <div class="product-action">
                                    <a href="#" class="product-btn btn-quickview" title="Quickview"><i class="fa fa-eye"></i>Quick View</a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-image -->

                            <h3><a href="#">Cell Phone</a></h3>

                            <div class="rating-wrap">
                                <span class="rating-before"><span class="rating-line"></span></span>
                                <div class="rating-content">
                                    <div class="star-rating" title="4.00">
                                        <span style="width:0%">4.00</span>
                                    </div><!-- End .star-rating -->
                                </div><!-- End .rating-content -->
                                <span class="rating-after"><span class="rating-line"></span></span>

                            </div><!-- End .rating-wrap -->
                            <span class="price">
                                <ins><span class="amount">$130.00</span></ins>
                            </span>
                        </div><!-- End .product -->
                        <div class="product">
                            <div class="product-image">
                                <figure class="inner-image">
                                    <a href="#">
                                        <img src="image/catalog/porto/index14/product-8.jpg" alt="image">
                                    </a>
                                </figure>
                                <div class="product-action">
                                    <a href="#" class="product-btn btn-quickview" title="Quickview"><i class="fa fa-eye"></i>Quick View</a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-image -->

                            <h3><a href="#">Cell Phone</a></h3>

                            <div class="rating-wrap">
                                <span class="rating-before"><span class="rating-line"></span></span>
                                <div class="rating-content">
                                    <div class="star-rating" title="4.00">
                                        <span style="width:0%">4.00</span>
                                    </div><!-- End .star-rating -->
                                </div><!-- End .rating-content -->
                                <span class="rating-after"><span class="rating-line"></span></span>

                            </div><!-- End .rating-wrap -->
                            <span class="price">
                                <ins><span class="amount">$130.00</span></ins>
                            </span>
                        </div><!-- End .product -->
                        <div class="product">
                            <div class="product-image">
                                <figure class="inner-image">
                                    <a href="#">
                                        <img src="image/catalog/porto/index14/product-9.jpg" alt="image">
                                    </a>
                                </figure>
                                <div class="product-action">
                                    <a href="#" class="product-btn btn-quickview" title="Quickview"><i class="fa fa-eye"></i>Quick View</a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-image -->

                            <h3><a href="#">Cell Phone</a></h3>

                            <div class="rating-wrap">
                                <span class="rating-before"><span class="rating-line"></span></span>
                                <div class="rating-content">
                                    <div class="star-rating" title="4.00">
                                        <span style="width:0%">4.00</span>
                                    </div><!-- End .star-rating -->
                                </div><!-- End .rating-content -->
                                <span class="rating-after"><span class="rating-line"></span></span>

                            </div><!-- End .rating-wrap -->
                            <span class="price">
                                <ins><span class="amount">$130.00</span></ins>
                            </span>
                        </div><!-- End .product -->
                        <div class="product">
                            <div class="product-image">
                                <figure class="inner-image">
                                    <a href="#">
                                        <img src="image/catalog/porto/index14/product-10.jpg" alt="image">
                                    </a>
                                </figure>
                                <div class="product-action">
                                    <a href="#" class="product-btn btn-quickview" title="Quickview"><i class="fa fa-eye"></i>Quick View</a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-image -->

                            <h3><a href="#">Cell Phone</a></h3>

                            <div class="rating-wrap">
                                <span class="rating-before"><span class="rating-line"></span></span>
                                <div class="rating-content">
                                    <div class="star-rating" title="4.00">
                                        <span style="width:0%">4.00</span>
                                    </div><!-- End .star-rating -->
                                </div><!-- End .rating-content -->
                                <span class="rating-after"><span class="rating-line"></span></span>

                            </div><!-- End .rating-wrap -->
                            <span class="price">
                                <ins><span class="amount">$130.00</span></ins>
                            </span>
                        </div><!-- End .product -->
                        <div class="product">
                            <div class="product-image">
                                <figure class="inner-image">
                                    <a href="#">
                                        <img src="image/catalog/porto/index14/product-6.jpg" alt="image">
                                    </a>
                                </figure>
                                <div class="product-action">
                                    <a href="#" class="product-btn btn-quickview" title="Quickview"><i class="fa fa-eye"></i>Quick View</a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-image -->

                            <h3><a href="#">Cell Phone</a></h3>

                            <div class="rating-wrap">
                                <span class="rating-before"><span class="rating-line"></span></span>
                                <div class="rating-content">
                                    <div class="star-rating" title="4.00">
                                        <span style="width:0%">4.00</span>
                                    </div><!-- End .star-rating -->
                                </div><!-- End .rating-content -->
                                <span class="rating-after"><span class="rating-line"></span></span>

                            </div><!-- End .rating-wrap -->
                            <span class="price">
                                <ins><span class="amount">$130.00</span></ins>
                            </span>
                        </div><!-- End .product -->
                    </div><!-- End .parallax-arrivals-carousel -->
                </div>
            </div><!-- End .container -->
        </div><!-- End .vcenter -->
    </div><!-- End .vcenter-container -->
</div><!-- End .parallax-section -->',
    ),
    'layout_id' => '1',
    'position' => 'slideshow',
    'status' => '1',
    'sort_order' => '3',
  ),
); 

$this->model_setting_setting->editSetting( "custom_module", $output );	

?>