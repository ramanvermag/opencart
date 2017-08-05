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
                                    <img class="img-responsive" src="image/catalog/porto/index11/logo_footer_white.png" alt="Porto eCommerce">
                                </a>
                            </span>
                            <div class="social-icons">
                                <a href="#" class="social-icon icon-facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#" class="social-icon icon-twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon icon-linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
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
                                    <img class="img-responsive" src="image/catalog/porto/index11/logo_footer_white.png" alt="Porto eCommerce">
                                </a>
                            </span>
                            <div class="social-icons">
                                <a href="#" class="social-icon icon-facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#" class="social-icon icon-twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon icon-linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
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
                                            <img src="image/catalog/porto/index11/ad1.jpg" alt="banner">
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <img src="image/catalog/porto/index11/ad2.jpg" alt="banner">
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
                                            <img src="image/catalog/porto/index11/ad1.jpg" alt="banner">
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <img src="image/catalog/porto/index11/ad2.jpg" alt="banner">
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
      $language_id => '<div class="content-info-box-wrapper">
                    <div class="container">
                        <div class="row clean-row info-boxes-container">
                            <div class="col-md-4 info-box-container">
                                <div class="info-box">
                                    <div class="info-box-icon">
                                        <i class="fa fa-truck"></i>
                                    </div>
                                    <div class="info-box-content">
                                        <h3 class="info-box-title">FREE SHIPPING & RETURN</h3>
                                        <div class="info-box-desc">Free shipping on all orders over $99.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 info-box-container">
                                <div class="info-box">
                                    <div class="info-box-icon">
                                        <i class="fa fa-dollar"></i>
                                    </div>
                                    <div class="info-box-content">
                                        <h3 class="info-box-title">MONEY BACK GUARANTEE</h3>
                                        <div class="info-box-desc">100% money back guarantee.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 info-box-container">
                                <div class="info-box">
                                    <div class="info-box-icon">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                    <div class="info-box-content">
                                        <h3 class="info-box-title">ONLINE SUPPORT 24/7</h3>
                                        <div class="info-box-desc">Lorem ipsum dolor sit amet.</div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div>',
      1 => '<div class="content-info-box-wrapper">
                    <div class="container">
                        <div class="row clean-row info-boxes-container">
                            <div class="col-md-4 info-box-container">
                                <div class="info-box">
                                    <div class="info-box-icon">
                                        <i class="fa fa-truck"></i>
                                    </div>
                                    <div class="info-box-content">
                                        <h3 class="info-box-title">FREE SHIPPING & RETURN</h3>
                                        <div class="info-box-desc">Free shipping on all orders over $99.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 info-box-container">
                                <div class="info-box">
                                    <div class="info-box-icon">
                                        <i class="fa fa-dollar"></i>
                                    </div>
                                    <div class="info-box-content">
                                        <h3 class="info-box-title">MONEY BACK GUARANTEE</h3>
                                        <div class="info-box-desc">100% money back guarantee.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 info-box-container">
                                <div class="info-box">
                                    <div class="info-box-icon">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                    <div class="info-box-content">
                                        <h3 class="info-box-title">ONLINE SUPPORT 24/7</h3>
                                        <div class="info-box-desc">Lorem ipsum dolor sit amet.</div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div>',
    ),
    'layout_id' => '1',
    'position' => 'slideshow',
    'status' => '1',
    'sort_order' => '3',
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
      $language_id => '<div class="lg-margin"></div>',
      1 => '<div class="lg-margin"></div>',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '3',
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
      $language_id => '<div class="lg-margin"></div><!-- space -->
