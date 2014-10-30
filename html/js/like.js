var SITE_PATH = 'http://yourhauntedstories.theconjuringmovie.com/';


$(function(){

	$('.likebutton').attr('unselectable','on').css('UserSelect','none').css('MozUserSelect','none');
	$('.likebutton').click(function(event) {
	
    	$(this).blur('false');
		//$(this).css("background","#363636");
		// Set your cookie name
		var cookieName = "Conjuring_"+event.target.id;
		
		// Give it a value (string, number)
		var cookieValue;
		//alert($.cookie(cookieName, cookieValue));          
		// Check if cookie exists
		if ($.cookie(cookieName, cookieValue)==1) 
		{
			if(cookieValue!=0){
		// If cookie DOES exist
				
				$.ajax({ 
				
					url: 'likes.php',
					data: 
					{
							action: 'unlike',
							id: event.target.id
					},
					type: 'post',
					
					success: function(output) {
						$('#'+event.target.id).css("background","#1C1C1C");
						cookieValue = 0;
						$.cookie(cookieName, cookieValue);
						var num = $('#'+event.target.id+'.likebutton').closest('.likebox').children('.likecount').html();
						$('#'+event.target.id+'.likebutton').css("background","#1C1C1C");
						num = parseInt(num) - 1;
						$('#'+event.target.id+'.likebutton').closest('.likebox').children('.likecount').html(num);
					}
				});
			}
			
			
		}else if(!$.cookie(cookieName)||$.cookie(cookieName, cookieValue)==0){
		// If cookie DOES NOT exist (first visit)
			
			$.ajax({ 
			
				url: 'likes.php',
				data: 
				{
						action: 'like',
						id: event.target.id
				},
				type: 'post',
				
				success: function(output) {
					$('#'+event.target.id).css("background","#363636");
					cookieValue = 1;
					$.cookie(cookieName, cookieValue);
					var num = $('#'+event.target.id+'.likebutton').closest('.likebox').children('.likecount').html();
					
					$('#'+event.target.id+'.likebutton').css("background","#363636");
					
					num = parseInt(num) + 1;
					$('#'+event.target.id+'.likebutton').closest('.likebox').children('.likecount').html(num);
				}
			});
		
		}
		
		var CookieSet = $.cookie(cookieName, cookieValue, { expires: 30 });
		
		if (CookieSet == null) {
		 
		}
		
		
		
		
		
						

		
	});
	
	$(".likebutton").each(function() {
						    
		    //alert( this.id );
			var cookieName = "Conjuring_"+this.id;

			// Give it a value (string, number)
			var cookieValue = 1;
			                
			// Check if cookie exists
			if ($.cookie(cookieName)) $(this).css("background","#363636");

		});	
});