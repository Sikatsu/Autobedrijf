(function( $ ) {
	'use strict';

	$(window).load(function(){

		/**
		 * Enables us to toggle the field categories
		 */
		$(document).on('click', '.rdw-expand-fields a', function(e) {
			e.preventDefault();
			$(this).next().slideToggle('fast', 'linear');
		});

		/**
		 * Switches to clicked tab in the back-end when clicked.
		 */
		$(document).on('click', '.van-tabs li', function(e) {
			e.preventDefault();
			var target = this;

			if (!$(this).hasClass('active')) {
				$($('.active').find('a').attr('href')).fadeOut('fast', 'linear', function() {
					$($(target).find('a').attr('href')).fadeIn('fast', 'linear');
					$('.active').removeClass('active');
					$(target).addClass('active');
				})
			}
			
		});

		/**
		 * Makes an ajax call to the backend, letting it know the open-rdw-notice
		 * is dismissed and should be saved as dismissed.
		 */
		$(document).on('click', '.open-rdw-notice .notice-dismiss', function() {
			
			$.ajax({
				url: ajaxurl,
				data: {
					action: 'open-rdw-notice-dismiss'
				}
			})

		});

	});

})( jQuery );
