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
      $language_id => '<div class="custom-block f-right"><img src="image/catalog/porto/index1-new/payment-icon.png" alt=""></div>
<address>© Porto eCommerce. 2017. All Rights Reserved</address>',
      1 => '<div class="custom-block f-right"><img src="image/catalog/porto/index1-new/payment-icon.png" alt=""></div>
<address>© Porto eCommerce. 2017. All Rights Reserved</address>',
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
      $language_id => '<div class="home-banner-group">
    <div class="row">
        <div class="col-sm-4">
            <div class="banner">
                <a href="#"><img src="image/catalog/porto/index1-new/img1.jpg" alt="banner"></a>
            </div><!-- End .banner -->
        </div><!-- End .col-sm-4 -->
        <div class="col-sm-4">
            <div class="banner">
                <a href="#"><img src="image/catalog/porto/index1-new/img2.jpg" alt="banner"></a>
            </div><!-- End .banner -->
        </div><!-- End .col-sm-4 -->
        <div class="col-sm-4">
            <div class="banner">
                <a href="#"><img src="image/catalog/porto/index1-new/img3.jpg" alt="banner"></a>
            </div><!-- End .banner -->
        </div><!-- End .col-sm-4 -->
    </div><!-- end .row -->
</div><!-- End .home-banner-group -->',
      1 => '<div class="home-banner-group">
    <div class="row">
        <div class="col-sm-4">
            <div class="banner">
                <a href="#"><img src="image/catalog/porto/index1-new/img1.jpg" alt="banner"></a>
            </div><!-- End .banner -->
        </div><!-- End .col-sm-4 -->
        <div class="col-sm-4">
            <div class="banner">
                <a href="#"><img src="image/catalog/porto/index1-new/img2.jpg" alt="banner"></a>
            </div><!-- End .banner -->
        </div><!-- End .col-sm-4 -->
        <div class="col-sm-4">
            <div class="banner">
                <a href="#"><img src="image/catalog/porto/index1-new/img3.jpg" alt="banner"></a>
            </div><!-- End .banner -->
        </div><!-- End .col-sm-4 -->
    </div><!-- end .row -->
</div><!-- End .home-banner-group -->',
    ),
    'layout_id' => '1',
    'position' => 'content_top',
    'status' => '1',
    'sort_order' => '3',
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
      $language_id => '<div class="widget">
    <div class="owl-carousel widget-banner-slider">
        <div>
            <a href="#">
                <img src="image/catalog/porto/index1-new/ad1n.jpg" alt="banner">
            </a>
        </div>
        <div>
            <a href="#">
                <img src="image/catalog/porto/index1-new/ad1n.jpg" alt="banner">
            </a>
        </div>
        <div>
            <a href="#">
                <img src="image/catalog/porto/index1-new/ad1n.jpg" alt="banner">
            </a>
        </div>
    </div><!-- End .widget-banner-slider -->
</div><!-- End .widget -->',
      1 => '<div class="widget">
    <div class="owl-carousel widget-banner-slider">
        <div>
            <a href="#">
                <img src="image/catalog/porto/index1-new/ad1n.jpg" alt="banner">
            </a>
        </div>
        <div>
            <a href="#">
                <img src="image/catalog/porto/index1-new/ad1n.jpg" alt="banner">
            </a>
        </div>
        <div>
            <a href="#">
                <img src="image/catalog/porto/index1-new/ad1n.jpg" alt="banner">
            </a>
        </div>
    </div><!-- End .widget-banner-slider -->
