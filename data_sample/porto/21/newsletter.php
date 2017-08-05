<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["newsletter_module"] = array (
  1 => 
  array (
    $language_id => 
    array (
      'module_title' => 'NEWSLETTER',
      'module_text' => 'Get all the latest information<br>
on Events, Sales and Offers.',
      'input_placeholder' => 'Email Address',
      'subscribe_text' => 'GO!',
      'unsubscribe_text' => '',
    ),
    1 => 
    array (
      'module_title' => 'NEWSLETTER',
      'module_text' => 'Get all the latest information<br>
on Events, Sales and Offers.',
      'input_placeholder' => 'Email Address',
      'subscribe_text' => 'GO!',
      'unsubscribe_text' => '',
    ),
    'button_unsubscribe' => '0',
    'layout_id' => '1',
    'position' => 'column_left',
    'status' => '1',
    'sort_order' => '3',
  ),
); 

$this->model_setting_setting->editSetting( "newsletter", $output );	

?>