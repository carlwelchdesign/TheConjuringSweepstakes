//checks for a thubmnail for vidoes in the process of uploading
populate($('.viewThumb'));


function checkThumb(url){
	$("#thumbPreview").attr('src', "images/loading.gif");
	
	var media=testUrlForMedia(url) ;
	if (media){
		if(media.type=="youtube"){	
			getYouTubeThumb('#thumbPreview', media.id, 2);
		}else if (media.type=="vimeo"){
			getVimeoThumb('#thumbPreview', media.id, 2);    		
		}
		//$("#videoCheckLabel").html("We Located this Video");
		 
	} else{
		//alert("No valid media id detected"); 
		$("#videoCheckLabel").html("Your Video Could not be located.  Please check the link");
	}

}


// parses through each thumbnail div, injects the title and thumb based on the URL (which is in our database)
//required:  class name of master element
function populate (el){
	console.log(el)
	$(el).each(function(i, obj) {
		console.log(i);
	    var aTag=$(obj).find('.linked');
		var _href=$(aTag).attr('href');
		//get media id
		var media=testUrlForMedia(_href)
		if(media){
			//populate elemnt with media data 
			getVideoData(obj, media);
		}
	});
}


//get title, thumb and embed link, populate a DOM element with these
function getVideoData(el, media){
	
	//var media = testUrlForMedia(url);

	if (media.type == "youtube"){
		var youTubeURL = 'http://gdata.youtube.com/feeds/api/videos/'+media.id+'?v=2&alt=json';
		var json = (function() {
    		var json = null;
    		$.ajax({
		        'async': false,
		        'global': false,
		        'url': youTubeURL,
		        'dataType': "json",
		        'success': function(data) {
			        json = data;
		        }
		    });
		    return json;
		
	    })();
		
		//console.log(json.entry);
		
		var time = json.entry.media$group.media$content[0].duration
		var minutes = Math.floor(time / 60);
		var seconds = time - minutes * 60;
		var duration = minutes+":"+seconds;
		
		var d=json.entry.updated.$t;
		var s = d.substring(0, d.length - 5);
		
		s = Date.parse(s);
		
		s = s.toString('MMMM d, yyyy');
		//$(el).find('.videoTitle').html(json.entry.title.$t);
		
		$(el).find('.videoDate').html(s);
		$(el).find('.videoUser').html(json.entry.author[0].name.$t);
		$(el).find('.videoImage').attr("src","http://img.youtube.com/vi/"+media.id+"/0.jpg");
		$(el).find('.videoDuration').html(duration);
		 
	} else if (media.type == "vimeo"){
		var json = null;
		$.getJSON('http://www.vimeo.com/api/v2/video/' + media.id + '.json?callback=?', {format: "json"}, function(data) {
			
			json=data[0];
			$(el).find('.videoTitle').html(json.title);
			//$(el).find('.videoImage').attr('src') = json.thumbnail_large;
			$(el).find('.videoImage').attr("src",json.thumbnail_large);
																			 
		});
		
		
	}

}


 //get just a thumbnail - YT
function getYouTubeThumb(el, id, size){
	//0 for large,  2 for small)
	$(el).attr('src',"http://img.youtube.com/vi/"+id+"/"+size+".jpg");
}


//get just a thumbnail - Vimeo
function getVimeoThumb(el, id, size){
	$.getJSON('http://www.vimeo.com/api/v2/video/' + id + '.json?callback=?', {format: "json"}, function(data) {
		if (size==2){
		   $(el).attr('src', data[0].thumbnail_small);
		}else if (size==0){
		   $(el).attr('src', data[0].thumbnail_large);
		}
	});
}

function parse_date(string) {  
    var date = new Date();  
    var parts = String(string).split(/[- :]/);  
  
    date.setFullYear(parts[0]);  
    date.setMonth(parts[1] - 1);  
    date.setDate(parts[2]);  
    date.setHours(parts[3]);  
    date.setMinutes(parts[4]);  
    date.setSeconds(parts[5]);  
    date.setMilliseconds(0);  
  
    return date;  
} 

//determine if a link is YouTube or Vimeo
function testUrlForMedia(pastedData) {

	var success = false;
	var media   = {};
	if(typeof pastedData != 'object'){
		if (pastedData.match('http://(www.)?youtube|youtu\.be')||pastedData.match('https://(www.)?youtube|youtu\.be')) {
		    if (pastedData.match('embed')) { 
		    	
		    	youtube_id = pastedData.split(/embed\//)[1].split('"')[0]; 
			    
		    } else { 
		    	
		    	youtube_id = pastedData.split(/v\/|v=|youtu\.be\//)[1].split(/[?&]/)[0];
		    	 
		    }
		    
		    media.type  = "youtube";
		    media.id    = youtube_id;
		    success = true;
		}
		else if (pastedData.match('http://(player.)?vimeo\.com')) {
		    vimeo_id = pastedData.split(/video\/|http:\/\/vimeo\.com\//)[1].split(/[?&]/)[0];
		    media.type  = "vimeo";
		    media.id    = vimeo_id;
		    success = true;
		}
	}
		if (success) { 
	       return media; 
		}else{
		   return false;
		}
	
}

