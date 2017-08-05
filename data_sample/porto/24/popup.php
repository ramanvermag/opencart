<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["popup_id_module"] = 11;
$output["popup_module"] = array (
  1 => 
  array (
    'type' => '1',
    'newsletter_popup_title' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'newsletter_popup_text' => 
    array (
      $language_id => '<img src="image/catalog/porto/index3/logo_black.png" alt="">
 <h2>BE THE FIRST TO KNOW</h2>
<p>Subscribe to the Porto eCommerce newsletter to receive timely updates from your favorite products.</p>  
',
      1 => '<img src="image/catalog/porto/index3/logo_black.png" alt="">
 <h2>BE THE FIRST TO KNOW</h2>
<p>Subscribe to the Porto eCommerce newsletter to receive timely updates from your favorite products.</p>  
',
    ),
    'newsletter_input_placeholder' => 
    array (
      $language_id => 'Email Address',
      1 => 'Email Address',
    ),
    'newsletter_subscribe_button_text' => 
    array (
      $language_id => 'Go!',
      1 => 'Go!',
    ),
    'custom_popup_title' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'custom_popup_text' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'contact_form_popup_title' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'module_id' => '1',
    'show_only_once' => '1',
    'display_text_dont_show_again' => '0',
    'text_dont_show_again' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'display_buttons_yes_no' => '1',
    'no' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'yes' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'content_width' => '700',
    'background_color' => '',
    'background_image' => 'catalog/porto/newsletter_popup_bg.jpg',
    'background_image_position' => 'top right',
    'background_image_repeat' => 'no-repeat',
    'show_after' => '',
    'autoclose_after' => '',
    'disable_on_desktop' => '0',
    'layout_id' => '1',
    'position' => 'popup',
    'status' => '1',
    'sort_order' => '0',
  ),
  2 => 
  array (
    'type' => '3',
    'newsletter_popup_title' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'newsletter_popup_text' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'newsletter_input_placeholder' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'newsletter_subscribe_button_text' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'custom_popup_title' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'custom_popup_text' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'contact_form_popup_title' => 
    array (
      $language_id => 'Have a question?',
      1 => 'Have a question?',
    ),
    'module_id' => '2',
    'show_only_once' => '1',
    'display_text_dont_show_again' => '1',
    'text_dont_show_again' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'display_buttons_yes_no' => '1',
    'no' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'yes' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'content_width' => '700',
    'background_color' => '',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'show_after' => '',
    'autoclose_after' => '',
    'disable_on_desktop' => '0',
    'layout_id' => '99999',
    'position' => 'popup',
    'status' => '0',
    'sort_order' => '0',
  ),
); 

$this->model_setting_setting->editSetting( "popup", $output );	

?>