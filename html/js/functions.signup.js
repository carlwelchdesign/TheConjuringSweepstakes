function openPopup(url) {
	window.open(url, "popup_id", "scrollbars,resizable,width=500,height=600"); 
}


	var age;


	$('#bones').bValidator();



	function agevalidator(number, devideBy){
	    alert(devideBy+" / "+number);
	    if(devideBy > number)
	        return true;
	    return false;
	}



	$('#cancelBtn').click(function() {
	    window.location = "index.php";
	});	
	$('.gobackhome').click(function() {
	    window.location = "index.php";
	});	



	var birth_month=0;
	var birth_day=0;
	var birth_year=0;

	function setMonthAge(){
		
		birth_month = $('#birth_month').val();
		if(birth_day!=0 && birth_year!=0) validateAge();
	} 




	function setDayAge(){
		
		birth_day = $('#birth_day').val();

		if(birth_month!=0 && birth_year!=0) validateAge();
	} 





	function setYearAge(){
		birth_year = $('#birth_year').val();
		if(birth_day!=0 && birth_month!=0) validateAge();
		
	} 




	function isLeapYear(year) {
	    var d = new Date(year, 1, 28);
		d.setDate(d.getDate() + 1);
		return d.getMonth() == 1;
	}

	function validateAge() {
		var dateString = birth_year+"/"+birth_month+"/"+birth_day;

	    var d = new Date(dateString), now = new Date();
	    var years = now.getFullYear() - d.getFullYear();
	    d.setFullYear(d.getFullYear() + years);
	    if (d > now) {
	        years--;
	        d.setFullYear(d.getFullYear() - 1);
	    }
	    var days = (now.getTime() - d.getTime()) / (3600 * 24 * 1000);
	    age =  years + days / (isLeapYear(now.getFullYear()) ? 366 : 365);
	}


	function checkmyage(){

		
		//alert(age);
		if(age<18){
			
		
	    	$('#agegate').fadeIn();	 
	    	var CookieSet = $.cookie('conjuring_agegate', 2, { expires: 1 });   
	    }else{
		    
		    return true;
	    }
		
	}



	//var originalPhoneNumber = "415-555-1212";

	function validatePhoneNumber() {
	  p = $('#phonenumber').val();
	  var phoneRe = /^[2-9]\d{2}[2-9]\d{2}\d{4}$/;
	  var digits = p.replace(/\D/g, "");
	  
	  
	  return (digits.match(phoneRe) !== null);
	}

	function enterNumber(id){

		var e = document.getElementById(id);
		
		if (!/^[0-9,+,\-\,'(',')']+$/.test(e.value)) 
		{ 
			e.value = e.value.substring(0,e.value.length-1);
		}
	}   

	//console.log("birthday: "+ "<? echo $BirthDate ?>");

	// AGEGATE COOKIE
	var cookieName = 'conjuring_agegate';
	var cookieValue = 1;
	                
	// Check if cookie exists
	if ($.cookie(cookieName)) 
	{
	// If cookie DOES exist
		$('#agegate').fadeIn();

	}

$(document).ready(function () {
	// Disable Mobile
	if($('html').hasClass('ipad')||$('html').hasClass('iphone')){
		
		//$('#submitstory').remove();
		$('#mobilblock').fadeIn();
	}
	
    $('.middle').css('padding-left', '462px !important');

});	
