var currentSection;
window.FB_SHARE_APP_ID;
window.FACEBOOK_STORY_SHARE_MSG;
window.TWITTER_STORY_SHARE_MSG;
window.COUNTRY;  
window.TWITTER_SHARE_MSG;      	
        	
$(document).ready(function(){
	lang='lang';
	country='us';

    getLang(lang,country);	
});



function getLang(lang,country) {
    $('html').attr('lang',lang);
    $('body').attr('id',lang);

/*
    if ( (lang === "en") && (country === undefined)) {
        $('body').addClass('us');
    }
*/

    $.ajax({
        type: "GET",
        url: "lang/lang.xml",   // PATH TO XML, relative home.html page
        dataType: "xml",
        async: false,
        success: function(xml) {
        
			
        	window.FACEBOOK_STORY_SHARE_MSG = $(xml).find("FACEBOOK_STORY_SHARE_MSG").text();
        	window.TWITTER_STORY_SHARE_MSG = encodeURIComponent($(xml).find("TWITTER_STORY_SHARE_MSG").text());

        	var isSweepstakesAvailable = $(xml).find("isSweepstakesAvailable").text().toLowerCase();
        	if(isSweepstakesAvailable=="false"){
	        	
	        	//alert(isSweepstakesAvailable);
	        	$('.righttitle').remove();
	        	$('.rightsubtitle').remove();
	        	$('.right .shortline').remove();
	        	$('#prizepackage').remove();
	        	$('#termslabel_L').remove();
	        	$('#signupForm .formRow.terms').remove();
	        	$('#disclaimer.legaldisclaimer').remove();
	        	//$('#gamedesc').css('background', 'url("images/noPrizingBG.jpg") no-repeat scroll -148px 0 transparent');
	        	
        	}
        	
        	
        	var isMMDDYYYY = $(xml).find("isMMDDYYYY").text().toLowerCase();
        	if(isMMDDYYYY=="true"){
		        $.get('us_birthdate.html')
				 .success(function(data) {
				     $('#birthDateSection').append(data);
				     $('select#birth_day option').eq(0).text($(xml).find("dd").text());
					 $('select#birth_month option').eq(0).text($(xml).find("mm").text());
					 $('select#birth_year option').eq(0).text($(xml).find("yyyy").text());
					 $('#birth_month').attr('data-bvalidator-msg',$(xml).find("monthValMsg").text());
					 $('#birth_day').attr('data-bvalidator-msg',$(xml).find("dayValMsg").text());
					 $('#birth_year').attr('data-bvalidator-msg',$(xml).find("yearValMsg").text());
					 
				});
			}else{
				$.get('eu_birthdate.html')
				 .success(function(data) {
					$('#birthDateSection').append(data);
					$('select#birth_day option').eq(0).text($(xml).find("dd").text());
					$('select#birth_month option').eq(0).text($(xml).find("mm").text());
					$('select#birth_year option').eq(0).text($(xml).find("yyyy").text());
					$('#birth_month').attr('data-bvalidator-msg',$(xml).find("monthValMsg").text());
					$('#birth_day').attr('data-bvalidator-msg',$(xml).find("dayValMsg").text());
					$('#birth_year').attr('data-bvalidator-msg',$(xml).find("yearValMsg").text());				
				});
				
				
			}
			
			
		/*
	var isUS = $(xml).find("isUS").text().toLowerCase();
        	if(isUS=="true"){
		        $.get('us_states_dropdown.html')
				 .success(function(data) {
				     $('#countryORstate').append(data);
				});
			}else{
				$.get('countries_dropdown.html')
				 .success(function(data) {
				     $('#countryORstate').append(data);
				});
				
				
			}
*/
        	
        	
        	/* index.php */
        	$('#yourstory').html($(xml).find("yourhauntedstory").text());
        	$('.haveyouhadparanormal').html($(xml).find("yourhauntedstoryDescription").text());
        	$('.youcansubmit').html($(xml).find("youcansubmit").text());
			$('#submitstory').html($(xml).find("submitstory").text());
			$('.righttitle').html($(xml).find("entertowin").text());
			$('.rightsubtitle').html($(xml).find("rightsubtitle").text());
			$('#prizepackage').html($(xml).find("prizepackage").text());
			$('#yourstory_a').html($(xml).find("storysubmissions").text());
			$('#filter_label').html($(xml).find("filter").text());
			$('#filterby_label').html($(xml).find("filterby").text());
			$('.likebutton').html($(xml).find("likebutton").text());
			$('.sharelabel').html($(xml).find("sharelabel").text());
			$('p.readmore').html($(xml).find("readmore").text());
			
			$('#options.filters option').text($(xml).find("optionLatest").text());
			$('#options.filters option:gt(0)').text($(xml).find("optionOldest").text());
			$('#options.filters option:gt(1)').text($(xml).find("optionPopularity").text());
			$('#options.filters option:gt(2)').text($(xml).find("optionPhotos").text());
			$('#options.filters option:gt(3)').text($(xml).find("optionVideos").text());
			$('#options.filters option:gt(4)').text($(xml).find("optionStory").text());
			$('#options.filters option:gt(5)').text($(xml).find("optionAll").text());
			$('#back em').text($(xml).find("back").text());
			
			
			/* signup.php, submit.php, thankyou.php HEADERS */
			$('#submitaquestion').html($(xml).find("yourhauntedstory").text());
			$('#submitdescription').html($(xml).find("submitdescription").text());
			
			$('.box.first .title').html($(xml).find("firstboxtitle").text());
			$('.box.first .desc').html($(xml).find("firstboxdesc").text());
			
			$('.box.second .title').html($(xml).find("secondboxtitle").text());
			$('.box.second .desc').html($(xml).find("secondboxdesc").text());
			
			$('.box.third .title').html($(xml).find("thirdboxtitle").text());
			$('.box.third .desc').html($(xml).find("thirdboxdesc").text());
			
			
			/* signup.php */
			$('.breadlabel.one').css('font-size',$(xml).find("breadcrumb1").attr('fontSize')+'px').html($(xml).find("breadcrumb1").text());
			$('.breadlabel.two').css('font-size',$(xml).find("breadcrumb1").attr('fontSize')+'px').html($(xml).find("breadcrumb2").text());
			$('.breadlabel.three').css('font-size',$(xml).find("breadcrumb1").attr('fontSize')+'px').html($(xml).find("breadcrumb3").text());			

			$('p.signuptitles').html($(xml).find("signupwith").text());
			$('p.signuptitles.short_line').html($(xml).find("orsignup").text());
			
			$('#statelabel.country').html($(xml).find("country").text());
			$('#usernamelabel').html($(xml).find("username").text());
			$('#emaillabel').html($(xml).find("emaillabel").text());
			$('#confirmemail').html($(xml).find("confirmemail").text());
			$('#birthdatelabel').html($(xml).find("birthdatelabel").text());
			$('#phonenumlabel').html($(xml).find("phonelabel").text());
			
			$('#citylabel').html($(xml).find("citylabel").text());
			$('#statelabel').html($(xml).find("statelabel").text());

			
			
	        $('#termslabel_L').html($(xml).find("checktoenterlabel").text());
	        $('#termslabel').html($(xml).find("termslabel").text());
	        
	        //$('.legaldisclaimer').html($(xml).find("legaldisclaimer").text());
	        $('#cancelBtn').text($(xml).find("cancel").text());
	        $('#cancelBtn>a').text($(xml).find("cancel").text());
	        $('#submitBtn').attr('value',$(xml).find("next").text());
	        
	        
	        
	        /* validator MESSAGES */
	        $('#username').attr('data-bvalidator-msg',$(xml).find("usernameValMsg").text());
			$('#email').attr('data-bvalidator-msg',$(xml).find("emailValMsg").text());
			$('#email.confirmemail').attr('data-bvalidator-msg',$(xml).find("emailconfirmValMsg").text());
			
			
			$('#phonenum').attr('data-bvalidator-msg',$(xml).find("phonenumValMsg").text());
			
			
			$('#city').attr('data-bvalidator-msg',$(xml).find("cityValMsg").text());
			$('#state').attr('data-bvalidator-msg',$(xml).find("stateValMsg").text());
			
			$('#tnc').attr('data-bvalidator-msg',$(xml).find("signuptermsValMsg").text());
			
	        
	        /* submit.php */
	        
	        if(isSweepstakesAvailable=="false"){
	        		$('.whichcontent.thanksforentering').html($(xml).find("thanksforentering_NOCONTEST").text());
	        	}else{
		        	$('.whichcontent.thanksforentering').html($(xml).find("thanksforentering").text());
		        	
	        	}
	        
	        
			$('p#thankyoudesc').html($(xml).find("thankyoudesc").text());
	        $('.whichcontent.chooseyourcontent').html($(xml).find("chooseyourcontent").text());
	        
	        $('#choose_story p').html($(xml).find("story").text());
	        $('#choose_photo p').html($(xml).find("photo").text());
	        $('#choose_video p').html($(xml).find("video").text());
	        
	        
	        $('#submitStory .submitlabels span').css('font-size',$(xml).find("writtenstory").attr('fontSize')+'px').html($(xml).find("writtenstory").text());
	        $('#writeyourstory').html($(xml).find("typeyourstory").text());
	        
	        
	        $('#submitPhoto .submitlabels span').css('font-size',$(xml).find("imageupload").attr('fontSize')+'px').html($(xml).find("imageupload").text());
	        $('#submitPhoto p').html($(xml).find("selectimage").text());
	        $('#filenamedesclabel').html($(xml).find("imagedesc").text());

	         
	        $('#submitVideo .submitlabels span').css('font-size',$(xml).find("videoupload").attr('fontSize')+'px').html($(xml).find("videoupload").text());
	        $('#submitVideo p').html($(xml).find("selectvideo").text());
	        $('#videonamedesclabel').html($(xml).find("videodesc").text());
			
			//$('.submitlabels').css('font-size',$(xml).find("videoupload").attr('fontSize')+'px');

			$('#browsefilevideo').html($(xml).find("browsefile").text());
			$('#uploadlabel').html($(xml).find("browsefile").text());
			$('#videolabel').html($(xml).find("youryoutubevideoidis").text());
	        $('p.button_yt a').html($(xml).find("logintoyoutube").text());
	        
	        $('span#termslabel.sumbitmedia').html($(xml).find("termslabelsubmit").text());
	        //$('#disclaimer.submitdisclaimer').html($(xml).find("submitdisclamer").text());
	        
	        $('#submitBtn.submit').attr('value',$(xml).find("submit").text());

	        $('.uploadvideo').attr('value',$(xml).find("submit").text());

	        $('#youtubedesc').html($(xml).find("youtubedesc").text());

	        $('#submiterror').html($(xml).find("submitwarning").text());
	        $('#videouploaded').html($(xml).find("videouploaded").text());
	        
	        /* validator MESSAGES */
	        $('#story').attr('data-bvalidator-msg',$(xml).find("storyValMsg").text());
	        $('#file').attr('data-bvalidator-msg',$(xml).find("photoValMsg").text());
	        $('#video').attr('data-bvalidator-msg',$(xml).find("videoValMsg").text());
	        $('#story').attr('data-bvalidator-msg',$(xml).find("storyValMsg").text());
	        
	        
			/* AGE GATE */
			$('#agegate #agebox .title').html($(xml).find("agegate_title").text());
			$('#agegate #agebox .desc').html($(xml).find("agegate_desc").text());
	        $('#agegate #agebox .gobackhome').html($(xml).find("agegate_return").text());
	        
	        $('p#submityourstory').html($(xml).find("submityourstory").text());
	        
			/* mobile */
			$('#mobilblock #agebox .title').html($(xml).find("mobile_title").text());
			$('#mobilblock #agebox .desc').html($(xml).find("mobile_desc").text());
	        $('#mobilblock #agebox .gobackhome').html($(xml).find("mobile_return").text());
	        
	        
	        /* thankyou.php */
	        
	        /* SUCCESS */
	        $('#submityourstory.success').html($(xml).find("thankyou").text());
	        $('#thankyoumessage.success').html($(xml).find("thankyoumsg").text());
	        $('#backtohome').html($(xml).find("backtohome").text());
	        $('#backhome').html($(xml).find("backtohome").text());
	        $('#continue').html($(xml).find("continue").text());
	        
	        
	        $('#storyauthor').html($(xml).find("by").text());
	        /* FAIL */
	        $('#submityourstory.fail').html($(xml).find("sorry").text());
	        $('#thankyoumessage.fail').html($(xml).find("sorrydesc").text());
	        $('#tryagainTY').html($(xml).find("tryagain").text());
	        
	        
	        /* footer.html */
	        $('.social.left .sharing').text($(xml).find("share").text());
	        $('.date.middle').html($(xml).find("copyright").text());
	        $('.legal').html($(xml).find("legal").text());
	        $('.credits').html($(xml).find("credits").text());
	        $('.rating').html($(xml).find("rating").text());
	        $('.billing-block .close').html($(xml).find("close").text());
	        
	        // top social link
		
			$('.social.left.top .facebook a').attr('href',$(xml).find("facebookpage").text());
			$('.social.left.top .twitter a').attr('href',$(xml).find("twitterpage").text());
			$('#socialbox .facebook a').attr('href',$(xml).find("facebookpage").text());
			$('#socialbox .twitter a').attr('href',$(xml).find("twitterpage").text());
			$('#hashtag').html($(xml).find("hashtag").text());


	        /* social sharing in footer.html */
	        
            var showFBLike = $(xml).find('facebook_like').attr('visible');
            if (showFBLike != "true") { $('.footer').find('.facebook-like').hide(); }

            var showFBShare = $(xml).find('facebook_share').attr('visible');
            if (showFBShare == "true") {
	            $('.share-sites .facebook-share').html($(xml).find("facebook_share").text());
            }

            var showTwitterShare = $(xml).find('twitter-tweet').attr('visible');
            if (showTwitterShare == "false") {
	           // $('.share-sites .twitter-tweet').html($(xml).find("twitter-tweet").text());
	          $('.share-sites .twitter-tweet').css('display','none');
	          
            }else{
	            
	            window.TWITTER_SHARE_MSG = encodeURIComponent($(xml).find("twitter-tweet").text());
	          
            }

            var showGoogle = $(xml).find('gplus').attr('visible');
            if (showGoogle == "true") {
	            $('.share-sites .google').html($(xml).find("gplus").text());
            }

            var showGetGlue = $(xml).find('getglue').attr('visible');
            if (showGetGlue == "true") {
	            $('.share-sites .getglue').html($(xml).find("getglue").text());
            }

	        $('#submitstory_s').html($(xml).find("SUBMITYOURSTORYBUTTON").text());
	        
	        /* IMAGES */
	        $('#conjuringlogo').attr('src',$(xml).find("conjuringlogo").text());
	        $('#waystosubmit').attr('src',$(xml).find("waystosubmit").text());
	        $('#openingdate').attr('src',$(xml).find("openingdate").text());

	        $('.box.first').css('background','url('+$(xml).find("FIRST_STEP").text()+') no-repeat scroll 0 0 transparent');
	        $('.box.second').css('background','url('+$(xml).find("SECOND_STEP").text()+') no-repeat scroll 0 0 transparent');
	        $('.box.third').css('background','url('+$(xml).find("THIRD_STEP").text()+') no-repeat scroll 0 0 transparent');
	        
	        
	        
	        $('#logintoyour').html($(xml).find("logintoyour").text());
			$('#ytaccount').html($(xml).find("ytaccount").text());
			
			
			
			// share widgets

            var showShareWidgets = $(xml).find('shareWidgets').attr('visible');
            if (showShareWidgets === "true") {
                $('.share-text').text($(xml).find('shareWidgets').find('shareText').text());
                var shareWidgets = '';
                $(xml).find('shareWidgets').find('shareWidget[visible="true"]').each(function() {
                    shareWidgets += '<div>' + $(this).text() + '</div>';
                });
                $('.share-widgets').append(shareWidgets);

                // functionality

                    $('.share-text').click(function(){
                        $share = $('.share-widgets');
                        var newPos = $share.css('left') == '0px' ? '-100%' : '0px';
                        $('.share-widgets').animate({left: newPos});
                        $(this).toggleClass('open');
                    });
            }
                    
                    
             

                    
        }
    });
}


