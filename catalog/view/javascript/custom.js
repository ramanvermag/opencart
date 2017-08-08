( function($) {
  'use strict';
  

	/**********/
	/* Pie charts */
	/**********/

	var pieBarColor = '#0c81be';


	if ( $('.pie-charts').length ) {
	
		// is visible check
		$.fn.isVisible = function() {
			var rect = this[0].getBoundingClientRect();
			return (
				(rect.height > 0 || rect.width > 0) &&
				rect.bottom >= 0 &&
				rect.right >= 0 &&
				rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
				rect.left <= (window.innerWidth || document.documentElement.clientWidth)
			);
		};
	
		// start is visible
		if($(".pie-charts").isVisible()) {	
			
			$(".chart").easyPieChart({
				scaleColor: false,
				trackColor: '#ececec',
				barColor: pieBarColor,
				lineWidth: 6,
				rotate: 160,
				size: 160,
				animate: 5000,
			});
			
		// start is visible after scroll

		} else {

			$(window).scroll( function(){

				$('.chart').each( function(i){
					var bottom_of_object = $(this).offset().top + $(this).outerHeight();
					var bottom_of_window = $(window).scrollTop() + $(window).height();
					if( bottom_of_window > bottom_of_object ){
						$('.chart').easyPieChart({
							scaleColor: false,
							trackColor:'#ececec',
							barColor: pieBarColor,
							lineWidth: 6,
							rotate: 160,
							size: 160,
							animate: 5000,
						});
					}
				}); 
			});

		}
		 $(window).trigger("scroll")

	}
	
	
	/*****************************************************************/
	/* DROPCAP */
	/*****************************************************************/

	
		// the first paragraph of wordpress post is not empty

		if( $('.post .post-content p:not(:empty):first').text() ) {

			$( '.post .post-content p:first' ).addClass( 'paragraph-with-dropcap' );

		// the first paragraph of wordpress post is empty

		} else if( $('.post .post-content p:first(:empty)') ){

			$( '.post .post-content p:nth-child(2)' ).addClass( 'paragraph-with-dropcap' );

		}
	
		
		
		$( 'p.paragraph-with-dropcap' ).each(function() {
		
			// Split text at each period.
			
			var text = $(this).text().split('.');
			for( var i = 0; i < 1; i++ ) {
			
				// Wrap first letter in span.
				var first_letter = '<span class="dropcap">' + text[i].substr(0,1) + '</span>';
				
				// Wrap sentence in span.
				text[i] = '' + first_letter + text[i].substring(1, text[i].length) + '';
				
			}
			$(this).html(text.join('.'));
			
		});
	
	

})(jQuery);