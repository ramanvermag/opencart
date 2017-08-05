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
    'layout_id' => '3',
    'position' => 'column_left',
    'status' => '1',
    'sort_order' => '10',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      1 => 
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
              'module_layout' => 'default_new.tpl',
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
              'width' => '100',
              'height' => '104',
              'limit' => '3',
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
              'module_layout' => 'default_new.tpl',
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
              'height' => '78',
              'limit' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  3 => 
  array (
    'custom_class' => 'product-page-products',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '0',
    'background_color' => '#F4F4F5',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '2',
    'position' => 'customfooter',
    'status' => '1',
    'sort_order' => '',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      3 => 
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
                $language_id => 'Also purchased',
                1 => 'Also purchased',
              ),
              'get_products_from' => 'products',
              'product' => '',
              'products' => '42,43,44,30',
              'category' => '',
              'categories' => '',
              'width' => '300',
              'height' => '312',
              'limit' => '4',
            ),
          ),
        ),
      ),
    ),
  ),
  4 => 
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
              $language_id => '<div class="widget contact-info">
    <h3 class="widget-title">Contact Information</h3>
    <ul class="contact-details">
        <li>
            <i class="fa fa-map-marker"></i> <strong>Address:</strong> <span>1234 Street Name, City Name, United States</span>
        </li>
        <li>
            <i class="fa fa-phone"></i> <strong>Phone:</strong> <span>(123) 456-7890</span>
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
            <i class="fa fa-phone"></i> <strong>Phone:</strong> <span>(123) 456-7890</span>
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
      5 => 
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
      6 => 
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
        <li><i class="fa fa-check"></i><a href="#">20 Unique Homepage Layouts</a></li>
        <li><i class="fa fa-check"></i><a href="#">Powerful Admin Panel</a></li>
        <li><i class="fa fa-check"></i><a href="#">Mobile & Retina Optimized</a></li>
    </ul>
</div>',
              1 => '<div class="widget">
    <h3 class="widget-title">Main Features</h3>
    <ul class="links">
        <li><i class="fa fa-check"></i><a href="#">Super Fast OpenCart Theme</a></li>
        <li><i class="fa fa-check"></i><a href="#">1st Fully working Ajax Theme</a></li>
        <li><i class="fa fa-check"></i><a href="#">20 Unique Homepage Layouts</a></li>
        <li><i class="fa fa-check"></i><a href="#">Powerful Admin Panel</a></li>
        <li><i class="fa fa-check"></i><a href="#">Mobile & Retina Optimized</a></li>
    </ul>
