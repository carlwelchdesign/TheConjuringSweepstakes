$(document).ready(function () {
	//$('#video').hide();
	$('#uploadlabel').click(function() {
		$('#file').click();
	});	
		 
	//$('#uploadInput').focus().trigger('click');
	//$(':submit').prop("disabled", true); 
	$('#submitBtn').hide();
	
	
	$('#browsefilevideo').click(function() {
	$('#submitVideo .bVErrMsgContainer .bvalidator_errmsg').hide();
		myWindow=window.open('yt.php','popuppage','width=960,height=500,scrollbars=0,resizable=0,menubar=0,location=0,titlebar=0')
		//  myWindow.document.write("<p>This is 'myWindow'</p>")
		myWindow.focus()
	});

	$('#backtohome').click(function() {
	    window.location = "index.php";
	});
	
	
	$('#tryagain').click(function() {
	    window.location = "signup.php";
	});
	


	$('#choose_video').click(function() {
		 if ($('#submitVideo').is(':visible')) {
		 	
		 	$('#browsefilevideo').show();
		 	//$('#video').hide();
		 }

	});

	
	
	
	$('.choose').click(function(event) {
        //$('.submitTypes').hide();
        
        var element = $("#"+$(this).attr('rel'));
        if (element.is(':visible')) {
        	//$('.closetype', this).hide();
        	$('.button', this).css('background-position','0 0');
        	$('#doc_title').val("");
        	
        	var inputs = $(this).attr('rel')+" :input";
        	if(inputs!="submitStory :input"){
        		$("#"+inputs).val("");
        	}
        	
        	if(inputs=="submitPhoto :input"){
        		$("#"+inputs).val("");
        		$('#filename').empty();
        	}
        	
        	
        	element.hide();
        	
		}else{
			//$('.closetype', this).show();
        	$('.button', this).css('background-position','0 -85px');
        	element.show();
		}
		if ($('.submitTypes').is(':visible')) {
			$(':submit').prop("disabled", false); 
			
			
			
			$('#submitBtn').show();
			$('#submitOff').hide();
			$('#submiterror').fadeOut();
			
		}else{
			//$('#submiterror').show();
			//$(':submit').prop("disabled", true); 
			
			$('#submitBtn').hide();
			$('#submitOff').show();
			
		}
    });
    
    
    $('#submitOff').click(function(){
	    
	    
	     
			$('#submiterror').fadeIn();
			
	
	    
    });
    
    $('#backhome, #cancelBtn').click(function() {
    
    	window.location = "index.php";
    });
    
    $('#continue').click(function() {
     	$.cookie('continue', 1, { expires: 7 });
     	$('#thanksforentering').hide();
	 	$('#signupForm').fadeIn();
    	
    });
    

	function closeVideoErr(){

	
		$('#submitVideo .bVErrMsgContainer .bvalidator_errmsg').hide();
		 return false; 
	};
	
	$('input[type=file]').change(function(e){
		$in=$(this);
		
		//document.getElementById("file").files[0].fileName;
		
		inputNode = $in.val().replace("C:\\fakepath\\", "");
		$('#filename').html(inputNode);
		
	});
	
	
	
		
	function hideVidUpload(){
		$('#video').show();
		$('#browsefilevideo').hide();
	}
	

	
	if($('html').hasClass('ie')){
		
		$('.upload').remove();
		
	}else{
		
		$('#IEfile').remove();
	}
	
	
if(isSweepstakesAvailable = "TRUE"){	
	$('#signupForm').hide();
	$('#videolabel').hide();
	$('#thanksforentering').show();
}else{
	
	
	$('#thanksforentering').hide();
}
	
	
	$('#bones').bValidator();
	
	
	
/*
	if($.cookie('continue')) {
		$('#continue').click();
	}
*/
	
	
});

