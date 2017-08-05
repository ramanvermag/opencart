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
          $language_id => 'Featured products',
          1 => 'Featured products',
        ),
        'title' => 'category',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '20',
      ),
    ),
    'carousel' => '1',
    'width' => '300',
    'height' => '312',
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