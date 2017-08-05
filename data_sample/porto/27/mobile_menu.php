<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["mobile_menu_module"] = array (
  1 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      $language_id => '',
      1 => '',
    ),
    'block_content' => 
    array (
      $language_id => '<p><br></p>',
      1 => '<p><br></p>',
    ),
    'html' => 
    array (
      $language_id => '<div class="menu-wrap">
    <ul class="mobile-menu accordion-menu">
        <li><a href="#">Home pages <span class="arrow"></span></a>
            <ul>
                <li><a href="http://obest.org/porto/opencart/1/">Home Version 1</a></li>
                <li><a href="http://obest.org/porto/opencart/2/">Home Version 2</a></li>
                <li><a href="http://obest.org/porto/opencart/3/">Home Version 3</a></li>
                <li><a href="http://obest.org/porto/opencart/4/">Home Version 4</a></li>
                <li><a href="http://obest.org/porto/opencart/5/">Home Version 5</a></li>
                <li><a href="http://obest.org/porto/opencart/6/">Home Version 6</a></li>
                <li><a href="http://obest.org/porto/opencart/7/">Home Version 7</a></li>
                <li><a href="http://obest.org/porto/opencart/8/">Home Version 8</a></li>
                <li><a href="http://obest.org/porto/opencart/9/">Home Version 9</a></li>
                <li><a href="http://obest.org/porto/opencart/10/">Home Version 10</a></li>
                <li><a href="http://obest.org/porto/opencart/11/">Home Version 11</a></li>
                <li><a href="http://obest.org/porto/opencart/12/">Home Version 12</a></li>
                <li><a href="http://obest.org/porto/opencart/13/">Home Version 13</a></li>
                <li><a href="http://obest.org/porto/opencart/14/">Home Version 14</a></li>
                <li><a href="http://obest.org/porto/opencart/15/">Home Version 15</a></li>
                <li><a href="http://obest.org/porto/opencart/16/">Home Version 16</a></li>
                <li><a href="http://obest.org/porto/opencart/17/">Home Version 17</a></li>
                <li><a href="http://obest.org/porto/opencart/18/">Home Version 18</a></li>
                <li><a href="http://obest.org/porto/opencart/19/">Home Version 19</a></li>
                <li><a href="http://obest.org/porto/opencart/20/">Home Version 20</a></li>
            </ul>
        </li>
        <li><a href="index.php?route=product/category&path=20">Shop <span class="arrow"></span></a>
            <ul>
                <li><a href="index.php?route=product/category&path=20">Category page</a></li>
                <li><a href="index.php?route=product/product&product_id=30">Product page</a></li>
            </ul>
        </li>
    </ul>
</div><!-- End .menu-wrap -->
<div class="menu-wrap">
    <ul class="mobile-menu accordion-menu">
        <li><a href="index.php?route=product/special">Special Offer</a></li>
        <li><a href="#">Buy This Theme!</a></li>
    </ul>
</div><!-- End .menu-wrap -->',
      1 => '<div class="menu-wrap">
    <ul class="mobile-menu accordion-menu">
        <li><a href="#">Home pages <span class="arrow"></span></a>
            <ul>
                <li><a href="http://obest.org/porto/opencart/1/">Home Version 1</a></li>
                <li><a href="http://obest.org/porto/opencart/2/">Home Version 2</a></li>
                <li><a href="http://obest.org/porto/opencart/3/">Home Version 3</a></li>
                <li><a href="http://obest.org/porto/opencart/4/">Home Version 4</a></li>
                <li><a href="http://obest.org/porto/opencart/5/">Home Version 5</a></li>
                <li><a href="http://obest.org/porto/opencart/6/">Home Version 6</a></li>
                <li><a href="http://obest.org/porto/opencart/7/">Home Version 7</a></li>
                <li><a href="http://obest.org/porto/opencart/8/">Home Version 8</a></li>
                <li><a href="http://obest.org/porto/opencart/9/">Home Version 9</a></li>
                <li><a href="http://obest.org/porto/opencart/10/">Home Version 10</a></li>
                <li><a href="http://obest.org/porto/opencart/11/">Home Version 11</a></li>
                <li><a href="http://obest.org/porto/opencart/12/">Home Version 12</a></li>
                <li><a href="http://obest.org/porto/opencart/13/">Home Version 13</a></li>
                <li><a href="http://obest.org/porto/opencart/14/">Home Version 14</a></li>
                <li><a href="http://obest.org/porto/opencart/15/">Home Version 15</a></li>
                <li><a href="http://obest.org/porto/opencart/16/">Home Version 16</a></li>
                <li><a href="http://obest.org/porto/opencart/17/">Home Version 17</a></li>
                <li><a href="http://obest.org/porto/opencart/18/">Home Version 18</a></li>
                <li><a href="http://obest.org/porto/opencart/19/">Home Version 19</a></li>
                <li><a href="http://obest.org/porto/opencart/20/">Home Version 20</a></li>
            </ul>
        </li>
        <li><a href="index.php?route=product/category&path=20">Shop <span class="arrow"></span></a>
            <ul>
                <li><a href="index.php?route=product/category&path=20">Category page</a></li>
                <li><a href="index.php?route=product/product&product_id=30">Product page</a></li>
            </ul>
        </li>
    </ul>
</div><!-- End .menu-wrap -->
<div class="menu-wrap">
    <ul class="mobile-menu accordion-menu">
        <li><a href="index.php?route=product/special">Special Offer</a></li>
        <li><a href="#">Buy This Theme!</a></li>
    </ul>
</div><!-- End .menu-wrap -->',
    ),
    'layout_id' => '99999',
    'position' => 'mobile_menu',
    'status' => '1',
    'sort_order' => '',
  ),
); 

$this->model_setting_setting->editSetting( "mobile_menu", $output );	

?>