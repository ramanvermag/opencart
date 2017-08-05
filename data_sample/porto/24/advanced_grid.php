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
            <strong>Address</strong> <span>1234 Street Name, City, United States</span>
        </li>
        <li>
            <strong>Phone</strong> <span>(123) 456-7890</span>
        </li> 
        <li>
            <strong>Email</strong> <span><a href="mailto:mail@example.com">mail@example.com</a></span>
        </li>
    </ul>
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
    </ul>
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
              $language_id => '<div class="block-right">
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
              1 => '<div class="block-right">
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
          <address style="float:left;font-size:13px;margin:0;">© Porto eCommerce. 2017. All Rights Reserved</address>
        </div>
        <div class="col-sm-7">
          <div class="working" style="float:left;">
            <span>Working Days/Hours<br><b>Mon - Sun / 9:00AM - 8:00PM</b></span>
          </div>
          <div class="custom-block" style="float:right;"><img src="image/catalog/porto/index4-new/payment-icon.png" style="max-width: 100%;" alt=""></div>
        </div>
      </div>
    </div>',
              1 => '<div class="block-bottom">
      <div class="row"> 
        <div class="col-sm-5">
          <address style="float:left;font-size:13px;margin:0;">© Porto eCommerce. 2017. All Rights Reserved</address>
        </div>
        <div class="col-sm-7">
          <div class="working" style="float:left;">
            <span>Working Days/Hours<br><b>Mon - Sun / 9:00AM - 8:00PM</b></span>
          </div>
          <div class="custom-block" style="float:right;"><img src="image/catalog/porto/index4-new/payment-icon.png" style="max-width: 100%;" alt=""></div>
        </div>
      </div>
    </div>',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'status' => '1',
        'width' => '9',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '0',
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
                $language_id => 'BE THE FIRST TO KNOW',
                1 => 'BE THE FIRST TO KNOW',
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
            'sort' => '',
            'type' => 'html',
            'html' => 
            array (
              $language_id => '<div class="social-icons clearfix">
        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
</div>',
              1 => '<div class="social-icons clearfix">
        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
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
                $language_id => 'Also purchased',
                1 => 'Also purchased',
              ),
              'get_products_from' => 'products',
              'product' => '',
              'products' => '42,43,44,30',
              'category' => '',
              'categories' => '',
              'width' => '300',
              'height' => '300',
              'limit' => '4',
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
    'padding_top' => '15',
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
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '1',
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
              $language_id => '<div class="home-banner-content">
      <div class="row">
        <div class="col-sm-4">
          <div class="item">
            <a href="#"><img src="image/catalog/porto/index15-new/banner-1.jpg" alt=""></a>
            <div class="content">
              <h3><a href="#">SUNGLASSES</a></h3>
              <span>Lorem Ipsum is simply dummy<br>text of the printing and typesetting industry.<br>Lorem Ipsum has</span>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="item">
            <a href="#"><img src="image/catalog/porto/index15-new/banner-2.jpg" alt=""></a>
            <div class="content">
              <h3><a href="#">Shoes</a></h3>
              <span>Lorem Ipsum is simply dummy<br>text of the printing and typesetting industry.<br>Lorem Ipsum has</span>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="item">
            <a href="#"><img src="image/catalog/porto/index15-new/banner-3.jpg" alt=""></a>
            <div class="content">
              <h3><a href="#">Watches</a></h3>
              <span>Lorem Ipsum is simply dummy<br>text of the printing and typesetting industry.<br>Lorem Ipsum has</span>
            </div>
          </div>
        </div>
      </div>
  </div>',
              1 => '<div class="home-banner-content">
      <div class="row">
        <div class="col-sm-4">
          <div class="item">
            <a href="#"><img src="image/catalog/porto/index15-new/banner-1.jpg" alt=""></a>
            <div class="content">
              <h3><a href="#">SUNGLASSES</a></h3>
              <span>Lorem Ipsum is simply dummy<br>text of the printing and typesetting industry.<br>Lorem Ipsum has</span>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="item">
            <a href="#"><img src="image/catalog/porto/index15-new/banner-2.jpg" alt=""></a>
            <div class="content">
              <h3><a href="#">Shoes</a></h3>
              <span>Lorem Ipsum is simply dummy<br>text of the printing and typesetting industry.<br>Lorem Ipsum has</span>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="item">
            <a href="#"><img src="image/catalog/porto/index15-new/banner-3.jpg" alt=""></a>
            <div class="content">
              <h3><a href="#">Watches</a></h3>
              <span>Lorem Ipsum is simply dummy<br>text of the printing and typesetting industry.<br>Lorem Ipsum has</span>
            </div>
          </div>
        </div>
      </div>
  </div>',
            ),
          ),
        ),
      ),
      9 => 
      array (
        'status' => '1',
        'width' => '12',
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
              'module_layout' => 'index15_new.tpl',
              'title' => 
              array (
                $language_id => 'Featured products',
                1 => 'Featured products',
              ),
              'get_products_from' => 'category',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '25',
              'width' => '400',
              'height' => '400',
              'limit' => '8',
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
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '149',
    'padding_right' => '0',
    'padding_bottom' => '190',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '#000000',
    'background_image_type' => '1',
    'background_image' => 'catalog/porto/index15-new/bg-parallax.jpg',
    'background_image_position' => 'top center',
    'background_image_repeat' => 'repeat',
    'background_image_attachment' => 'fixed',
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '3',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      10 => 
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
              $language_id => '<div class="parallax-container">
          <div class="content">
            <em>Men’s</em>
            <h2>Watches</h2> 
            <a href="#" class="btn-shop-now"><span>SHOP NOW</span></a>
          </div>
</div>',
              1 => '<div class="parallax-container">
          <div class="content">
            <em>Men’s</em>
            <h2>Watches</h2> 
            <a href="#" class="btn-shop-now"><span>SHOP NOW</span></a>
          </div>
</div>',
            ),
          ),
        ),
      ),
    ),
  ),
  7 => 
  array (
    'custom_class' => '',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '95',
    'padding_right' => '0',
    'padding_bottom' => '50',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '#f4f4f4',
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
      11 => 
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
              'module_layout' => 'index15_new2.tpl',
              'title' => 
              array (
                $language_id => 'New products',
                1 => 'New products',
              ),
              'get_products_from' => 'category',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '25',
              'width' => '600',
              'height' => '674',
              'limit' => '7',
            ),
          ),
        ),
      ),
    ),
  ),
); 

$this->model_setting_setting->editSetting( "advanced_grid", $output );	

?>