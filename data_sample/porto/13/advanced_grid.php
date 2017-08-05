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
              $language_id => '<div class="widget">
                                            <h3 class="widget-title">SHOP</h3>
                                            <ul class="links">
                                                <li><i class="fa fa-angle-right"></i><a href="#">Fashion Promo</a></li>
                                                <li><i class="fa fa-angle-right"></i><a href="#">Discounts</a></li>
                                                <li><i class="fa fa-angle-right"></i><a href="#">Outlet</a></li>
                                            </ul>
                                        </div>',
              1 => '<div class="widget">
                                            <h3 class="widget-title">SHOP</h3>
                                            <ul class="links">
                                                <li><i class="fa fa-angle-right"></i><a href="#">Fashion Promo</a></li>
                                                <li><i class="fa fa-angle-right"></i><a href="#">Discounts</a></li>
                                                <li><i class="fa fa-angle-right"></i><a href="#">Outlet</a></li>
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
                                            <h3 class="widget-title">POPULAR TAGS</h3>
                                            <div class="tagcloud">
                                                <a href="#" title="5 Topics">clothes</a>
                                                <a href="#" title="5 Topics">mobile</a>
                                                <a href="#" title="5 Topics">watch</a>
                                                <a href="#" title="5 Topics">white</a>
                                                <a href="#" title="5 Topics">women</a><br>
                                                <a href="#" title="5 Topics">porto</a>
                                                <a href="#" title="5 Topics">opencart</a>
                                                <a href="#" title="5 Topics">themeforest</a>
                                            </div><!-- End .tagcloud -->
                                        </div>',
              1 => '<div class="widget">
                                            <h3 class="widget-title">POPULAR TAGS</h3>
                                            <div class="tagcloud">
                                                <a href="#" title="5 Topics">clothes</a>
                                                <a href="#" title="5 Topics">mobile</a>
                                                <a href="#" title="5 Topics">watch</a>
                                                <a href="#" title="5 Topics">white</a>
                                                <a href="#" title="5 Topics">women</a><br>
                                                <a href="#" title="5 Topics">porto</a>
                                                <a href="#" title="5 Topics">opencart</a>
                                                <a href="#" title="5 Topics">themeforest</a>
                                            </div><!-- End .tagcloud -->
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
                                            <h3 class="widget-title">MY ACCOUNT</h3>
                                            <ul class="links">
                                                <li><i class="fa fa-angle-right"></i><a href="#">My Account</a></li>
                                                <li><i class="fa fa-angle-right"></i><a href="#">About Us</a></li>
                                                <li><i class="fa fa-angle-right"></i><a href="#">Store Locations</a></li>
                                            </ul>
                                        </div>',
              1 => '<div class="widget">
                                            <h3 class="widget-title">MY ACCOUNT</h3>
                                            <ul class="links">
                                                <li><i class="fa fa-angle-right"></i><a href="#">My Account</a></li>
                                                <li><i class="fa fa-angle-right"></i><a href="#">About Us</a></li>
                                                <li><i class="fa fa-angle-right"></i><a href="#">Store Locations</a></li>
                                            </ul>
                                        </div>',
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
                                            <i class="fa fa-map-marker"></i>123 Street Name, City, England
                                        </li>
                                        <li>
                                            <i class="fa fa-phone"></i>(123) 456-7890
                                        </li> 
                                        <li>
                                            <i class="fa fa-envelope-o"></i><a href="mailto:mail@example.com">mail@example.com</a>
                                        </li>
                                    </ul>
                                </div>',
              1 => '<div class="widget contact-info">
                                    <h3 class="widget-title">Contact Information</h3>
                                    <ul class="contact-details">
                                        <li>
                                            <i class="fa fa-map-marker"></i>123 Street Name, City, England
                                        </li>
                                        <li>
                                            <i class="fa fa-phone"></i>(123) 456-7890
                                        </li> 
                                        <li>
                                            <i class="fa fa-envelope-o"></i><a href="mailto:mail@example.com">mail@example.com</a>
                                        </li>
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
    'position' => 'content_top',
    'status' => '1',
    'sort_order' => '1',
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
              'module_layout' => 'index13.tpl',
              'title' => 
              array (
                $language_id => 'Featured products',
                1 => 'Featured products',
              ),
              'get_products_from' => 'most_viewed',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '',
              'width' => '250',
              'height' => '333',
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
    'padding_top' => '40',
    'padding_right' => '0',
    'padding_bottom' => '10',
    'padding_left' => '0',
    'force_full_width' => '0',
    'background_color' => '#54555e',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '99999',
    'position' => 'customfooter',
    'status' => '1',
    'sort_order' => '',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      8 => 
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
              $language_id => '<div class="widget contact-info info2">
                                        <h3 class="widget-title">ABOUT PORTO</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tristique augue eget enim feugiat blandit. Phasellus bibendum ex leo, at egestas lacus pellentesque in x leo, at egestas lacus pellentesque in. x leo, at egestas lacus pellentesque.</p>
                                        <strong><a href="http://themeforest.net/item/porto-ultimate-responsive-magento-theme/9725864" style="font-weight:600;">Buy Porto eCommerce</a></strong>
                                        <div class="sm-margin"></div><!-- space -->
                                        <ul class="contact-details">
                                            <li>
                                                <i class="fa fa-phone"></i> <strong>Phone:</strong> <span>(123) 456-7890</span>
                                            </li> 
                                        </ul>
                                        <div class="xs-margin half"></div><!-- space -->
                                        <div class="social-icons">
                                            <a href="#" class="social-icon icon-facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="#" class="social-icon icon-twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#" class="social-icon icon-linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>',
              1 => '<div class="widget contact-info info2">
                                        <h3 class="widget-title">ABOUT PORTO</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tristique augue eget enim feugiat blandit. Phasellus bibendum ex leo, at egestas lacus pellentesque in x leo, at egestas lacus pellentesque in. x leo, at egestas lacus pellentesque.</p>
                                        <strong><a href="http://themeforest.net/item/porto-ultimate-responsive-magento-theme/9725864" style="font-weight:600;">Buy Porto eCommerce</a></strong>
                                        <div class="sm-margin"></div><!-- space -->
                                        <ul class="contact-details">
                                            <li>
                                                <i class="fa fa-phone"></i> <strong>Phone:</strong> <span>(123) 456-7890</span>
                                            </li> 
                                        </ul>
                                        <div class="xs-margin half"></div><!-- space -->
                                        <div class="social-icons">
                                            <a href="#" class="social-icon icon-facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="#" class="social-icon icon-twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#" class="social-icon icon-linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>',
            ),
          ),
        ),
      ),
      9 => 
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
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                $language_id => 'Featured products',
                1 => 'Featured products',
              ),
              'get_products_from' => 'most_viewed',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '',
              'width' => '150',
              'height' => '150',
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
        'sort' => '3',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'newsletter',
            'newsletter' => 
            array (
              'module_layout' => 'index13.tpl',
              'title' => 
              array (
                $language_id => 'Be first to know',
                1 => 'Be first to know',
              ),
              'text' => 
              array (
                $language_id => 'Get all the latest information on Events, <br> Sales and Offers. Sign up for newsletter <br>today.',
                1 => 'Get all the latest information on Events, <br> Sales and Offers. Sign up for newsletter <br>today.',
              ),
              'input_placeholder' => 
              array (
                $language_id => 'Enter your e-mail Address',
                1 => 'Enter your e-mail Address',
              ),
              'subscribe_text' => 
              array (
                $language_id => 'Submit',
                1 => 'Submit',
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
      11 => 
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
<h3 class="widget-title">Follow us</h3>
      <a class="twitter-timeline" href="//twitter.com/twitterdev" data-widget-id="362597660089274368" data-screen-name="swtheme" data-theme="dark" height="285">Tweets by @swtheme</a>
        <script>window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));</script>

</div>',
              1 => '<div class="widget contact-info">
<h3 class="widget-title">Follow us</h3>
      <a class="twitter-timeline" href="//twitter.com/twitterdev" data-widget-id="362597660089274368" data-screen-name="swtheme" data-theme="dark" height="285">Tweets by @swtheme</a>
        <script>window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));</script>

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