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
      $language_id => '<div class="custom-block hidden-xs"><span style="color: #bde1f5">CALL US NOW</span><br><b>+123 5678 890</b></span> </div>',
      1 => '<div class="custom-block hidden-xs"><span style="color: #bde1f5">CALL US NOW</span><br><b>+123 5678 890</b></span> </div>',
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
      $language_id => '<div class="sm-margin half"></div>',
      1 => '<div class="sm-margin half"></div>',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
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
      $language_id => '<div class="side-custom-menu">
	<h2>TOP CATEGORIES</h2>
	<ul>
		<li><a href="index.php?route=product/category&path=25"><img src="image/catalog/porto/index2-new/shirt.png" alt=""> Fashion</a></li>
		<li><a href="index.php?route=product/category&path=20"><img src="image/catalog/porto/index2-new/computer.png" alt=""> Electronics</a></li>
		<li><a href="index.php?route=product/category&path=25"><img src="image/catalog/porto/index2-new/gifts.png" alt=""> Gifts</a></li>
		<li><a href="index.php?route=product/category&path=25"><img src="image/catalog/porto/index2-new/garden.png" alt=""> Home &amp; Garden</a></li>
		<li><a href="index.php?route=product/category&path=25"><img src="image/catalog/porto/index2-new/music.png" alt=""> Music</a></li>
		<li><a href="index.php?route=product/category&path=25"><img src="image/catalog/porto/index2-new/sport.png" alt=""> Sports</a></li>
	</ul>
	<div class="action">
		<a href="#" class="btn btn-default">HUGE SALE - 70% Off</a>
	</div>
</div>',
      1 => '<div class="side-custom-menu">
	<h2>TOP CATEGORIES</h2>
	<ul>
		<li><a href="index.php?route=product/category&path=25"><img src="image/catalog/porto/index2-new/shirt.png" alt=""> Fashion</a></li>
		<li><a href="index.php?route=product/category&path=20"><img src="image/catalog/porto/index2-new/computer.png" alt=""> Electronics</a></li>
		<li><a href="index.php?route=product/category&path=25"><img src="image/catalog/porto/index2-new/gifts.png" alt=""> Gifts</a></li>
		<li><a href="index.php?route=product/category&path=25"><img src="image/catalog/porto/index2-new/garden.png" alt=""> Home &amp; Garden</a></li>
		<li><a href="index.php?route=product/category&path=25"><img src="image/catalog/porto/index2-new/music.png" alt=""> Music</a></li>
		<li><a href="index.php?route=product/category&path=25"><img src="image/catalog/porto/index2-new/sport.png" alt=""> Sports</a></li>
	</ul>
	<div class="action">
		<a href="#" class="btn btn-default">HUGE SALE - 70% Off</a>
	</div>
</div>',
    ),
    'layout_id' => '1',
    'position' => 'column_left',
    'status' => '1',
    'sort_order' => '0',
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
      $language_id => '<div class="row banner-row">
    <div id="banner-container">
        <div class="grid-sizer"></div>
        <div class="banner" style="margin-bottom: 15px">
            <a href="#"><img src="image/catalog/porto/index2-new/image01.jpg" alt="Banner"></a>
        </div>
        <div class="banner w2" style="margin-bottom: 28px">
            <a href="#"><img src="image/catalog/porto/index2-new/image21.jpg" alt="Banner"></a>
        </div>
        <div class="banner" style="margin-bottom: 15px">
            <a href="#"><img src="image/catalog/porto/index2-new/image11.jpg" alt="Banner"></a>
        </div>
        <div class="banner" style="margin-bottom: 15px">
            <a href="#"><img src="image/catalog/porto/index2-new/image12.jpg" alt="Banner"></a>
        </div>
        
        <div class="banner" style="margin-bottom: 15px">
            <a href="#"><img src="image/catalog/porto/index2-new/image02.jpg" alt="Banner"></a>
        </div>

        <div class="banner w2" style="margin-bottom: 29px">
            <a href="#"><img src="image/catalog/porto/index2-new/image22.jpg" alt="Banner"></a>
        </div>

        <div class="banner w2">
            <a href="#"><img src="image/catalog/porto/index2-new/image23.jpg" alt="Banner"></a>
        </div>

        <div class="banner">
            <a href="#"><img src="image/catalog/porto/index2-new/image03.jpg" alt="Banner"></a>
        </div>
        
        <div class="banner">
            <a href="#"><img src="image/catalog/porto/index2-new/image13.jpg" alt="Banner"></a>
        </div>
    </div><!-- End .banner-container -->
</div>',
      1 => '<div class="row banner-row">
    <div id="banner-container">
        <div class="grid-sizer"></div>
        <div class="banner" style="margin-bottom: 15px">
            <a href="#"><img src="image/catalog/porto/index2-new/image01.jpg" alt="Banner"></a>
        </div>
        <div class="banner w2" style="margin-bottom: 28px">
            <a href="#"><img src="image/catalog/porto/index2-new/image21.jpg" alt="Banner"></a>
        </div>
        <div class="banner" style="margin-bottom: 15px">
            <a href="#"><img src="image/catalog/porto/index2-new/image11.jpg" alt="Banner"></a>
        </div>
        <div class="banner" style="margin-bottom: 15px">
            <a href="#"><img src="image/catalog/porto/index2-new/image12.jpg" alt="Banner"></a>
        </div>
        
        <div class="banner" style="margin-bottom: 15px">
            <a href="#"><img src="image/catalog/porto/index2-new/image02.jpg" alt="Banner"></a>
        </div>

        <div class="banner w2" style="margin-bottom: 29px">
            <a href="#"><img src="image/catalog/porto/index2-new/image22.jpg" alt="Banner"></a>
        </div>

        <div class="banner w2">
            <a href="#"><img src="image/catalog/porto/index2-new/image23.jpg" alt="Banner"></a>
        </div>

        <div class="banner">
            <a href="#"><img src="image/catalog/porto/index2-new/image03.jpg" alt="Banner"></a>
        </div>
        
        <div class="banner">
            <a href="#"><img src="image/catalog/porto/index2-new/image13.jpg" alt="Banner"></a>
        </div>
    </div><!-- End .banner-container -->
</div>',
    ),
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '2',
  ),
); 

$this->model_setting_setting->editSetting( "custom_module", $output );	

?>