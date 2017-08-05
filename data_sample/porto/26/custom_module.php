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
      $language_id => '<div class="custom-block hidden-xs"><span style="color: #787d7f">CALL US NOW</span><br><b>+123 5678 890</b></span> </div>',
      1 => '<div class="custom-block hidden-xs"><span style="color: #787d7f">CALL US NOW</span><br><b>+123 5678 890</b></span> </div>',
    ),
    'layout_id' => '99999',
    'position' => 'top_block',
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
	<img src="image/catalog/porto/index7-new/sidebar_banner1.png" alt="">
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
	<img src="image/catalog/porto/index7-new/sidebar_banner1.png" alt="">
</div>',
    ),
    'layout_id' => '2',
    'position' => 'column_right',
    'status' => '1',
    'sort_order' => '0',
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
      $language_id => '<div class="f-right">
	<div class="block-bottom">
		<div class="custom-block"><img src="image/catalog/porto/index7-new/payment-icon.png" style="max-width: 100%;" alt=""></div>
		<div class="social-icons">
			<a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="https://linkedin.com/" title="Linkedin" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
		</div>
	</div>
</div>                
<address>© Porto eCommerce. 2017. All Rights Reserved</address>',
      1 => '<div class="f-right">
	<div class="block-bottom">
		<div class="custom-block"><img src="image/catalog/porto/index7-new/payment-icon.png" style="max-width: 100%;" alt=""></div>
		<div class="social-icons">
			<a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="https://linkedin.com/" title="Linkedin" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
		</div>
	</div>
</div>                
<address>© Porto eCommerce. 2017. All Rights Reserved</address>',
    ),
    'layout_id' => '99999',
    'position' => 'bottom',
    'status' => '1',
    'sort_order' => '',
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
      $language_id => '<div style="height: 45px"></div>',
      1 => '<div style="height: 45px"></div>',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '5',
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
      $language_id => '<div style="height: 50px"></div>',
      1 => '<div style="height: 50px"></div>',
    ),
    'layout_id' => '1',
    'position' => 'content_top',
    'status' => '1',
    'sort_order' => '25',
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
      $language_id => '<div class="grid-banners" style="margin-top: 40px;margin-bottom: 0">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="banner">
                                            <a href="#">
                                                <img src="image/catalog/porto/index12-new/grid1.jpg" alt="Banner">
                                            </a>
                                        </div><!-- End .banner -->
                                        <div class="banner">
                                            <a href="#">
                                                <img src="image/catalog/porto/index12-new/grid2.jpg" alt="Banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-4 -->
                                    <div class="col-sm-8">
                                        <div class="banner">
                                            <a href="#">
                                                <img src="image/catalog/porto/index12-new/grid3.jpg" alt="Banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-8 -->
                                </div><!-- End .row -->
                            </div>',
      1 => '<div class="grid-banners" style="margin-top: 40px;margin-bottom: 0">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="banner">
                                            <a href="#">
                                                <img src="image/catalog/porto/index12-new/grid1.jpg" alt="Banner">
                                            </a>
                                        </div><!-- End .banner -->
                                        <div class="banner">
                                            <a href="#">
                                                <img src="image/catalog/porto/index12-new/grid2.jpg" alt="Banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-4 -->
                                    <div class="col-sm-8">
                                        <div class="banner">
                                            <a href="#">
                                                <img src="image/catalog/porto/index12-new/grid3.jpg" alt="Banner">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-8 -->
                                </div><!-- End .row -->
                            </div>',
    ),
    'layout_id' => '1',
    'position' => 'content_top',
    'status' => '1',
    'sort_order' => '2',
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
      $language_id => '<div style="height: 40px"></div>',
      1 => '<div style="height: 40px"></div>',
    ),
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '25',
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
      $language_id => '<div style="padding-top: 35px"><img src="image/catalog/porto/index12-new/banner-sidebar.jpg" style="display: block;margin: 0px auto" alt=""></div>',
      1 => '<div style="padding-top: 35px"><img src="image/catalog/porto/index12-new/banner-sidebar.jpg" style="display: block;margin: 0px auto" alt=""></div>',
    ),
    'layout_id' => '1',
    'position' => 'column_right',
    'status' => '1',
    'sort_order' => '2',
  ),
  10 => 
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
      $language_id => '<h2 class="filter-title"><strong>Custom HTML Block</strong></h2>
<p style="font-weight:400;font-size:13px;color:#767f84;line-height:24px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus </p>',
      1 => '<h2 class="filter-title"><strong>Custom HTML Block</strong></h2>
<p style="font-weight:400;font-size:13px;color:#767f84;line-height:24px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus </p>',
    ),
    'layout_id' => '1',
    'position' => 'column_right',
    'status' => '1',
    'sort_order' => '5',
  ),
); 

$this->model_setting_setting->editSetting( "custom_module", $output );	

?>