<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["blog_latest_module"] = array (
  1 => 
  array (
    'heading_title' => 
    array (
      $language_id => '',
      1 => 'RECENT POSTS',
    ),
    'layout_id' => '1',
    'position' => 'column_left',
    'template' => 'default_new.tpl',
    'status' => '1',
    'thumb_width' => '450',
    'thumb_height' => '231',
    'articles_limit' => '3',
    'sort_order' => '10',
  ),
); 

$this->model_setting_setting->editSetting( "blog_latest", $output );	

?>