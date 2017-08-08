<?php

$config = $registry->get('config');

?>

<footer id="footer" class="footer text-center">
       <div class="container">
          <div class="socialbar">
             <a href="#" class="fa fa-facebook" target="_blank"></a>
             <a href="#" class="fa fa-twitter" target="_blank"></a>
             <a href="#" class="fa fa-instagram" target="_blank"></a>
             <a href="#" class="fa fa-pinterest" target="_blank"></a>
             <a href="#" class="fa fa-google-plus" target="_blank"></a>
             <a href="#" class="fa fa-flickr" target="_blank"></a>
             <a href="#" class="fa fa-youtube" target="_blank"></a>
          </div>
          <div class="menu-footer-menu-container">
             <ul id="menu-footer-menu" class="menu">
                <li><a href="#">Imprint</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Sitemap</a></li>
             </ul>
          </div>
          <div class="copyright">
             <div itemprop="logo">
                <img itemprop="url" src="image/img/logo.png" alt="" width="150">
             </div>
             &copy; 2010 - 2017 - <span itemprop="name">Uniter Cannabis</span>
          </div>
       </div>
    </footer>
    <!-- jQuery -->
    

   

     <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js"></script>

    <script src="catalog/view/javascript/owl.carousel.min.js"></script>
    <script src="catalog/view/javascript/jquery.easypiechart.min.js"></script>
    <script src="catalog/view/javascript/custom.js"></script>
    
  
    
    
    <script type="text/javascript">

      $(function(){


        $('.review-owl').owlCarousel({
            loop:true,
            
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        });

        $('.logos-owl').owlCarousel({
            loop:true,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:4
                }
            }
        });
    })

    </script>

</body>
</html>