<div class="row">
    <div class="col-sm-4">
        <div class="icon-box clearfix">
            <div class="icon-container">
                <i class="fa fa-star"></i>
            </div>
            <div class="icon-box-block">
                <h3>Customer Support</h3>
                <p>We really care about you and your website as much as you do. Purchasing Porto or any other theme from us you get 100% free support.</p>
            </div><!-- End .icon-box-block -->
        </div><!-- End .icon-box -->
    </div><!-- End .col-sm-4 -->
    <div class="col-sm-4">
        <div class="icon-box clearfix">
            <div class="icon-container">
                <i class="fa fa-reply"></i>
            </div>
            <div class="icon-box-block">
                <h3>Fully Customizable</h3>
                <p>With Porto you can customize the layout, colors and styles within only a few minutes. Start creating an amazing website right now!</p>
            </div><!-- End .icon-box-block -->
        </div><!-- End .icon-box -->
    </div><!-- End .col-sm-4 -->
    <div class="col-sm-4">
        <div class="icon-box clearfix">
            <div class="icon-container">
                <i class="fa fa-truck"></i>
            </div>
            <div class="icon-box-block">
                <h3>Powerful Admin</h3>
                <p>Porto has very powerful admin features to help customer to build their own shop in minutes without any special skills in web development.</p>
            </div><!-- End .icon-box-block -->
        </div><!-- End .icon-box -->
    </div><!-- End .col-sm-4 -->
</div><!-- End .row -->
<div class="lg-margin"></div><!--space -->',
      1 => '<div class="lg-margin"></div><!-- space -->
<div class="row">
    <div class="col-sm-4">
        <div class="icon-box clearfix">
            <div class="icon-container">
                <i class="fa fa-star"></i>
            </div>
            <div class="icon-box-block">
                <h3>Customer Support</h3>
                <p>We really care about you and your website as much as you do. Purchasing Porto or any other theme from us you get 100% free support.</p>
            </div><!-- End .icon-box-block -->
        </div><!-- End .icon-box -->
    </div><!-- End .col-sm-4 -->
    <div class="col-sm-4">
        <div class="icon-box clearfix">
            <div class="icon-container">
                <i class="fa fa-reply"></i>
            </div>
            <div class="icon-box-block">
                <h3>Fully Customizable</h3>
                <p>With Porto you can customize the layout, colors and styles within only a few minutes. Start creating an amazing website right now!</p>
            </div><!-- End .icon-box-block -->
        </div><!-- End .icon-box -->
    </div><!-- End .col-sm-4 -->
    <div class="col-sm-4">
        <div class="icon-box clearfix">
            <div class="icon-container">
                <i class="fa fa-truck"></i>
            </div>
            <div class="icon-box-block">
                <h3>Powerful Admin</h3>
                <p>Porto has very powerful admin features to help customer to build their own shop in minutes without any special skills in web development.</p>
            </div><!-- End .icon-box-block -->
        </div><!-- End .icon-box -->
    </div><!-- End .col-sm-4 -->
</div><!-- End .row -->
<div class="lg-margin"></div><!--space -->',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '5',
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
      $language_id => '<div class="xlg-margin"></div>

<div class="container">
    <h3 class="slider-title">
        <span class="inline-title">Our BRANDS</span>
        <span class="line"></span>
    </h3>
    <div class="owl-carousel brands-carousel2 nav-ralign">
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index11/brand6.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index11/brand6.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index11/brand6.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index11/brand6.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index11/brand6.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index11/brand6.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index11/brand6.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
    </div><!-- End brands-carousel -->
</div><!-- End .container -->

<div class="xlg-margin"></div>',
      1 => '<div class="xlg-margin"></div>

<div class="container">
    <h3 class="slider-title">
        <span class="inline-title">Our BRANDS</span>
        <span class="line"></span>
    </h3>
    <div class="owl-carousel brands-carousel2 nav-ralign">
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index11/brand6.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index11/brand6.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index11/brand6.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index11/brand6.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index11/brand6.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index11/brand6.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index11/brand6.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
    </div><!-- End brands-carousel -->
</div><!-- End .container -->

<div class="xlg-margin"></div>',
    ),
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '4',
  ),
); 

$this->model_setting_setting->editSetting( "custom_module", $output );	

?>