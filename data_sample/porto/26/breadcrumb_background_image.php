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
      $language_id => '<div class="container">            
    <div class="content" style="position:absolute;z-index:1;top:35%;text-align:left;">
      <p style="color: #fff;">check out over <b style="font-size:26px;font-family:\'Oswald\';">200+</b></p>


      <h2 style="color: #fff;">incredible deals</h2>


      <a href="#" class="btn-default">shop now</a>
    </div>


  </div>',
      1 => '<div class="container">            
    <div class="content" style="position:absolute;z-index:1;top:35%;text-align:left;">
      <p style="color: #fff;">check out over <b style="font-size:26px;font-family:\'Oswald\';">200+</b></p>


      <h2 style="color: #fff;">incredible deals</h2>


      <a href="#" class="btn-default">shop now</a>
    </div>


  </div>',
    ),
    'background_color' => '',
    'background_image' => 'catalog/porto/index12-new/full-width-banner8.jpg',
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