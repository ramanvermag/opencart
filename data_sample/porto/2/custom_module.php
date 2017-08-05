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
      $language_id => '<div style="height: 30px" class="hidden-xs hidden-sm"></div>',
      1 => '<div style="height: 30px" class="hidden-xs hidden-sm"></div>',
    ),
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '15',
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
      $language_id => '<div class="sm-margin"></div>',
      1 => '<div class="sm-margin"></div>',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '0',
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
      $language_id => '                                <div class="links-block">
                                    <div class="links-block-title">
                                        <i class="fa fa-navicon"></i>
                                        Top Categories
                                    </div>
                                    <div class="links-block-content">
                                        <ul>
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Sports</a></li>
                                            <li><a href="#">Bags</a></li>
                                            <li><a href="#">Sun Glasses</a></li>
                                            <li><a href="#">Furnitures</a></li>
                                            <li><a href="#">Fashions</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="xs-margin"></div><!-- space -->
                                <div class="links-block" style="margin-bottom: 20px">
                                    <div class="links-block-title">
                                        <i class="fa fa-navicon"></i>
                                        Trending
                                    </div>
                                    <div class="links-block-content">
                                        <ul>
                                            <li><a href="#">Huge Sale - 70% Off</a></li>
                                            <li><a href="#">New Arrivals</a></li>
                                        </ul>
                                    </div>
                                </div>',
      1 => '                                <div class="links-block">
                                    <div class="links-block-title">
                                        <i class="fa fa-navicon"></i>
                                        Top Categories
                                    </div>
                                    <div class="links-block-content">
                                        <ul>
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Sports</a></li>
                                            <li><a href="#">Bags</a></li>
                                            <li><a href="#">Sun Glasses</a></li>
                                            <li><a href="#">Furnitures</a></li>
                                            <li><a href="#">Fashions</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="xs-margin"></div><!-- space -->
                                <div class="links-block" style="margin-bottom: 20px">
                                    <div class="links-block-title">
                                        <i class="fa fa-navicon"></i>
                                        Trending
                                    </div>
                                    <div class="links-block-content">
                                        <ul>
                                            <li><a href="#">Huge Sale - 70% Off</a></li>
                                            <li><a href="#">New Arrivals</a></li>
                                        </ul>
                                    </div>
                                </div>',
    ),
    'layout_id' => '1',
    'position' => 'column_left',
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
      $language_id => '                            <div class="header-minicart">
                                <div class="header-contact hidden-xs">
                                    <i class="fa fa-phone"></i> +(404) 158 14 25 78 
                                    <span class="separator">|</span>
                                    <a href="#">CONTACT US</a>
                                </div><!-- End .header-contact -->
                            </div><!-- End .header-mini-cart -->',
      1 => '                            <div class="header-minicart">
                                <div class="header-contact hidden-xs">
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
); 

$this->model_setting_setting->editSetting( "custom_module", $output );	

?>