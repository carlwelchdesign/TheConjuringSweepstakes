window.COUNTRY;

$(document).ready(function () {

	var $container = $('#entries');
	var $containerItems;
	
	
	$('#filter_story').click(function(){

		$('#options').val( 'Story' );
		loadItems('Story');
		
	});
	    
	$('#filter_photo').click(function(){

		$('#options').val( 'Photos' );
		loadItems('Photos');

	});
	
	
	$('#filter_video').click(function(){
	
		$('#options').val( 'Videos' );
		loadItems('Videos');

	});
	
	
	
	$container.imagesLoaded(function(){
		$containerItems = $('#entriesContainer').html();
		masonstuff();
	});
	
	function masonstuff(){
		$container.masonry({
			itemSelector : '.item',
			isAnimated: false,
			columnWidth : 320
		});
	}
	
	
	function loadItems(method){
		
			$.ajax({ 
			
				url: 'loadItems.php',
				data: 
				{
						action: method,
						dataType: 'html',
						country: 'US'
				},
				type: 'post',
				
				success: function(html) {

					$('#entries').empty();
				
					//console.log(html);
					$('#entries').html(html);
					$('.gotostory').click(function(){
						var id = $(this).attr('ref');
						window.location = 'story.php?s='+id;
					});
					$container.masonry('reloadItems');
					$container.imagesLoaded(function(){
						$containerItems = $('#entriesContainer').html();
						masonstuff();
					});

				}
			});
		
		
		
		
	}
	
	loadItems('Latest');
	
	$("#options").on("change", function () {
	

	    var value = this.value;
	    
	    loadItems(value);

	});

	// $('.share').toggle(function(){
	// 	$('.share-sites').animate({'margin-left': 0}, 500);
	// 	$(this).addClass('open');
	// }, function() {
	// 	$('.share-sites').animate({'margin-left': '-345px'}, 500);
	// 	$(this).removeClass('open');
	// }); 
	
	


});