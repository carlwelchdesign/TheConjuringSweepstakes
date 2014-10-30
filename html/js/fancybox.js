$(document).ready(function() {
	$('.fancybox').fancybox();


	$(".fancybox-effects-a").fancybox({
		helpers: {
			title : {
				type : 'outside'
			},
			overlay : {
				speedOut : 0
			}
		}
	});

	

	// Set custom style, close if clicked, change title type and overlay color
	$(".fancybox-effects-c").fancybox({
		wrapCSS    : 'fancybox-custom',
		closeClick : true,


		helpers : {
			title : {
				type : 'inside'
			},
			overlay : {
				css : {
			  'background' : 'rgba(58, 42, 45, 0.95)'
				}
			}
		}
	});

	
	/*
	 *  Button helper. Disable animations, hide close button, change title type and content
	 */

	$('.fancybox-buttons').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',

		prevEffect : 'none',
		nextEffect : 'none',

		closeBtn  : false,

		helpers : {
			title : {
				type : 'inside'
			},
			buttons	: {}
		},

		afterLoad : function() {
			this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
		}
	});


	/*
	 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
	 */

	$('.fancybox-thumbs').fancybox({
		prevEffect : 'none',
		nextEffect : 'none',

		closeBtn  : false,
		arrows    : false,
		nextClick : true,

		helpers : {
			thumbs : {
				width  : 50,
				height : 50
			}
		}
	});

	/*
	 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
	*/
	$('.fancybox-media')
		.attr('rel', 'media-gallery')
		.fancybox({
			openEffect : 'none',
			closeEffect : 'none',
			prevEffect : 'none',
			nextEffect : 'none',

			arrows : false,
			helpers : {
				media : {},
				buttons : {}
			}
		});

	$("#toclink").fancybox({
		width			: 722,
		height			: 781,
		autoScale		: false,
		transitionIn	: 'none',
		transitionOut	: 'none',
		type			: 'iframe'
	});
	
	$("#privlink").fancybox({
		width			: 722,
		height			: 781,
		autoScale		: false,
		transitionIn	: 'none',
		transitionOut	: 'none',
		type			: 'iframe'
	});
	
	
	$("#instructionslink").fancybox({
		width			: 722,
		height			: 781,
		autoScale		: false,
		transitionIn	: 'none',
		transitionOut	: 'none',
		type			: 'iframe'
	});

	
	$("#formtermslink").fancybox({
		width			: 722,
		height			: 781,
		autoScale		: false,
		transitionIn	: 'none',
		transitionOut	: 'none',
		type			: 'iframe'
	});
	
	$("#intro").fancybox({
		width			: 722,
		height			: 781,
		autoScale		: false,
		transitionIn	: 'none',
		transitionOut	: 'none',
		type			: 'iframe'
	});
	
	
	$("#legallink").fancybox({
		width			: 722,
		height			: 781,
		autoScale		: false,
		transitionIn	: 'none',
		transitionOut	: 'none',
		type			: 'iframe'
	});


});
