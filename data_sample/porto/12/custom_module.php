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
                                    <img class="img-responsive" src="image/catalog/porto/logo_footer.png" alt="Porto eCommerce">
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
                                    <img class="img-responsive" src="image/catalog/porto/logo_footer.png" alt="Porto eCommerce">
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
                                <div class="header-contact hidden-xs hidden-sm">
                                    <i class="fa fa-phone"></i> +(404) 158 14 25 78 
                                    <span class="separator">|</span>
                                    <a href="#">CONTACT US</a>
                                </div><!-- End .header-contact -->
                            </div><!-- End .header-mini-cart -->',
      1 => '                            <div class="header-minicart">
                                <div class="header-contact hidden-xs hidden-sm">
                                    <i class="fa fa-phone"></i> +(404) 158 14 25 78 
                                    <span class="separator">|</span>
                                    <a href="#">CONTACT US</a>
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
      $language_id => '<div class="info-boxes-fullwidth-container">
                    <div class="container">
                        <div class="row clean-row info-boxes-container">
                            <div class="col-md-4 info-box-container">
                                <div class="info-box">
                                    <div class="info-box-icon">
                                        <i class="fa fa-truck"></i>
                                    </div>
                                    <div class="info-box-content">
                                        <h3 class="info-box-title">FREE SHIPPING &amp; RETURN</h3>
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
      1 => '<div class="info-boxes-fullwidth-container">
                    <div class="container">
                        <div class="row clean-row info-boxes-container">
                            <div class="col-md-4 info-box-container">
                                <div class="info-box">
                                    <div class="info-box-icon">
                                        <i class="fa fa-truck"></i>
                                    </div>
                                    <div class="info-box-content">
                                        <h3 class="info-box-title">FREE SHIPPING &amp; RETURN</h3>
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
    'sort_order' => '4',
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
      $language_id => '<div class="xlg-margin"></div>',
      1 => '<div class="xlg-margin"></div>',
    ),
    'layout_id' => '1',
    'position' => 'column_right',
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
      $language_id => '<div class="sidebar" style="margin-top:-15px;padding: 0px"><div class="widget-block"></div></div>',
      1 => '<div class="sidebar" style="margin-top:-15px;padding: 0px"><div class="widget-block"></div></div>',
    ),
    'layout_id' => '1',
    'position' => 'column_right',
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
      $language_id => '<div class="widget custom-text-widget">
                                <h2>Custom HTML Block</h2>
                                <h5>This is a custom sub-title.</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus</p>
                            </div>',
      1 => '<div class="widget custom-text-widget">
                                <h2>Custom HTML Block</h2>
                                <h5>This is a custom sub-title.</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus</p>
                            </div>',
    ),
    'layout_id' => '1',
    'position' => 'column_right',
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
      $language_id => '<div class="grid-banners" style="margin-top: 40px">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="banner">
                                            <a href="#">
                                                <img src="image/catalog/porto/index12/banner4.jpg" alt="Banner">
                                            </a>
                                        </div><!-- End .banner -->
                                        <div class="banner">
                                            <a href="#">
                                                <img src="image/catalog/porto/index12/banner5.jpg" alt="Banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-4 -->
                                    <div class="col-sm-8">
                                        <div class="banner">
                                            <a href="#">
                                                <img src="image/catalog/porto/index12/banner6.jpg" alt="Banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-8 -->
                                </div><!-- End .row -->
                            </div>',
      1 => '<div class="grid-banners" style="margin-top: 40px">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="banner">
                                            <a href="#">
                                                <img src="image/catalog/porto/index12/banner4.jpg" alt="Banner">
                                            </a>
                                        </div><!-- End .banner -->
                                        <div class="banner">
                                            <a href="#">
                                                <img src="image/catalog/porto/index12/banner5.jpg" alt="Banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-4 -->
                                    <div class="col-sm-8">
                                        <div class="banner">
                                            <a href="#">
                                                <img src="image/catalog/porto/index12/banner6.jpg" alt="Banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-8 -->
                                </div><!-- End .row -->
                            </div>',
    ),
    'layout_id' => '1',
    'position' => 'content_top',
    'status' => '1',
    'sort_order' => '5',
  ),
  9 => 
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
      $language_id => '                            <div class="brands-carousel-container no-padding">
                                <h2 class="slider-title">
                                    <span class="inline-title">Our Brands</span>
                                    <span class="line"></span>
                                </h2>
                                <div class="owl-carousel brands-carousel">
                                    <div class="brand">
                                        <a href="#"><img src="image/catalog/porto/index12/brand1.png" alt="Brand name"></a>
                                    </div><!-- End .brand -->
                                    <div class="brand">
                                        <a href="#"><img src="image/catalog/porto/index12/brand2.png" alt="Brand name"></a>
                                    </div><!-- End .brand -->
                                    <div class="brand">
                                        <a href="#"><img src="image/catalog/porto/index12/brand3.png" alt="Brand name"></a>
                                    </div><!-- End .brand -->
                                    <div class="brand">
                                        <a href="#"><img src="image/catalog/porto/index12/brand4.png" alt="Brand name"></a>
                                    </div><!-- End .brand -->
                                    <div class="brand">
                                        <a href="#"><img src="image/catalog/porto/index12/brand5.png" alt="Brand name"></a>
                                    </div><!-- End .brand -->
                                    <div class="brand">
                                        <a href="#"><img src="image/catalog/porto/index12/brand2.png" alt="Brand name"></a>
                                    </div><!-- End .brand -->
                                    <div class="brand">
                                        <a href="#"><img src="image/catalog/porto/index12/brand1.png" alt="Brand name"></a>
                                    </div><!-- End .brand -->
                                </div><!-- End brands-carousel -->
                            </div><!-- end .brands-carousel-container -->

                            <div class="md-margin2x hidden-xs" style="margin-bottom: 35px"></div><!-- space -->',
      1 => '                            <div class="brands-carousel-container no-padding">
                                <h2 class="slider-title">
                                    <span class="inline-title">Our Brands</span>
                                    <span class="line"></span>
                                </h2>
                                <div class="owl-carousel brands-carousel">
                                    <div class="brand">
                                        <a href="#"><img src="image/catalog/porto/index12/brand1.png" alt="Brand name"></a>
                                    </div><!-- End .brand -->
                                    <div class="brand">
                                        <a href="#"><img src="image/catalog/porto/index12/brand2.png" alt="Brand name"></a>
                                    </div><!-- End .brand -->
                                    <div class="brand">
                                        <a href="#"><img src="image/catalog/porto/index12/brand3.png" alt="Brand name"></a>
                                    </div><!-- End .brand -->
                                    <div class="brand">
                                        <a href="#"><img src="image/catalog/porto/index12/brand4.png" alt="Brand name"></a>
                                    </div><!-- End .brand -->
                                    <div class="brand">
                                        <a href="#"><img src="image/catalog/porto/index12/brand5.png" alt="Brand name"></a>
                                    </div><!-- End .brand -->
                                    <div class="brand">
                                        <a href="#"><img src="image/catalog/porto/index12/brand2.png" alt="Brand name"></a>
                                    </div><!-- End .brand -->
                                    <div class="brand">
                                        <a href="#"><img src="image/catalog/porto/index12/brand1.png" alt="Brand name"></a>
                                    </div><!-- End .brand -->
                                </div><!-- End brands-carousel -->
                            </div><!-- end .brands-carousel-container -->

                            <div class="md-margin2x hidden-xs" style="margin-bottom: 35px"></div><!-- space -->',
    ),
    'layout_id' => '1',
    'position' => 'content_top',
    'status' => '1',
    'sort_order' => '14',
  ),
); 

$this->model_setting_setting->editSetting( "custom_module", $output );	

?>