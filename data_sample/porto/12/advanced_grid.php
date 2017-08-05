<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["advanced_grid_module"] = array (
  1 => 
  array (
    'custom_class' => '',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '0',
    'background_color' => '',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '99999',
    'position' => 'footer',
    'status' => '1',
    'sort_order' => '',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      1 => 
      array (
        'status' => '1',
        'width' => '3',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '2',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              $language_id => '<div class="widget contact-info">
                                <h3 class="widget-title">Contact Information</h3>
                                <ul class="contact-details">
                                    <li>
                                        <i class="fa fa-map-marker"></i> <strong>Address:</strong> <span>123 Street Name, City, England</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i> <strong>Phone:</strong> <span>(123) 456-7890</span>
                                    </li> 
                                    <li>
                                        <i class="fa fa-clock-o"></i> <strong>Working Days/Hours:</strong> <span>Mon - Sun / 9:00 AM - 8:00 PM</span>
                                    </li>
                                </ul>
                            </div>',
              1 => '<div class="widget contact-info">
                                <h3 class="widget-title">Contact Information</h3>
                                <ul class="contact-details">
                                    <li>
                                        <i class="fa fa-map-marker"></i> <strong>Address:</strong> <span>123 Street Name, City, England</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i> <strong>Phone:</strong> <span>(123) 456-7890</span>
                                    </li> 
                                    <li>
                                        <i class="fa fa-clock-o"></i> <strong>Working Days/Hours:</strong> <span>Mon - Sun / 9:00 AM - 8:00 PM</span>
                                    </li>
                                </ul>
                            </div>',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'status' => '1',
        'width' => '3',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '3',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              $language_id => '<div class="widget">
	<h3 class="widget-title">Main Features</h3>
	<ul class="links">
		<li><i class="fa fa-check"></i><a href="#">Super Fast OpenCart Theme</a></li>
		<li><i class="fa fa-check"></i><a href="#">1st Fully working Ajax Theme</a></li>
		<li><i class="fa fa-check"></i><a href="#">10 Unique Homepage Layouts</a></li>
		<li><i class="fa fa-check"></i><a href="#">Powerful Admin Panel</a></li>
		<li><i class="fa fa-check"></i><a href="#">Mobile & Retina Optimized</a></li>
	</ul>
</div>',
              1 => '<div class="widget">
	<h3 class="widget-title">Main Features</h3>
	<ul class="links">
		<li><i class="fa fa-check"></i><a href="#">Super Fast OpenCart Theme</a></li>
		<li><i class="fa fa-check"></i><a href="#">1st Fully working Ajax Theme</a></li>
		<li><i class="fa fa-check"></i><a href="#">10 Unique Homepage Layouts</a></li>
		<li><i class="fa fa-check"></i><a href="#">Powerful Admin Panel</a></li>
		<li><i class="fa fa-check"></i><a href="#">Mobile & Retina Optimized</a></li>
	</ul>
</div>',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'status' => '1',
        'width' => '3',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '4',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'newsletter',
            'newsletter' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                $language_id => 'Newsletter',
                1 => 'Newsletter',
              ),
              'text' => 
              array (
                $language_id => 'Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.',
                1 => 'Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.',
              ),
              'input_placeholder' => 
              array (
                $language_id => 'Email Address',
                1 => 'Email Address',
              ),
              'subscribe_text' => 
              array (
                $language_id => 'Subscribe',
                1 => 'Subscribe',
              ),
              'unsubscribe_text' => 
              array (
                $language_id => '',
                1 => '',
              ),
            ),
          ),
        ),
      ),
      4 => 
      array (
        'status' => '1',
        'width' => '3',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              $language_id => '<div class="widget">
	<h3 class="widget-title">My Account</h3>
	<ul class="links">
		<li><i class="fa fa-caret-right"></i><a href="#">About us</a></li>
		<li><i class="fa fa-caret-right"></i><a href="#">Contact us</a></li>
		<li><i class="fa fa-caret-right"></i><a href="#">My account</a></li>
		<li><i class="fa fa-caret-right"></i><a href="#">Orders history</a></li>
		<li><i class="fa fa-caret-right"></i><a href="#">Advanced search</a></li>
	</ul>
</div>',
              1 => '<div class="widget">
	<h3 class="widget-title">My Account</h3>
	<ul class="links">
		<li><i class="fa fa-caret-right"></i><a href="#">About us</a></li>
		<li><i class="fa fa-caret-right"></i><a href="#">Contact us</a></li>
		<li><i class="fa fa-caret-right"></i><a href="#">My account</a></li>
		<li><i class="fa fa-caret-right"></i><a href="#">Orders history</a></li>
		<li><i class="fa fa-caret-right"></i><a href="#">Advanced search</a></li>
	</ul>
</div>',
            ),
          ),
        ),
      ),
    ),
  ),
  2 => 
  array (
    'custom_class' => '',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '0',
    'background_color' => '',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '3',
    'position' => 'column_left',
    'status' => '1',
    'sort_order' => '10',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      5 => 
      array (
        'status' => '1',
        'width' => 'advanced',
        'disable_on_mobile' => '0',
        'width_xs' => 'hidden',
        'width_sm' => 'hidden',
        'width_md' => '12',
        'width_lg' => '12',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                $language_id => 'Featured',
                1 => 'Featured',
              ),
              'get_products_from' => 'most_viewed',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '',
              'width' => '75',
              'height' => '100',
              'limit' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  3 => 
  array (
    'custom_class' => '',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '0',
    'background_color' => '',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '2',
    'position' => 'column_right',
    'status' => '1',
    'sort_order' => '1',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      6 => 
      array (
        'status' => '1',
        'width' => '12',
        'disable_on_mobile' => '1',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                $language_id => 'Top Rated',
                1 => 'Top Rated',
              ),
              'get_products_from' => 'most_viewed',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '',
              'width' => '75',
              'height' => '100',
              'limit' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  4 => 
  array (
    'custom_class' => 'index12-slider',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '30',
    'padding_right' => '0',
    'padding_bottom' => '30',
    'padding_left' => '0',
    'force_full_width' => '0',
    'background_color' => '#f4f4f4',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'slideshow',
    'status' => '1',
    'sort_order' => '0',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      7 => 
      array (
        'status' => '1',
        'width' => '9',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '',
            'type' => 'load_module',
            'load_module' => 
            array (
              'module' => 'camera_slider.0',
            ),
          ),
        ),
      ),
      8 => 
      array (
        'status' => '1',
        'width' => '3',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '2',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              $language_id => '<div class="row" style="padding: 0px 4px">
                                    <div class="banner" style="margin-bottom: 10px">
                                        <a href="#"><img src="image/catalog/porto/index12/banner1.jpg" alt="banner"></a>
                                    </div><!-- End .banner -->
                                    <div class="banner" style="margin-bottom: 10px">
                                        <a href="#"><img src="image/catalog/porto/index12/banner2.jpg" alt="banner"></a>
                                    </div><!-- End .banner -->
                                    <div class="banner">
                                        <a href="#"><img src="image/catalog/porto/index12/banner3.jpg" alt="banner"></a>
                                    </div><!-- End .banner -->
                                </div>',
              1 => '<div class="row" style="padding: 0px 4px">
                                    <div class="banner" style="margin-bottom: 10px">
                                        <a href="#"><img src="image/catalog/porto/index12/banner1.jpg" alt="banner"></a>
                                    </div><!-- End .banner -->
                                    <div class="banner" style="margin-bottom: 10px">
                                        <a href="#"><img src="image/catalog/porto/index12/banner2.jpg" alt="banner"></a>
                                    </div><!-- End .banner -->
                                    <div class="banner">
                                        <a href="#"><img src="image/catalog/porto/index12/banner3.jpg" alt="banner"></a>
                                    </div><!-- End .banner -->
                                </div>',
            ),
          ),
        ),
      ),
    ),
  ),
); 

$this->model_setting_setting->editSetting( "advanced_grid", $output );	

?>