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
            <strong>Address</strong> <span>1234 Street Name, City, United States</span>
        </li>
        <li>
            <strong>Phone</strong> <span>(123) 456-7890</span>
        </li> 
        <li>
            <strong>Email</strong> <span><a href="mailto:mail@example.com">mail@example.com</a></span>
        </li>
        <li>
            <strong>Working Days/Hours</strong> <span>Mon - Sun / 9:00 AM - 8:00 PM</span>
        </li>
    </ul>
    
    <div class="social-icons">
    	<a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    	<a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    	<a href="https://linkedin.com/" title="Linkedin" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
    </div>
</div><!-- End .widget -->',
              1 => '<div class="widget contact-info">
    <h3 class="widget-title">Contact Information</h3>
    <ul class="contact-details">
        <li>
            <strong>Address</strong> <span>1234 Street Name, City, United States</span>
        </li>
        <li>
            <strong>Phone</strong> <span>(123) 456-7890</span>
        </li> 
        <li>
            <strong>Email</strong> <span><a href="mailto:mail@example.com">mail@example.com</a></span>
        </li>
        <li>
            <strong>Working Days/Hours</strong> <span>Mon - Sun / 9:00 AM - 8:00 PM</span>
        </li>
    </ul>
    
    <div class="social-icons">
    	<a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    	<a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    	<a href="https://linkedin.com/" title="Linkedin" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
    </div>
</div><!-- End .widget -->',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'status' => '1',
        'width' => '9',
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
            'type' => 'newsletter',
            'newsletter' => 
            array (
              'module_layout' => 'default_new.tpl',
              'title' => 
              array (
                $language_id => 'Be the first to know',
                1 => 'Be the first to know',
              ),
              'text' => 
              array (
                $language_id => 'Get all the latest information on Events, Sales and Offers.<br>
Sign up for newsletter today.',
                1 => 'Get all the latest information on Events, Sales and Offers.<br>
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
          2 => 
          array (
            'status' => '1',
            'sort' => '2',
            'type' => 'html',
            'html' => 
            array (
              $language_id => '<div class="block-bottom">
      <div class="row"> 
        <div class="col-sm-5">
          <div class="block">
            <div class="block-title"><strong><span>MY ACCOUNT</span></strong></div>
            <div class="block-content">
              <div class="row">
                <div class="col-sm-6">
                  <ul class="links">
                    <li><a href="index.php?route=information/information&information_id=4" title="About us">About us</a></li> 
                    <li><a href="index.php?route=information/contact" title="Contact Us">Contact us</a></li>
                    <li><a href="index.php?route=account/account" title="My Account">My Account</a></li> 
                  </ul>
                </div>
                <div class="col-sm-6">
                  <ul class="links"> 
                    <li><a href="index.php?route=account/order" title="Order history">Order history</a></li>
                    <li><a href="index.php?route=product/search" title="Contact us">Advanced search</a></li>
                    <li><a href="index.php?route=account/login" title="Login">Login</a></li>
                  </ul>
                </div>
              </div> 
            </div>
          </div>
        </div>
        <div class="col-sm-7">
          <div class="block">
            <div class="block-title"><strong><span>Main Features</span></strong></div>
            <div class="block-content">
              <div class="row">
                <div class="col-sm-6"> 
                  <ul class="features">
                    <li><a href="#">Super Fast OpenCart Theme</a></li>
                    <li><a href="#">1st Fully working Ajax Theme</a></li>
                    <li><a href="#">20 Unique Homepage Layouts</a></li> 
                  </ul>
                </div>
                <div class="col-sm-6"> 
                  <ul class="features"> 
                    <li><a href="#">Powerful Admin Panel</a></li>
                    <li><a href="#">Mobile & Retina Optimized</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>',
              1 => '<div class="block-bottom">
      <div class="row"> 
        <div class="col-sm-5">
          <div class="block">
            <div class="block-title"><strong><span>MY ACCOUNT</span></strong></div>
            <div class="block-content">
              <div class="row">
                <div class="col-sm-6">
                  <ul class="links">
                    <li><a href="index.php?route=information/information&information_id=4" title="About us">About us</a></li> 
                    <li><a href="index.php?route=information/contact" title="Contact Us">Contact us</a></li>
                    <li><a href="index.php?route=account/account" title="My Account">My Account</a></li> 
                  </ul>
                </div>
                <div class="col-sm-6">
                  <ul class="links"> 
                    <li><a href="index.php?route=account/order" title="Order history">Order history</a></li>
                    <li><a href="index.php?route=product/search" title="Contact us">Advanced search</a></li>
                    <li><a href="index.php?route=account/login" title="Login">Login</a></li>
                  </ul>
                </div>
              </div> 
            </div>
          </div>
        </div>
        <div class="col-sm-7">
          <div class="block">
            <div class="block-title"><strong><span>Main Features</span></strong></div>
            <div class="block-content">
              <div class="row">
                <div class="col-sm-6"> 
                  <ul class="features">
                    <li><a href="#">Super Fast OpenCart Theme</a></li>
                    <li><a href="#">1st Fully working Ajax Theme</a></li>
                    <li><a href="#">20 Unique Homepage Layouts</a></li> 
                  </ul>
                </div>
                <div class="col-sm-6"> 
                  <ul class="features"> 
                    <li><a href="#">Powerful Admin Panel</a></li>
                    <li><a href="#">Mobile & Retina Optimized</a></li>
                  </ul>
                </div>
              </div>
            </div>
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
      3 => 
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
      4 => 
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
  4 => 
  array (
    'custom_class' => '',
    'margin_top' => '5',
    'margin_right' => '0',
    'margin_bottom' => '27',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '#f4f4f4',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '0',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      5 => 
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
  5 => 
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
      6 => 
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
  6 => 
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
    'background_color' => '#f4f4f4',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'customfooter',
    'status' => '1',
    'sort_order' => '',
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
              'module_layout' => 'products_grid_with_carousel.tpl',
              'title' => 
              array (
                $language_id => 'Featured products',
                1 => 'Featured products',
              ),
              'get_products_from' => 'category',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '20',
              'width' => '300',
              'height' => '312',
              'limit' => '10',
            ),
          ),
        ),
      ),
    ),
  ),
); 

$this->model_setting_setting->editSetting( "advanced_grid", $output );	

?>