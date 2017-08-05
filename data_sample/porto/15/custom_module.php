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
      $language_id => '<div class="container banner-group">
    <div class="row">
        <div class="col-sm-4">
            <div class="banner">
                <img src="image/catalog/porto/index15/blank.png" class="blank-img" alt="banner">
                <div class="banner-content light">
                    <div class="vcenter-container">
                        <div class="vcenter">
                            <h3>The Wedding Day</h3>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a arcu lacinia, ornare lorem maximus, consequat mauris. Nam vitae risus at leo convallis sagittis.</p>
                            <a href="#">Shop Now</a>
                        </div><!-- End .vcenter -->
                    </div><!-- End .vcenter-container -->
                </div><!-- End .banner-content -->
            </div><!-- End .banner -->
        </div><!-- End .col-sm-4 -->
        <div class="col-sm-8">
            <div class="banner">
                <a href="#">
                    <img src="image/catalog/porto/index15/banner1.jpg" alt="banner">
                </a>
            </div><!-- End .banner -->
        </div><!-- End .col-sm-8 -->
    </div><!-- End .row -->
    <div class="row">
        <div class="col-sm-8">
            <div class="banner">
                <a href="#">
                    <img src="image/catalog/porto/index15/banner2.jpg" alt="banner">
                </a>
            </div><!-- End .banner -->
        </div><!-- End .col-sm-8 -->
        <div class="col-sm-4">
            <div class="banner">
                <img src="image/catalog/porto/index15/blank.png" class="blank-img" alt="banner">
                <div class="banner-content">
                    <div class="vcenter-container">
                        <div class="vcenter">
                            <h3>The Wedding Day</h3>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a arcu lacinia, ornare lorem maximus, consequat mauris. Nam vitae risus at leo convallis sagittis.</p>
                            <a href="#">Shop Now</a>
                        </div><!-- End .vcenter -->
                    </div><!-- End .vcenter-container -->
                </div><!-- End .banner-content -->
            </div><!-- End .banner -->
        </div><!-- End .col-sm-4 -->
    </div><!-- End .row -->

    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="banner">
                <a href="#">
                    <img src="image/catalog/porto/index15/banner3.jpg" alt="banner">
                </a>
            </div><!-- End .banner -->
        </div><!-- End .col-md-3 -->
        <div class="col-md-3 col-sm-6 col-xs-6 col-md-push-6">
            <div class="banner">
                <a href="#">
                    <img src="image/catalog/porto/index15/banner5.jpg" alt="banner">
                </a>
            </div><!-- End .banner -->
        </div><!-- End .col-md-3 -->
        <div class="col-md-6 col-sm-12 col-xs-12 col-md-pull-3">
            <div class="banner">
                <a href="#">
                    <img src="image/catalog/porto/index15/banner4.jpg" alt="banner">
                </a>
            </div><!-- End .banner -->
        </div><!-- End .col-md-6 -->
    </div><!-- End .row -->
</div><!-- End .container -->',
      1 => '<div class="container banner-group">
    <div class="row">
        <div class="col-sm-4">
            <div class="banner">
                <img src="image/catalog/porto/index15/blank.png" class="blank-img" alt="banner">
                <div class="banner-content light">
                    <div class="vcenter-container">
                        <div class="vcenter">
                            <h3>The Wedding Day</h3>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a arcu lacinia, ornare lorem maximus, consequat mauris. Nam vitae risus at leo convallis sagittis.</p>
                            <a href="#">Shop Now</a>
                        </div><!-- End .vcenter -->
                    </div><!-- End .vcenter-container -->
                </div><!-- End .banner-content -->
            </div><!-- End .banner -->
        </div><!-- End .col-sm-4 -->
        <div class="col-sm-8">
            <div class="banner">
                <a href="#">
                    <img src="image/catalog/porto/index15/banner1.jpg" alt="banner">
                </a>
            </div><!-- End .banner -->
        </div><!-- End .col-sm-8 -->
    </div><!-- End .row -->
    <div class="row">
        <div class="col-sm-8">
            <div class="banner">
                <a href="#">
                    <img src="image/catalog/porto/index15/banner2.jpg" alt="banner">
                </a>
            </div><!-- End .banner -->
        </div><!-- End .col-sm-8 -->
        <div class="col-sm-4">
            <div class="banner">
                <img src="image/catalog/porto/index15/blank.png" class="blank-img" alt="banner">
                <div class="banner-content">
                    <div class="vcenter-container">
                        <div class="vcenter">
                            <h3>The Wedding Day</h3>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a arcu lacinia, ornare lorem maximus, consequat mauris. Nam vitae risus at leo convallis sagittis.</p>
                            <a href="#">Shop Now</a>
                        </div><!-- End .vcenter -->
                    </div><!-- End .vcenter-container -->
                </div><!-- End .banner-content -->
            </div><!-- End .banner -->
        </div><!-- End .col-sm-4 -->
    </div><!-- End .row -->

    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="banner">
                <a href="#">
                    <img src="image/catalog/porto/index15/banner3.jpg" alt="banner">
                </a>
            </div><!-- End .banner -->
        </div><!-- End .col-md-3 -->
        <div class="col-md-3 col-sm-6 col-xs-6 col-md-push-6">
            <div class="banner">
                <a href="#">
                    <img src="image/catalog/porto/index15/banner5.jpg" alt="banner">
                </a>
            </div><!-- End .banner -->
        </div><!-- End .col-md-3 -->
        <div class="col-md-6 col-sm-12 col-xs-12 col-md-pull-3">
            <div class="banner">
                <a href="#">
                    <img src="image/catalog/porto/index15/banner4.jpg" alt="banner">
                </a>
            </div><!-- End .banner -->
        </div><!-- End .col-md-6 -->
    </div><!-- End .row -->
</div><!-- End .container -->',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '4',
  ),
); 

$this->model_setting_setting->editSetting( "custom_module", $output );	

?>