</div>',
            ),
          ),
        ),
      ),
      7 => 
      array (
        'status' => '1',
        'width' => '4',
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
                $language_id => 'BE THE FIRST TO KNOW',
                1 => 'BE THE FIRST TO KNOW',
              ),
              'text' => 
              array (
                $language_id => 'Get all the latest information on Events, Sales and Offers. <br>
Sign up for newsletter today.',
                1 => 'Get all the latest information on Events, Sales and Offers. <br>
Sign up for newsletter today.',
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
    ),
  ),
  5 => 
  array (
    'custom_class' => '',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '40',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
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
    'sort_order' => '2',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      8 => 
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
            'type' => 'html',
            'html' => 
            array (
              $language_id => '                    <div class="row clean-row info-boxes-container type2">
                        <div class="col-md-4 info-box-container">
                            <div class="info-box">
                                <div class="info-box-icon">
                                    <i class="porto-icon-shipping" style="font-size:35px;"></i>
                                </div>
                                <div class="info-box-content">
                                    <h3 class="info-box-title">FREE SHIPPING & RETURN</h3>
                                    <div class="info-box-desc">Free shipping on all orders over $99.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 info-box-container">
                            <div class="info-box">
                                <div class="info-box-icon">
                                    <i class="porto-icon-us-dollar" style="font-size:37px;"></i>
                                </div>
                                <div class="info-box-content">
                                    <h3 class="info-box-title">MONEY BACK GUARANTEE</h3>
                                    <div class="info-box-desc">100% money back guarantee.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 info-box-container">
                            <div class="info-box">
                                <div class="info-box-icon">
                                    <i class="porto-icon-support" style="font-size:37px;"></i>
                                </div>
                                <div class="info-box-content">
                                    <h3 class="info-box-title">ONLINE SUPPORT 24/7</h3>
                                    <div class="info-box-desc">Lorem ipsum dolor sit amet.</div>
                                </div>
                            </div>
                        </div>
                    </div>',
              1 => '                    <div class="row clean-row info-boxes-container type2">
                        <div class="col-md-4 info-box-container">
                            <div class="info-box">
                                <div class="info-box-icon">
                                    <i class="porto-icon-shipping" style="font-size:35px;"></i>
                                </div>
                                <div class="info-box-content">
                                    <h3 class="info-box-title">FREE SHIPPING & RETURN</h3>
                                    <div class="info-box-desc">Free shipping on all orders over $99.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 info-box-container">
                            <div class="info-box">
                                <div class="info-box-icon">
                                    <i class="porto-icon-us-dollar" style="font-size:37px;"></i>
                                </div>
                                <div class="info-box-content">
                                    <h3 class="info-box-title">MONEY BACK GUARANTEE</h3>
                                    <div class="info-box-desc">100% money back guarantee.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 info-box-container">
                            <div class="info-box">
                                <div class="info-box-icon">
                                    <i class="porto-icon-support" style="font-size:37px;"></i>
                                </div>
                                <div class="info-box-content">
                                    <h3 class="info-box-title">ONLINE SUPPORT 24/7</h3>
                                    <div class="info-box-desc">Lorem ipsum dolor sit amet.</div>
                                </div>
                            </div>
                        </div>
                    </div>',
            ),
          ),
        ),
      ),
    ),
  ),
  6 => 
  array (
    'custom_class' => '',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '30',
    'margin_left' => '0',
    'padding_top' => '38',
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
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '1',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      9 => 
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
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'default_new.tpl',
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
              'width' => '100',
              'height' => '104',
              'limit' => '3',
            ),
          ),
        ),
      ),
      10 => 
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
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'default_new.tpl',
              'title' => 
              array (
                $language_id => 'New',
                1 => 'New',
              ),
              'get_products_from' => 'category',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '20',
              'width' => '100',
              'height' => '104',
              'limit' => '3',
            ),
          ),
        ),
      ),
      11 => 
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
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'default_new.tpl',
              'title' => 
              array (
                $language_id => 'Hot',
                1 => 'Hot',
              ),
              'get_products_from' => 'random',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '',
              'width' => '100',
              'height' => '104',
              'limit' => '3',
            ),
          ),
        ),
      ),
      12 => 
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
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'default_new.tpl',
              'title' => 
              array (
                $language_id => 'Sale',
                1 => 'Sale',
              ),
              'get_products_from' => 'random',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '',
              'width' => '100',
              'height' => '104',
              'limit' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  7 => 
  array (
    'custom_class' => 'border-top-1px',
    'margin_top' => '22',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '17',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '2',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      13 => 
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
            'type' => 'html',
            'html' => 
            array (
              $language_id => '                            <div class="vinfo-boxes-container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="vinfo-box">
                                            <span class="vinfo-box-icon vinfo-box-circle"><i class="fa fa-star"></i></span>
                                            <h3 class="vinfo-box-title">DEDICATED SERVICE</h3>
                                            <p class="vinfo-box-desc">Consult our specialists for help with an order, customization, or design advice.</p><a class="icon-read" href="#">Get in Touch</a>
                                        </div>
                                    </div><!-- End .col-sm-4-->
                                    <div class="col-sm-4">
                                        <div class="vinfo-box">
                                            <span class="vinfo-box-icon vinfo-box-circle"><i class="fa fa-reply"></i></span>
                                            <h3 class="vinfo-box-title">FREE RETURNS</h3>
                                            <p class="vinfo-box-desc">We stand behind our goods and services and want you to be satisfied with them.</p><a class="icon-read" href="#">Returns policy</a>
                                        </div>
                                    </div><!-- End .col-sm-4-->
                                    <div class="col-sm-4">
                                        <div class="vinfo-box">
                                            <span class="vinfo-box-icon vinfo-box-circle"><i class="fa fa-plane"></i></span>
                                            <h3 class="vinfo-box-title">INTERNATIONAL SHIPPING</h3>
                                            <p class="vinfo-box-desc">Currently over 50 countries qualify for express international shipping.</p><a class="icon-read" href="#">Learn more</a>
                                        </div>
                                    </div><!-- End .col-sm-4-->
                                </div><!-- End .row -->
                            </div>',
              1 => '                            <div class="vinfo-boxes-container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="vinfo-box">
                                            <span class="vinfo-box-icon vinfo-box-circle"><i class="fa fa-star"></i></span>
                                            <h3 class="vinfo-box-title">DEDICATED SERVICE</h3>
                                            <p class="vinfo-box-desc">Consult our specialists for help with an order, customization, or design advice.</p><a class="icon-read" href="#">Get in Touch</a>
                                        </div>
                                    </div><!-- End .col-sm-4-->
                                    <div class="col-sm-4">
                                        <div class="vinfo-box">
                                            <span class="vinfo-box-icon vinfo-box-circle"><i class="fa fa-reply"></i></span>
                                            <h3 class="vinfo-box-title">FREE RETURNS</h3>
                                            <p class="vinfo-box-desc">We stand behind our goods and services and want you to be satisfied with them.</p><a class="icon-read" href="#">Returns policy</a>
                                        </div>
                                    </div><!-- End .col-sm-4-->
                                    <div class="col-sm-4">
                                        <div class="vinfo-box">
                                            <span class="vinfo-box-icon vinfo-box-circle"><i class="fa fa-plane"></i></span>
                                            <h3 class="vinfo-box-title">INTERNATIONAL SHIPPING</h3>
                                            <p class="vinfo-box-desc">Currently over 50 countries qualify for express international shipping.</p><a class="icon-read" href="#">Learn more</a>
                                        </div>
                                    </div><!-- End .col-sm-4-->
                                </div><!-- End .row -->
                            </div>',
            ),
          ),
        ),
      ),
    ),
  ),
  8 => 
  array (
    'custom_class' => '',
    'margin_top' => '40',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '',
    'background_image_type' => '1',
    'background_image' => 'catalog/porto/index11-new/bg-parallax.jpg',
    'background_image_position' => 'top center',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'fixed',
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '4',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      14 => 
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
            'type' => 'html',
            'html' => 
            array (
              $language_id => '<div class="index11newparallax text-center">
	<div class="first-heading">The perfect gift</div>
	<div class="second-heading">Check off your list with our best gifts</div>
	<a href="#" class="button">Shop now</a>
</div>',
              1 => '<div class="index11newparallax text-center">
	<div class="first-heading">The perfect gift</div>
	<div class="second-heading">Check off your list with our best gifts</div>
	<a href="#" class="button">Shop now</a>
</div>',
            ),
          ),
        ),
      ),
    ),
  ),
  9 => 
  array (
    'custom_class' => 'border-bottom-1px',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '19',
    'padding_right' => '0',
    'padding_bottom' => '19',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '8',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      15 => 
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
            'type' => 'html',
            'html' => 
            array (
              $language_id => '<div class="brands-carousel-container index4newcarousel">
    <div class="owl-carousel new-brands-carousel">
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index4-new/brand1.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index4-new/brand2.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index4-new/brand3.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index4-new/brand4.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index4-new/brand5.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index4-new/brand2.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index4-new/brand1.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
    </div><!-- End brands-carousel -->
</div><!-- end .brands-carousel-container -->',
              1 => '<div class="brands-carousel-container index4newcarousel">
    <div class="owl-carousel new-brands-carousel">
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index4-new/brand1.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index4-new/brand2.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index4-new/brand3.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index4-new/brand4.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index4-new/brand5.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index4-new/brand2.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
        <div class="brand">
            <a href="#"><img src="image/catalog/porto/index4-new/brand1.jpg" alt="Brand name"></a>
        </div><!-- End .brand -->
    </div><!-- End brands-carousel -->
</div><!-- end .brands-carousel-container -->',
            ),
          ),
        ),
      ),
    ),
  ),
); 

$this->model_setting_setting->editSetting( "advanced_grid", $output );	

?>