</div><!-- End .widget -->',
    ),
    'layout_id' => '1',
    'position' => 'column_left',
    'status' => '1',
    'sort_order' => '2',
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
      $language_id => '<div class="widget">
    <div class="owl-carousel testimonial-carousel close-dots">
        <div class="testimonial-container">
        	<div class="testimonial-author clearfix"><div class="img-thumbnail img-thumbnail-small"><img src="image/catalog/porto/testimonial1.jpg" alt="John Smith"></div>
        	    <p>
        	        <strong>John Smith</strong>
        	        <span>CEO & Founder - Okler</span>
        	    </p>
        	</div>
        	
            <blockquote class="testimonial">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est.</p>
            </blockquote>
            <div class="testimonial-arrow-down"></div>
        </div><!--end .testimonial-container -->
        <div class="testimonial-container">
        	<div class="testimonial-author clearfix"><div class="img-thumbnail img-thumbnail-small"><img src="image/catalog/porto/testimonial1.jpg" alt="John Smith"></div>
        	    <p>
        	        <strong>John Smith</strong>
        	        <span>CEO & Founder - Okler</span>
        	    </p>
        	</div>
            <blockquote class="testimonial">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est.</p>
            </blockquote>
            <div class="testimonial-arrow-down"></div>
        </div><!--end .testimonial-container -->
    </div><!-- End .testimonial-caroseul -->
</div><!-- End .widget -->',
      1 => '<div class="widget">
    <div class="owl-carousel testimonial-carousel close-dots">
        <div class="testimonial-container">
        	<div class="testimonial-author clearfix"><div class="img-thumbnail img-thumbnail-small"><img src="image/catalog/porto/testimonial1.jpg" alt="John Smith"></div>
        	    <p>
        	        <strong>John Smith</strong>
        	        <span>CEO & Founder - Okler</span>
        	    </p>
        	</div>
        	
            <blockquote class="testimonial">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est.</p>
            </blockquote>
            <div class="testimonial-arrow-down"></div>
        </div><!--end .testimonial-container -->
        <div class="testimonial-container">
        	<div class="testimonial-author clearfix"><div class="img-thumbnail img-thumbnail-small"><img src="image/catalog/porto/testimonial1.jpg" alt="John Smith"></div>
        	    <p>
        	        <strong>John Smith</strong>
        	        <span>CEO & Founder - Okler</span>
        	    </p>
        	</div>
            <blockquote class="testimonial">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est.</p>
            </blockquote>
            <div class="testimonial-arrow-down"></div>
        </div><!--end .testimonial-container -->
    </div><!-- End .testimonial-caroseul -->
