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
      123456 => 'From the blog',
      1 => 'From the blog',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'template' => 'index4.tpl',
    'status' => '1',
    'thumb_width' => '300',
    'thumb_height' => '200',
    'articles_limit' => '2',
    'sort_order' => '8',
  ),
); 

$this->model_setting_setting->editSetting( "blog_latest", $output );	

?>