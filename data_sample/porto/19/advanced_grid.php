<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["advanced_grid_module"] = array (
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
    'layout_id' => '2',
    'position' => 'column_right',
    'status' => '1',
    'sort_order' => '1',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      2 => 
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
  3 => 
  array (
    'custom_class' => 'skin19-footer',
    'margin_top' => '10',
    'margin_right' => '0',
    'margin_bottom' => '15',
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
      3 => 
      array (
        'status' => '1',
        'width' => '2',
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
              $language_id => '<div class="footer-home19-logo"><img src="image/catalog/porto/index19/logo_white_plus.png" alt=""></div>',
              1 => '<div class="footer-home19-logo"><img src="image/catalog/porto/index19/logo_white_plus.png" alt=""></div>',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'status' => '1',
        'width' => '2',
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
              $language_id => '<div class="block">
    <div class="block-title"><strong><span>SHOP</span></strong></div>
    <div class="block-content">
        <ul class="links">
            <li><a href="#" title="Fashion &amp; Clothes">Fashion &amp; Clothes</a></li>
            <li><a href="#" title="Electronics &amp; Computers">Electronics &amp; Computers</a></li>
            <li><a href="#" title="Toys &amp; Hobbies">Toys &amp; Hobbies</a></li>
            <li><a href="#" title="Home &amp; Garden">Home &amp; Garden</a></li>
            <li><a href="#" title="Decor &amp; Furniture">Decor &amp; Furniture</a></li>
            <li><a href="#" title="Sports &amp; Fitness">Sports &amp; Fitness</a></li>
            <li><a href="#" title="Gifts">Gifts</a></li>
        </ul>
    </div>
</div>',
              1 => '<div class="block">
    <div class="block-title"><strong><span>SHOP</span></strong></div>
    <div class="block-content">
        <ul class="links">
            <li><a href="#" title="Fashion &amp; Clothes">Fashion &amp; Clothes</a></li>
            <li><a href="#" title="Electronics &amp; Computers">Electronics &amp; Computers</a></li>
            <li><a href="#" title="Toys &amp; Hobbies">Toys &amp; Hobbies</a></li>
            <li><a href="#" title="Home &amp; Garden">Home &amp; Garden</a></li>
            <li><a href="#" title="Decor &amp; Furniture">Decor &amp; Furniture</a></li>
            <li><a href="#" title="Sports &amp; Fitness">Sports &amp; Fitness</a></li>
            <li><a href="#" title="Gifts">Gifts</a></li>
        </ul>
    </div>
</div>',
            ),
          ),
        ),
      ),
      5 => 
      array (
        'status' => '1',
        'width' => '2',
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
              $language_id => '<div class="block">
    <div class="block-title"><strong><span>MENU</span></strong></div>
    <div class="block-content">
        <ul class="links">
            <li><a href="#" title="My Account">My Account</a></li>
            <li><a href="#" title="Daily Deal">Daily Deal</a></li>
            <li><a href="#" title="My Wishlist">My Wishlist</a></li>
            <li><a href="#" title="Blog">Blog</a></li>
            <li><a href="#" title="Login">Login</a></li>
            <li><a href="#" title="About Us">About Us</a></li>
            <li><a href="#" title="Contact">Contact</a></li>
        </ul>
    </div>
</div>',
              1 => '<div class="block">
    <div class="block-title"><strong><span>MENU</span></strong></div>
    <div class="block-content">
        <ul class="links">
            <li><a href="#" title="My Account">My Account</a></li>
            <li><a href="#" title="Daily Deal">Daily Deal</a></li>
            <li><a href="#" title="My Wishlist">My Wishlist</a></li>
            <li><a href="#" title="Blog">Blog</a></li>
            <li><a href="#" title="Login">Login</a></li>
            <li><a href="#" title="About Us">About Us</a></li>
            <li><a href="#" title="Contact">Contact</a></li>
        </ul>
    </div>
</div>',
            ),
          ),
        ),
      ),
      6 => 
      array (
        'status' => '1',
        'width' => '5',
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
              $language_id => '<div class="block" style="margin-bottom:50px;">
    <div class="block-title"><strong><span>FOLLOW US</span></strong></div>
    <div class="block-content">
        <a href="https://www.facebook.com/" title="Facebook" target="_blank" style="font-size: 22px;margin: 0 15px;margin-left: 0px;"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/" title="Twitter" target="_blank" style="font-size: 22px;margin: 0 15px;"><i class="fa fa-twitter"></i></a>
        <a href="https://www.instagram.com/" title="Instagram" target="_blank" style="font-size: 22px;margin: 0 15px;"><i class="fa fa-instagram"></i></a>
    </div>
</div>',
              1 => '<div class="block" style="margin-bottom:50px;">
    <div class="block-title"><strong><span>FOLLOW US</span></strong></div>
    <div class="block-content">
        <a href="https://www.facebook.com/" title="Facebook" target="_blank" style="font-size: 22px;margin: 0 15px;margin-left: 0px;"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/" title="Twitter" target="_blank" style="font-size: 22px;margin: 0 15px;"><i class="fa fa-twitter"></i></a>
        <a href="https://www.instagram.com/" title="Instagram" target="_blank" style="font-size: 22px;margin: 0 15px;"><i class="fa fa-instagram"></i></a>
    </div>
</div>',
            ),
          ),
          2 => 
          array (
            'status' => '1',
            'sort' => '2',
            'type' => 'newsletter',
            'newsletter' => 
            array (
              'module_layout' => 'index19.tpl',
              'title' => 
              array (
                $language_id => 'Newsletter',
                1 => 'Newsletter',
              ),
              'text' => 
              array (
                $language_id => '',
                1 => '',
              ),
              'input_placeholder' => 
              array (
                $language_id => 'Email Address',
                1 => 'Email Address',
              ),
              'subscribe_text' => 
              array (
                $language_id => 'GO!',
                1 => 'GO!',
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
    ),
  ),
); 

$this->model_setting_setting->editSetting( "advanced_grid", $output );	

?>