</div><!-- End .widget -->',
    ),
    'layout_id' => '1',
    'position' => 'column_left',
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
      $language_id => '                            <div class="md-margin"></div><!-- space -->

                            <div class="vinfo-boxes-container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="vinfo-box">
                                            <span class="vinfo-box-icon vinfo-box-circle"><i class="fa fa-star"></i></span>
                                            <h3 class="vinfo-box-title">DEDICATED SERVICE</h3>
                                            <p class="vinfo-box-desc">Consult our specialists for help with an order, customization, or design advice.</p><a class="icon-read" href="#">Get in Touch</a>
                                        </div>
                                    </div><!-- End .col-sm-4-->
                                    <div class="col-sm-4">
                                        <div class="vinfo-box">
                                            <span class="vinfo-box-icon vinfo-box-circle"><i class="fa fa-reply"></i></span>
                                            <h3 class="vinfo-box-title">FREE RETURNS</h3>
                                            <p class="vinfo-box-desc">We stand behind our goods and services and want you to be satisfied with them.</p><a class="icon-read" href="#">Returns policy</a>
                                        </div>
                                    </div><!-- End .col-sm-4-->
                                    <div class="col-sm-4">
                                        <div class="vinfo-box">
                                            <span class="vinfo-box-icon vinfo-box-circle"><i class="fa fa-plane"></i></span>
                                            <h3 class="vinfo-box-title">INTERNATIONAL SHIPPING</h3>
                                            <p class="vinfo-box-desc">Currently over 50 countries qualify for express international shipping.</p><a class="icon-read" href="#">Learn more</a>
                                        </div>
                                    </div><!-- End .col-sm-4-->
                                </div><!-- End .row -->
                            </div>',
      1 => '                            <div class="md-margin"></div><!-- space -->

                            <div class="vinfo-boxes-container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="vinfo-box">
                                            <span class="vinfo-box-icon vinfo-box-circle"><i class="fa fa-star"></i></span>
                                            <h3 class="vinfo-box-title">DEDICATED SERVICE</h3>
                                            <p class="vinfo-box-desc">Consult our specialists for help with an order, customization, or design advice.</p><a class="icon-read" href="#">Get in Touch</a>
                                        </div>
                                    </div><!-- End .col-sm-4-->
                                    <div class="col-sm-4">
                                        <div class="vinfo-box">
                                            <span class="vinfo-box-icon vinfo-box-circle"><i class="fa fa-reply"></i></span>
                                            <h3 class="vinfo-box-title">FREE RETURNS</h3>
                                            <p class="vinfo-box-desc">We stand behind our goods and services and want you to be satisfied with them.</p><a class="icon-read" href="#">Returns policy</a>
                                        </div>
                                    </div><!-- End .col-sm-4-->
                                    <div class="col-sm-4">
                                        <div class="vinfo-box">
                                            <span class="vinfo-box-icon vinfo-box-circle"><i class="fa fa-plane"></i></span>
                                            <h3 class="vinfo-box-title">INTERNATIONAL SHIPPING</h3>
                                            <p class="vinfo-box-desc">Currently over 50 countries qualify for express international shipping.</p><a class="icon-read" href="#">Learn more</a>
                                        </div>
                                    </div><!-- End .col-sm-4-->
                                </div><!-- End .row -->
                            </div>',
    ),
    'layout_id' => '1',
    'position' => 'content_top',
    'status' => '1',
    'sort_order' => '10',
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
      $language_id => '<div class="md-margin"></div>',
      1 => '<div class="md-margin"></div>',
    ),
    'layout_id' => '1',
    'position' => 'content_top',
    'status' => '1',
    'sort_order' => '6',
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
      $language_id => '<div class="custom-block hidden-xs">CALL US NOW<br><b>+123 5678 890</b></span> </div>',
      1 => '<div class="custom-block hidden-xs">CALL US NOW<br><b>+123 5678 890</b></span> </div>',
    ),
    'layout_id' => '99999',
    'position' => 'top_block',
    'status' => '1',
    'sort_order' => '',
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
      $language_id => '<div class="product-block"> 
	<div>
		<i class="porto-icon-shipped"></i><h3>FREE<br>SHIPPING</h3>
	</div>
	
	<div>
		<i class="porto-icon-us-dollar"></i><h3>100% MONEY<br>BACK GUARANTEE</h3>
	</div>
	
	<div>
		<i class="porto-icon-online-support"></i><h3>ONLINE<br>SUPPORT 24/7</h3>
	</div>
</div>

<div style="padding-bottom: 14px;text-align: center">
	<img src="image/catalog/porto/index1-new/sidebar-banner.jpg" alt="">
</div>',
      1 => '<div class="product-block"> 
	<div>
		<i class="porto-icon-shipped"></i><h3>FREE<br>SHIPPING</h3>
	</div>
	
	<div>
		<i class="porto-icon-us-dollar"></i><h3>100% MONEY<br>BACK GUARANTEE</h3>
	</div>
	
	<div>
		<i class="porto-icon-online-support"></i><h3>ONLINE<br>SUPPORT 24/7</h3>
	</div>
</div>

<div style="padding-bottom: 14px;text-align: center">
	<img src="image/catalog/porto/index1-new/sidebar-banner.jpg" alt="">
</div>',
    ),
    'layout_id' => '2',
    'position' => 'column_right',
    'status' => '1',
    'sort_order' => '0',
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
      $language_id => '<div class="widget">
    <h2 class="widget-title">Custom HTML block</h2>
    <h5 style="font-weight:600;font-size:14px;color:#7a7d82;line-height:1;margin-bottom:13px;">This is a custom sub-title.</h5>
    <p style="font-weight:400;font-size:15px;color:#21293c;line-height:1.42;margin: 0px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus </p>
</div>',
      1 => '<div class="widget">
    <h2 class="widget-title">Custom HTML block</h2>
    <h5 style="font-weight:600;font-size:14px;color:#7a7d82;line-height:1;margin-bottom:13px;">This is a custom sub-title.</h5>
    <p style="font-weight:400;font-size:15px;color:#21293c;line-height:1.42;margin: 0px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus </p>
</div>',
    ),
    'layout_id' => '3',
    'position' => 'column_left',
    'status' => '1',
    'sort_order' => '16',
  ),
); 

$this->model_setting_setting->editSetting( "custom_module", $output );	

?>