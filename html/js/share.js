//FB_SHARE_APP_ID = "351899028271519";
//alert(window.FB_SHARE_APP_ID);


FB.init({appId: window.FB_SHARE_APP_ID, status: true, cookie: true});


//console.log('window twitter share msg',window.TWITTER_STORY_SHARE_MSG);
//TWITTER_STORY_SHARE_MSG = 'http://twitter.com/intent/tweet?text='+window.TWITTER_STORY_SHARE_MSG+" ";
//alert(window.FB_SHARE_APP_ID);
//console.log('rewritten twitter share msg',TWITTER_STORY_SHARE_MSG);
$('.facebook.stories').click(function()
{


	var storyImage = $(this).closest('.item').children('.videoImage').attr('src');

	if(storyImage==undefined) 
	{
		storyImage = SITE_PATH+$('.item .photo').attr('src');
	}
	
	
	if(storyImage==undefined||storyImage==SITE_PATH+'undefined') 
	{
		storyImage = SITE_PATH+window.UPLOADPATH+$(this).closest('.item').children('.photo').attr('refimage');
	}
	
	
	
	
	if(storyImage==SITE_PATH+window.UPLOADPATH+'undefined'||storyImage==SITE_PATH+'undefined')
	{
		storyImage = SITE_PATH+'images/fb-profile.jpg';
	}

	var storytitle = $(this).closest('.item').children('.itemtitle').text();
	var storycaption = $(this).closest('.item').children('.story').text().substr(0,600);
	var storyurl = $(this).closest('.item').attr('ref');
	
	
	//console.log(storyImage);
	
	// calling the API …
	var obj = {
		method: 'feed',
		link: SITE_PATH+'story.php?s='+storyurl,
		picture: storyImage,
		name: storytitle,
		caption: storycaption,
		description: window.FACEBOOK_STORY_SHARE_MSG
	};
	
	function callback(response) {
		//document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
	}
	
	FB.ui(obj, callback);
});





$('.twitter.stories').click(function(options)
{	
   // console.log('twt msg',TWITTER_STORY_SHARE_MSG);
	var storyid = $(this).closest('.item').attr('ref');
	
	var link = SITE_PATH+'story.php?s='+storyid;
	
	
	getBitly(link);
  	

});  


function getBitly(bitlink) {
		$.ajax({ 
		
			url: 'shortenURL.php',
			data: 
			{
					link: bitlink
			},
			type: 'post',
			datatype: "text",
			success: function(output) {
			
				//alert("bitly: "+output);
				TWITTER_STORY_SHARE_MSG_compiled = null;
				TWITTER_STORY_SHARE_MSG_compiled = 'http://twitter.com/intent/tweet?text='+window.TWITTER_STORY_SHARE_MSG+" ";
				window.open(TWITTER_STORY_SHARE_MSG_compiled+'&url='+output,'_blank');
				//return output;
			}
		});

}



function getBitlyShare(bitlink) {
		$.ajax({ 
		
			url: 'shortenURL.php',
			data: 
			{
					link: bitlink
			},
			type: 'post',
			datatype: "text",
			success: function(output) {
			
				//alert("bitly: "+output);
				TWITTER_SHARE_MSG_compiled = null;
				TWITTER_SHARE_MSG_compiled = 'http://twitter.com/intent/tweet?text='+window.TWITTER_SHARE_MSG+" ";
				window.open(TWITTER_SHARE_MSG_compiled+'&url='+output,'_blank');
				//return output;
			}
		});

}
  
