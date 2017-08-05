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
              'height' => '300',
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
        <li><i class="fa fa-check"></i><a href="#">Mobile &amp; Retina Optimized</a></li>
    </ul>
</div>',
              1 => '<div class="widget">
    <h3 class="widget-title">Main Features</h3>
    <ul class="links">
        <li><i class="fa fa-check"></i><a href="#">Super Fast OpenCart Theme</a></li>
        <li><i class="fa fa-check"></i><a href="#">1st Fully working Ajax Theme</a></li>
        <li><i class="fa fa-check"></i><a href="#">20 Unique Homepage Layouts</a></li>
        <li><i class="fa fa-check"></i><a href="#">Powerful Admin Panel</a></li>
        <li><i class="fa fa-check"></i><a href="#">Mobile &amp; Retina Optimized</a></li>
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
    'margin_top' => '16',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '#65829d',
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
              $language_id => '<div class="browsecategories">
	<h2 class="filter-title"><span class="content"><strong>Browse Our Categories</strong></span><span class="title_line"></span></h2>
	<div class="owl-carousel banners-carousel">
	    <div class="banner2">
	        <a href="#">
	        	<img src="image/catalog/porto/index7-new/banner-c1.jpg" alt="">
	        	<p><span>HOME &amp; GARDEN</span><strong>22 products</strong></p>
	        </a>
	    </div><!-- End .banner -->
	    
	    <div class="banner2">
	        <a href="#">
	        	<img src="image/catalog/porto/index7-new/banner-c2.jpg" alt="">
	        	<p><span>SPORTS</span><strong>14 products</strong></p>
	        </a>
	    </div><!-- End .banner -->
	    
	    <div class="banner2">
	        <a href="#">
	        	<img src="image/catalog/porto/index7-new/banner-c3.jpg" alt="">
	        	<p><span>FASHION</span><strong>24 products</strong></p>
	        </a>
	    </div><!-- End .banner -->
	    
	    <div class="banner2">
	        <a href="#">
	        	<img src="image/catalog/porto/index7-new/banner-c4.jpg" alt="">
	        	<p><span>ELECTRONICS</span><strong>20 products</strong></p>
	        </a>
	    </div><!-- End .banner -->
	    
	    <div class="banner2">
	        <a href="#">
	        	<img src="image/catalog/porto/index7-new/banner-c1.jpg" alt="">
	        	<p><span>HOME &amp; GARDEN</span><strong>22 products</strong></p>
	        </a>
	    </div><!-- End .banner -->
	    
	    <div class="banner2">
	        <a href="#">
	        	<img src="image/catalog/porto/index7-new/banner-c2.jpg" alt="">
	        	<p><span>SPORTS</span><strong>14 products</strong></p>
	        </a>
	    </div><!-- End .banner -->
	    
	    <div class="banner2">
	        <a href="#">
	        	<img src="image/catalog/porto/index7-new/banner-c3.jpg" alt="">
	        	<p><span>FASHION</span><strong>24 products</strong></p>
	        </a>
	    </div><!-- End .banner -->
	    
	    <div class="banner2">
	        <a href="#">
	        	<img src="image/catalog/porto/index7-new/banner-c4.jpg" alt="">
	        	<p><span>ELECTRONICS</span><strong>20 products</strong></p>
	        </a>
	    </div><!-- End .banner -->
	</div><!-- End .owl-carousel -->
