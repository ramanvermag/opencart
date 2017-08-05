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
	<img src="image/catalog/porto/index15-new/sidebar-banner.jpg" alt="">
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
	<img src="image/catalog/porto/index15-new/sidebar-banner.jpg" alt="">
</div>',
    ),
    'layout_id' => '2',
    'position' => 'column_right',
    'status' => '1',
    'sort_order' => '0',
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
      $language_id => '<div class="top-block-header">
  <div class="container clearfix">
	<ul>
		<li>Free shipping & return</li>
		<li>Money back guarantee</li>
		<li>Online support 24/7</li>
		<li class="right">Call us &nbsp; + 000 1584 2578</li>
	</ul>
  </div>
</div>',
      1 => '<div class="top-block-header">
  <div class="container clearfix">
	<ul>
		<li>Free shipping & return</li>
		<li>Money back guarantee</li>
		<li>Online support 24/7</li>
		<li class="right">Call us &nbsp; + 000 1584 2578</li>
	</ul>
  </div>
</div>',
    ),
    'layout_id' => '99999',
    'position' => 'header_notice',
    'status' => '1',
    'sort_order' => '',
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
      $language_id => '<div class="xlg-margin"></div>
<div class="row" style="position: relative">
  <div class="insta-item">
    <div class="col-lg-2 col-md-3 col-sm4 col-xs-6">
      <a class="image-link" href="#" style="margin:10px 0;"><img src="image/catalog/porto/index15-new/insta_img1.jpg"  alt="" style="width:100%;"></a>
    </div> 
    <div class="col-lg-2 col-md-3 col-sm4 col-xs-6">
      <a class="image-link" href="#" style="margin:10px 0;"><img src="image/catalog/porto/index15-new/insta_img2.jpg"  alt="" style="width:100%;"></a>
    </div> 
    <div class="col-lg-2 col-md-3 col-sm4 col-xs-6">
      <a class="image-link" href="#" style="margin:10px 0;"><img src="image/catalog/porto/index15-new/insta_img3.jpg"  alt="" style="width:100%;"></a>
    </div> 
    <div class="col-lg-2 col-md-3 col-sm4 col-xs-6">
      <a class="image-link" href="#" style="margin:10px 0;"><img src="image/catalog/porto/index15-new/insta_img4.jpg"  alt="" style="width:100%;"></a>
    </div> 
    <div class="col-lg-2 col-md-3 col-sm4 col-xs-6">
      <a class="image-link" href="#" style="margin:10px 0;"><img src="image/catalog/porto/index15-new/insta_img5.jpg"  alt="" style="width:100%;"></a>
    </div> 
    <div class="col-lg-2 col-md-3 col-sm4 col-xs-6">
      <a class="image-link" href="#" style="margin:10px 0;"><img src="image/catalog/porto/index15-new/insta_img6.jpg"  alt="" style="width:100%;"></a>
    </div>
    <div class="col-lg-2 col-md-3 col-sm4 col-xs-6">
      <a class="image-link" href="#" style="margin:10px 0;"><img src="image/catalog/porto/index15-new/insta_img7.jpg"  alt="" style="width:100%;"></a>
    </div>
    <div class="col-lg-2 col-md-3 col-sm4 col-xs-6">
      <a class="image-link" href="#" style="margin:10px 0;"><img src="image/catalog/porto/index15-new/insta_img8.jpg"  alt="" style="width:100%;"></a>
    </div>
    <div class="col-lg-2 col-md-3 col-sm4 col-xs-6">
      <a class="image-link" href="#" style="margin:10px 0;"><img src="image/catalog/porto/index15-new/insta_img9.jpg"  alt="" style="width:100%;"></a>
    </div>
    <div class="col-lg-2 col-md-3 col-sm4 col-xs-6">
      <a class="image-link" href="#" style="margin:10px 0;"><img src="image/catalog/porto/index15-new/insta_img10.jpg"  alt="" style="width:100%;"></a>
    </div>
    <div class="col-lg-2 col-md-3 col-sm4 col-xs-6">
      <a class="image-link" href="#" style="margin:10px 0;"><img src="image/catalog/porto/index15-new/insta_img11.jpg"  alt="" style="width:100%;"></a>
    </div>
    <div class="col-lg-2 col-md-3 col-sm4 col-xs-6">
      <a class="image-link" href="#" style="margin:10px 0;"><img src="image/catalog/porto/index15-new/insta_img12.jpg"  alt="" style="width:100%;"></a>
    </div> 
  </div>
  <div class="insta-follow">
    <i class="fa fa-instagram" aria-hidden="true"></i>
    <h3>Instagram</h3>
    <span>@PORTOECOMMERCE</span>
    <a class="btn btn-default" href="#">Follow</a>
  </div>
