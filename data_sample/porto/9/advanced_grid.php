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
        'sort' => '4',
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
            <i class="fa fa-map-marker"></i> <strong>Address:</strong> <span>1234 Street Name, City Name, United States</span>
        </li>
        <li>
            <i class="fa fa-envelope"></i> <strong>Email:</strong> <span><a href="mailto:mail@example.com">mail@example.com</a></span>
        </li>
        <li>
            <i class="fa fa-clock-o"></i> <strong>Working Days/Hours:</strong> <span>Mon - Sun / 9:00 AM - 8:00 PM</span>
        </li>
    </ul>
</div><!-- End .widget -->',
              1 => '<div class="widget contact-info">
    <h3 class="widget-title">Contact Information</h3>
    <ul class="contact-details">
        <li>
            <i class="fa fa-map-marker"></i> <strong>Address:</strong> <span>1234 Street Name, City Name, United States</span>
        </li>
        <li>
            <i class="fa fa-envelope"></i> <strong>Email:</strong> <span><a href="mailto:mail@example.com">mail@example.com</a></span>
        </li>
        <li>
            <i class="fa fa-clock-o"></i> <strong>Working Days/Hours:</strong> <span>Mon - Sun / 9:00 AM - 8:00 PM</span>
        </li>
    </ul>
</div><!-- End .widget -->',
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
              $language_id => '<div class="widget">
    <h3 class="widget-title">Main Features</h3>
    <ul class="links">
        <li><i class="fa fa-check"></i><a href="#">Super Fast OpenCart Theme</a></li>
        <li><i class="fa fa-check"></i><a href="#">1st Fully working Ajax Theme</a></li>
        <li><i class="fa fa-check"></i><a href="#">17 Unique Homepage Layouts</a></li>
        <li><i class="fa fa-check"></i><a href="#">Powerful Admin Panel</a></li>
        <li><i class="fa fa-check"></i><a href="#">Mobile &amp; Retina Optimized</a></li>
    </ul>
</div>',
              1 => '<div class="widget">
    <h3 class="widget-title">Main Features</h3>
    <ul class="links">
        <li><i class="fa fa-check"></i><a href="#">Super Fast OpenCart Theme</a></li>
        <li><i class="fa fa-check"></i><a href="#">1st Fully working Ajax Theme</a></li>
        <li><i class="fa fa-check"></i><a href="#">17 Unique Homepage Layouts</a></li>
        <li><i class="fa fa-check"></i><a href="#">Powerful Admin Panel</a></li>
        <li><i class="fa fa-check"></i><a href="#">Mobile &amp; Retina Optimized</a></li>
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
    <h3 class="widget-title">My account</h3>
    <ul class="links">
	<li><i class="fa fa-caret-right"></i><a href="#">About us</a></li>
	<li><i class="fa fa-caret-right"></i><a href="#">Contact us</a></li>
	<li><i class="fa fa-caret-right"></i><a href="#">My account</a></li>
	<li><i class="fa fa-caret-right"></i><a href="#">Orders history</a></li>
	<li><i class="fa fa-caret-right"></i><a href="#">Advanced search</a></li>
</ul>
</div><!-- End .widget -->',
              1 => '<div class="widget">
    <h3 class="widget-title">My account</h3>
    <ul class="links">
	<li><i class="fa fa-caret-right"></i><a href="#">About us</a></li>
	<li><i class="fa fa-caret-right"></i><a href="#">Contact us</a></li>
	<li><i class="fa fa-caret-right"></i><a href="#">My account</a></li>
	<li><i class="fa fa-caret-right"></i><a href="#">Orders history</a></li>
	<li><i class="fa fa-caret-right"></i><a href="#">Advanced search</a></li>
</ul>
</div><!-- End .widget -->',
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
    <h3 class="widget-title">Who We Are?</h3>
   <div class="block-content">
<img src="image/catalog/porto/index9/footer_logo_red.png" alt="">
<p style="margin: 20px 0 0;line-height: 1.5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><br>
<span style="font-weight: 600;"><a href="http://themeforest.net/item/porto-ecommerce-ultimate-magento-theme/9725864?ref=SW-THEMES&amp;license=regular&amp;open_purchase_for_item_id=9725864&amp;purchasable=source">Buy Porto eCommerce</a></span></p>
</div>
</div>',
              1 => '<div class="widget">
    <h3 class="widget-title">Who We Are?</h3>
   <div class="block-content">
<img src="image/catalog/porto/index9/footer_logo_red.png" alt="">
<p style="margin: 20px 0 0;line-height: 1.5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><br>
<span style="font-weight: 600;"><a href="http://themeforest.net/item/porto-ecommerce-ultimate-magento-theme/9725864?ref=SW-THEMES&amp;license=regular&amp;open_purchase_for_item_id=9725864&amp;purchasable=source">Buy Porto eCommerce</a></span></p>
</div>
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
    'custom_class' => '',
    'margin_top' => '15',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '15',
    'padding_right' => '15',
    'padding_bottom' => '15',
    'padding_left' => '15',
    'force_full_width' => '0',
    'background_color' => '#fff',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '4',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      7 => 
      array (
        'status' => '1',
        'width' => '12',
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
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'products_grid.tpl',
              'title' => 
              array (
                $language_id => '',
                1 => '',
              ),
              'get_products_from' => 'most_viewed',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '',
              'width' => '300',
              'height' => '400',
              'limit' => '8',
            ),
          ),
        ),
      ),
    ),
  ),
  5 => 
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
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '10',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      8 => 
      array (
        'status' => '1',
        'width' => '4',
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
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'index9.tpl',
              'title' => 
              array (
                $language_id => 'Featured',
                1 => 'Featured',
              ),
              'get_products_from' => 'latest',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '',
              'width' => '300',
              'height' => '400',
              'limit' => '3',
            ),
          ),
        ),
      ),
      9 => 
      array (
        'status' => '1',
        'width' => '4',
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
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'index9.tpl',
              'title' => 
              array (
                $language_id => 'Sales',
                1 => 'Sales',
              ),
              'get_products_from' => 'random',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '',
              'width' => '300',
              'height' => '400',
              'limit' => '3',
            ),
          ),
        ),
      ),
      10 => 
      array (
        'status' => '1',
        'width' => '4',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '3',
        'module' => 
        array (
          10 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'index9.tpl',
              'title' => 
              array (
                $language_id => 'New arrivals',
                1 => 'New arrivals',
              ),
              'get_products_from' => 'random',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '',
              'width' => '300',
              'height' => '400',
              'limit' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
); 

$this->model_setting_setting->editSetting( "advanced_grid", $output );	

?>