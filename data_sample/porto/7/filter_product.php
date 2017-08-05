<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["filter_product_module"] = array (
  1 => 
  array (
    'tabs' => 
    array (
      1 => 
      array (
        'heading' => 
        array (
          123456 => 'Fashion dress',
          1 => 'Fashion dress',
        ),
        'title' => 'category',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '33,25,46,28,20',
      ),
    ),
    'carousel' => '1',
    'width' => '300',
    'height' => '400',
    'itemsperpage' => '4',
    'cols' => '1',
    'limit' => '8',
    'layout_id' => '1',
    'position' => 'content_top',
    'status' => '1',
    'sort_order' => '4',
  ),
); 

$this->model_setting_setting->editSetting( "filter_product", $output );	

?>