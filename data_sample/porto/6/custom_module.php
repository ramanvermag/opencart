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
      $language_id => '<div id="footer-bottom">
                    <div class="container">

                        <div class="footer-left">
                            <span class="logo">
                                <a href="index.html" title="Porto eCommerce Template">
                                    <img class="img-responsive" src="image/catalog/porto/index6/logo_footer_blue.png" alt="Porto eCommerce">
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
                            <img src="image/catalog/porto/index6/payments.png" class="img-responsive" alt="Payments">
                        </div><!-- End .footer-center -->

                        <div class="footer-right">
                        © Copyright 2016. All Rights Reserved.
                        </div><!-- End .footer-right -->

                    </div><!-- End .container -->
                </div>',
      1 => '<div id="footer-bottom">
                    <div class="container">

                        <div class="footer-left">
                            <span class="logo">
                                <a href="index.html" title="Porto eCommerce Template">
                                    <img class="img-responsive" src="image/catalog/porto/index6/logo_footer_blue.png" alt="Porto eCommerce">
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
                            <img src="image/catalog/porto/index6/payments.png" class="img-responsive" alt="Payments">
                        </div><!-- End .footer-center -->

                        <div class="footer-right">
                        © Copyright 2016. All Rights Reserved.
                        </div><!-- End .footer-right -->

                    </div><!-- End .container -->
                </div>',
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
                                            <img src="image/catalog/porto/banner4.png" alt="banner">
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <img src="image/catalog/porto/banner5.png" alt="banner">
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
                                            <img src="image/catalog/porto/banner4.png" alt="banner">
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <img src="image/catalog/porto/banner5.png" alt="banner">
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
      $language_id => '<div id="footer-top">
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
      1 => '<div id="footer-top">
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
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '15',
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
      $language_id => '<div class="row no-margin">
                            <div class="col-sm-3">
                                <div class="banner">
                                    <a href="#"><img src="image/catalog/porto/index6/banner1.png" alt="banner"></a>
                                </div><!-- End .banner -->
                            </div><!-- End .col-sm-3 -->
                            <div class="col-sm-3">
                                <div class="banner">
                                    <a href="#"><img src="image/catalog/porto/index6/banner2.png" alt="banner"></a>
                                </div><!-- End .banner -->
                            </div><!-- End .col-sm-3 -->
                            <div class="col-sm-3">
                                <div class="banner">
                                    <a href="#"><img src="image/catalog/porto/index6/banner3.png" alt="banner"></a>
                                </div><!-- End .banner -->
                            </div><!-- End .col-sm-3 -->
                            <div class="col-sm-3">
                                <div class="banner">
                                    <a href="#"><img src="image/catalog/porto/index6/banner4.png" alt="banner"></a>
                                </div><!-- End .banner -->
                            </div><!-- End .col-sm-3 -->
                        </div>',
      1 => '<div class="row no-margin">
                            <div class="col-sm-3">
                                <div class="banner">
                                    <a href="#"><img src="image/catalog/porto/index6/banner1.png" alt="banner"></a>
                                </div><!-- End .banner -->
                            </div><!-- End .col-sm-3 -->
                            <div class="col-sm-3">
                                <div class="banner">
                                    <a href="#"><img src="image/catalog/porto/index6/banner2.png" alt="banner"></a>
                                </div><!-- End .banner -->
                            </div><!-- End .col-sm-3 -->
                            <div class="col-sm-3">
                                <div class="banner">
                                    <a href="#"><img src="image/catalog/porto/index6/banner3.png" alt="banner"></a>
                                </div><!-- End .banner -->
                            </div><!-- End .col-sm-3 -->
                            <div class="col-sm-3">
                                <div class="banner">
                                    <a href="#"><img src="image/catalog/porto/index6/banner4.png" alt="banner"></a>
                                </div><!-- End .banner -->
                            </div><!-- End .col-sm-3 -->
                        </div>',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '0',
  ),
); 

$this->model_setting_setting->editSetting( "custom_module", $output );	

?>