</div>',
      1 => '<div class="xlg-margin"></div>
<div class="row" style="position: relative">
  <div class="insta-item">
    <div class="col-lg-2 col-md-3 col-sm4 col-xs-6">
      <a class="image-link" href="#" style="margin:10px 0;"><img src="image/catalog/porto/index15-new/insta_img1.jpg"  alt="" style="width:100%;"></a>
    </div> 
    <div class="col-lg-2 col-md-3 col-sm4 col-xs-6">
      <a class="image-link" href="#" style="margin:10px 0;"><img src="image/catalog/porto/index15-new/insta_img2.jpg"  alt="" style="width:100%;"></a>
    </div> 
    <div class="col-lg-2 col-md-3 col-sm4 col-xs-6">
      <a class="image-link" href="#" style="margin:10px 0;"><img src="image/catalog/porto/index15-new/insta_img3.jpg"  alt="" style="width:100%;"></a>
    </div> 
    <div class="col-lg-2 col-md-3 col-sm4 col-xs-6">
      <a class="image-link" href="#" style="margin:10px 0;"><img src="image/catalog/porto/index15-new/insta_img4.jpg"  alt="" style="width:100%;"></a>
    </div> 
    <div class="col-lg-2 col-md-3 col-sm4 col-xs-6">
      <a class="image-link" href="#" style="margin:10px 0;"><img src="image/catalog/porto/index15-new/insta_img5.jpg"  alt="" style="width:100%;"></a>
    </div> 
    <div class="col-lg-2 col-md-3 col-sm4 col-xs-6">
      <a class="image-link" href="#" style="margin:10px 0;"><img src="image/catalog/porto/index15-new/insta_img6.jpg"  alt="" style="width:100%;"></a>
    </div>
    <div class="col-lg-2 col-md-3 col-sm4 col-xs-6">
      <a class="image-link" href="#" style="margin:10px 0;"><img src="image/catalog/porto/index15-new/insta_img7.jpg"  alt="" style="width:100%;"></a>
    </div>
    <div class="col-lg-2 col-md-3 col-sm4 col-xs-6">
      <a class="image-link" href="#" style="margin:10px 0;"><img src="image/catalog/porto/index15-new/insta_img8.jpg"  alt="" style="width:100%;"></a>
    </div>
    <div class="col-lg-2 col-md-3 col-sm4 col-xs-6">
      <a class="image-link" href="#" style="margin:10px 0;"><img src="image/catalog/porto/index15-new/insta_img9.jpg"  alt="" style="width:100%;"></a>
    </div>
    <div class="col-lg-2 col-md-3 col-sm4 col-xs-6">
      <a class="image-link" href="#" style="margin:10px 0;"><img src="image/catalog/porto/index15-new/insta_img10.jpg"  alt="" style="width:100%;"></a>
    </div>
    <div class="col-lg-2 col-md-3 col-sm4 col-xs-6">
      <a class="image-link" href="#" style="margin:10px 0;"><img src="image/catalog/porto/index15-new/insta_img11.jpg"  alt="" style="width:100%;"></a>
    </div>
    <div class="col-lg-2 col-md-3 col-sm4 col-xs-6">
      <a class="image-link" href="#" style="margin:10px 0;"><img src="image/catalog/porto/index15-new/insta_img12.jpg"  alt="" style="width:100%;"></a>
    </div> 
  </div>
  <div class="insta-follow">
    <i class="fa fa-instagram" aria-hidden="true"></i>
    <h3>Instagram</h3>
    <span>@PORTOECOMMERCE</span>
    <a class="btn btn-default" href="#">Follow</a>
  </div>
</div>',
    ),
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '1',
  ),
); 

$this->model_setting_setting->editSetting( "custom_module", $output );	

?>