</div>',
              1 => '<div class="browsecategories">
	<h2 class="filter-title"><span class="content"><strong>Browse Our Categories</strong></span><span class="title_line"></span></h2>
	<div class="owl-carousel banners-carousel">
	    <div class="banner2">
	        <a href="#">
	        	<img src="image/catalog/porto/index7-new/banner-c1.jpg" alt="">
	        	<p><span>HOME &amp; GARDEN</span><strong>22 products</strong></p>
	        </a>
	    </div><!-- End .banner -->
	    
	    <div class="banner2">
	        <a href="#">
	        	<img src="image/catalog/porto/index7-new/banner-c2.jpg" alt="">
	        	<p><span>SPORTS</span><strong>14 products</strong></p>
	        </a>
	    </div><!-- End .banner -->
	    
	    <div class="banner2">
	        <a href="#">
	        	<img src="image/catalog/porto/index7-new/banner-c3.jpg" alt="">
	        	<p><span>FASHION</span><strong>24 products</strong></p>
	        </a>
	    </div><!-- End .banner -->
	    
	    <div class="banner2">
	        <a href="#">
	        	<img src="image/catalog/porto/index7-new/banner-c4.jpg" alt="">
	        	<p><span>ELECTRONICS</span><strong>20 products</strong></p>
	        </a>
	    </div><!-- End .banner -->
	    
	    <div class="banner2">
	        <a href="#">
	        	<img src="image/catalog/porto/index7-new/banner-c1.jpg" alt="">
	        	<p><span>HOME &amp; GARDEN</span><strong>22 products</strong></p>
	        </a>
	    </div><!-- End .banner -->
	    
	    <div class="banner2">
	        <a href="#">
	        	<img src="image/catalog/porto/index7-new/banner-c2.jpg" alt="">
	        	<p><span>SPORTS</span><strong>14 products</strong></p>
	        </a>
	    </div><!-- End .banner -->
	    
	    <div class="banner2">
	        <a href="#">
	        	<img src="image/catalog/porto/index7-new/banner-c3.jpg" alt="">
	        	<p><span>FASHION</span><strong>24 products</strong></p>
	        </a>
	    </div><!-- End .banner -->
	    
	    <div class="banner2">
	        <a href="#">
	        	<img src="image/catalog/porto/index7-new/banner-c4.jpg" alt="">
	        	<p><span>ELECTRONICS</span><strong>20 products</strong></p>
	        </a>
	    </div><!-- End .banner -->
	</div><!-- End .owl-carousel -->
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
    'margin_top' => '59',
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
    'sort_order' => '5',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      9 => 
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
              'module_layout' => 'index7new.tpl',
              'title' => 
              array (
                $language_id => 'Just arrived',
                1 => 'Just arrived',
              ),
              'get_products_from' => 'category',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '25',
              'width' => '200',
              'height' => '200',
              'limit' => '12',
            ),
          ),
        ),
      ),
    ),
  ),
  7 => 
  array (
    'custom_class' => 'otherrow',
    'margin_top' => '31',
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
    'sort_order' => '7',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      10 => 
      array (
        'status' => '1',
        'width' => '6',
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
            'type' => 'latest_blogs',
            'latest_blogs' => 
            array (
              'module_layout' => 'index7new.tpl',
              'title' => 
              array (
                $language_id => 'Latest blog posts',
                1 => 'Latest blog posts',
              ),
              'width' => '262',
              'height' => '208',
              'limit' => '2',
            ),
          ),
        ),
      ),
      11 => 
      array (
        'status' => '1',
        'width' => '6',
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
              $language_id => '<h2 class="slider-title">
    <span class="inline-title">WHAT CLIENT\'S SAY</span>
    <span class="line" style="width: 100%"></span>
</h2>
<div class="owl-carousel testimonial-carousel close-dots">
    <div class="item">
        <div class="testimonial-author2">
          <div class="img-thumbnail img-thumbnail-small"><img src="image/catalog/porto/index7-new/client-1-12.png" alt=""></div>
          <p><strong>John Smith</strong><span>CEO &amp; Founder - Okler</span></p>
        </div>
        <blockquote class="testimonial2">
          <p>Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model.</p>
        </blockquote> 
    </div>
    
    <div class="item">
        <div class="testimonial-author2">
          <div class="img-thumbnail img-thumbnail-small"><img src="image/catalog/porto/index7-new/client-1-12.png" alt=""></div>
          <p><strong>John Smith</strong><span>CEO &amp; Founder - Okler</span></p>
        </div>
        <blockquote class="testimonial2">
          <p>Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model.</p>
        </blockquote> 
    </div>
</div><!-- End .testimonial-caroseul -->',
              1 => '<h2 class="slider-title">
    <span class="inline-title">WHAT CLIENT\'S SAY</span>
    <span class="line" style="width: 100%"></span>
</h2>
<div class="owl-carousel testimonial-carousel close-dots">
    <div class="item">
        <div class="testimonial-author2">
          <div class="img-thumbnail img-thumbnail-small"><img src="image/catalog/porto/index7-new/client-1-12.png" alt=""></div>
          <p><strong>John Smith</strong><span>CEO &amp; Founder - Okler</span></p>
        </div>
        <blockquote class="testimonial2">
          <p>Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model.</p>
        </blockquote> 
    </div>
    
    <div class="item">
        <div class="testimonial-author2">
          <div class="img-thumbnail img-thumbnail-small"><img src="image/catalog/porto/index7-new/client-1-12.png" alt=""></div>
          <p><strong>John Smith</strong><span>CEO &amp; Founder - Okler</span></p>
        </div>
        <blockquote class="testimonial2">
          <p>Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model.</p>
        </blockquote> 
    </div>
</div><!-- End .testimonial-caroseul -->',
            ),
          ),
        ),
      ),
    ),
  ),
); 

$this->model_setting_setting->editSetting( "advanced_grid", $output );	

?>