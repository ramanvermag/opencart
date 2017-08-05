<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["breadcrumb_background_image_module"] = array (
  1 => 
  array (
    'block_content' => 
    array (
      $language_id => '<div class="content" style="position:absolute;z-index:1;top:50%;width:100%;text-align:center;"> 			<h2 style="color: #fff;font-weight: 600;">CATEGORY <b style="font-weight: 800;">BANNER</b></h2>
 			<p style="color: #fff;font-weight: 300;">Set banners and description for any category of your website.</p>
 		</div>',
      1 => '<div class="content" style="position:absolute;z-index:1;top:50%;width:100%;text-align:center;"> 			<h2 style="color: #fff;font-weight: 600;">CATEGORY <b style="font-weight: 800;">BANNER</b></h2>
 			<p style="color: #fff;font-weight: 300;">Set banners and description for any category of your website.</p>
 		</div>',
    ),
    'background_color' => '#222',
    'background_image' => 'catalog/porto/full-width-banner.jpg',
    'background_image_position' => 'top center',
    'background_image_repeat' => 'no-repeat',
    'layout_id' => '3',
    'position' => 'breadcrumb',
    'status' => '1',
    'sort_order' => '0',
  ),
); 

$this->model_setting_setting->editSetting( "breadcrumb_background_image", $output );	

?>