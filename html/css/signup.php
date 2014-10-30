<?php

    header("Content-type: text/css; charset: UTF-8");
    include('../lang/settings.php');
    
    if($COUNTRY!='US'){
    	$FONT_FAM = "'Adobe Garamond Pro 1167025'";
    }else{
	    $FONT_FAM = "'Trajan Pro 1167363'";
    }
   
   
?>




#signupFormIntro {
	margin: 20px 0;
}

#signupForm {
	width:740px;
	margin: 21px auto 0;
	

}


#thanksforentering {
    height: 300px;
    margin: 64px auto 0;
    width: 740px;
}

#signupForm.sumbit {
	padding-top: 0;
}

#signupFormIntro h2 {
	font-size: 20px;
	margin: 18px 0 12px;
}

#signupFormIntro p {
	font-size: 12px;
	line-height: 1.6em;
}

#signupForm .formRow {
    display: block;
    margin: 0 auto;
    overflow: hidden;
    width: 380px;

}


.formRowShort
{

width:380px;
margin: 0 auto 80px;
}


#signupForm .textInput {




    background: url("../images/formfieldBG.jpg") repeat-x scroll 0 0 #fff;

	width: 368px;
	clear: both;
	/* float: left; */
	height: 16px;
	padding: 5px;
	font-size: 14px;
	color: #000;
	margin-top: 3px;
	border:1px solid #858585;

}

#signupForm .textInputName, .ytuploader .textInputName 
{
	background: url("../images/formfieldBG.jpg") repeat-x scroll 0 0 #fff;
	width: 368px;
	clear: both;
	/* float: left; */
	height: 16px;
	padding: 5px;
	font-size: 14px;
	color: #000;
	margin-top: 3px;
	border:1px solid #858585;
}


 .ytuploader .IEfile{
	 
	 margin:40px auto !important;
	 
 }

#ytform
{
text-align: center;
width:400px;
margin:0 auto !important;
}

.chrome #signupForm .textInputName
{
	padding: 5px !important;

}

.textInputTitle
{
	background: url("../images/formfieldBG.jpg") repeat-x scroll 0 0 #fff;
	width: 590px;
	clear: both;
	/* float: left; */
	height: 16px;
	padding: 5px;
	font-size: 14px;
	color: #000;
	margin-top: 3px;
	border:1px solid #858585;
}

#signupForm.story .textInputName, #signupForm.story .textInput 
{
	width: 592px;
}

#submitStory #story
{
	background: url("../images/storyInputBG.png") repeat-x scroll 0 0 #fff;
	width: 592px;
}


#signupForm .halfSize {
	width: 370px;
	float: left;
	display: block;
	overflow: hidden;
}



.right {
	margin-left: 10px;
}




#signupForm .formLabel, .formLabelAgree 
{
    color: #5C5C5C;
    float: none;
    font-family:"HelveticaNeueW02-67MdCn 694060", sans-serif;
    font-size: 1em;
    margin-bottom: -2px;
    margin-left: 3px;
    margin-top: 14px;
    text-align: left;
    width: auto;
	display: block;
}

.formLabelAgree 
{
font-size: 11px;
margin-top: 0;

}


#termslabel.formLabelAgree.sumbitmedia
{
font-size: 11px !important;

}

.whichcontent
{
	font-family:"HelveticaNeueW02-67MdCn 694060", sans-serif;
	text-align: center;
	font-size: 2em;
	margin-bottom: 5px;
	margin-top: -13px;
}


.formRow.terms
{
margin-top: 20px !important;
}

.formRow.short
{
width:174px !important;
float: left;
}

.formRow.short #city, .formRow.short .formLabel
{
width:162px;

}

.formRow.short.city
{
margin-right:30px !important;

}



#signupForm input[type="checkbox"] {
	float: left;
	margin-top: 0;
}


#signupForm #thumbPreview {
	padding-left: 0;
	margin-top: 3px;
	display: block;
	width: auto;
	height: auto;
}


#backtohome, #tryagain, #tryagainTY
{	

    background-color: #2D2D2D;
    border: 0 none;
    color: #757575;
    cursor: pointer;
    float: center;
    font-family: "HelveticaNeueW01-67MdCn 692713", sans-serif;;
    font-size: 1.2em;
    height: 38px;
    /* left: 0; */
    line-height: 39px;
    margin: 29px auto 37px;
    padding: 0 10px;
    /* position: relative; */
    text-align: center;
    text-decoration: none;
    display: inline-block !important;
    

}

#backtohome:hover, #tryagain:hover
{
	background:url("../images/cancelbtn.png") no-repeat scroll 0 0 transparent;
	text-decoration:none;

}


#cancelBtn
{
 text-decoration: none !important;
    background-color: #2D2D2D;
    border: 0 none;
    color: #757575;
    cursor: pointer;
   /*  float: left; */
	font-family: "HelveticaNeueW01-67MdCn 692713", sans-serif;;
    font-size: 1.2em;
    height: 38px;
    line-height: 39px;
    margin: 29px auto 37px;
    padding: 0 10px;
    text-align: center;
   
    /* width: 78px; */
}

#browsefilevideo
{
	/* background: url("../images/cancelbtn.png") no-repeat scroll 0 -38px transparent; */
	font-family: "HelveticaNeueW01-67MdCn 692713", sans-serif;;

	background-color: #2d2d2d;
    color: #757575;
    font-size: 1.2em;
    height: 38px;
    line-height: 40px;
    /* margin: 29px auto 37px;  */   
    text-align: center;
    text-decoration: none;
/*     width: 210px; */
    border: 0;
    position: relative;
    padding: 0 10px 0 10px;
    
    cursor: pointer;
    margin-top: 30px;
    width:156px;
    display:inline-block !important;
}



.ie .button_sq
{
	line-height: 40px;
	font-size:16px;
}



.button_yt {

       background-color: #2D2D2D;
    border: 0 none;
    color: #757575;
    cursor: pointer;
    float: center;
    font-family: "HelveticaNeueW01-67MdCn 692713", sans-serif;;
    font-size: 1.2em;
    height: 38px;
    /* left: 0; */
    line-height: 39px;
    margin: 0px auto 37px;
    padding: 0 10px;
    /* position: relative; */
    text-align: center;
    text-decoration: none;
    display: inline-block !important;
}




#buttoncontainer
{

	width: 600px;
	margin: 0 auto;
	text-align: center !important;
	
	height: 50px;

}


#continue.button_sq
{

margin-left:15px;
}


#thankyoudesc
{
    margin: 28px auto 0;
    text-align: center !important;
    width: 470px;

}


#termslabel_L
{
   color: #000;
    display: block;
    float: none;
    font-family:"HelveticaNeueW02-67MdCn 694060", sans-serif;
    font-size: .9em;
    margin-bottom: 6px;
    margin-left: 3px;
    margin-top: 14px;
    text-align: left;
    width: auto;

}

#cancelBtn:hover
{
	/* background:url("../images/cancelbtn.png") no-repeat scroll 0 0 transparent; */
	text-decoration:none;
	background-color: #2d2d2d;
}

#submitBtn
{
    background-color: #2D2D2D;
    border: 0 none;
    color: #757575;
    cursor: pointer;
   /*  float: left; */
    font-family: "HelveticaNeueW01-67MdCn 692713", sans-serif;;
    font-size: 1.2em;
    height: 38px;
    /* left: 150px; */
    line-height: 37px;
    margin: 29px auto 37px 15px;
    padding: 1px 10px;
    /* position: relative; */
    text-align: center;
    text-decoration: none;
    display: inline-block;

}


.safari #submitBtn
{

	padding: 1px 10px;
}


.submitBtn
{
	background-color:#2D2D2D;
	border:0;
	color:#757575 !important;
	cursor:pointer;
	/* float:left; */
	font-family:"HelveticaNeueW02-67MdCn 694060", sans-serif;
	font-size:1.2em;
	height:38px;
	left:150px;
	line-height:27px;
	margin:29px auto 37px;
	padding:9px 10px;
	/* position:relative; */
	text-align:center;
	text-decoration:none;

}




.chrome #submitBtn
{
padding: 1px 10px !important;

}
.ie #submitBtn
{
padding: 1px 10px !important;

}
.ie #cancelBtn
{
line-height: 40px !important;

}

/*
.lr_social_login_basic_200.lr_logininterface_container
{
width:500px;
}

#interfacecontainerdiv > iframe
{
	width:500px;
}
*/



#submitBtn:hover
{
	/* background:url("../images/gettingStarted_button.png") no-repeat scroll 0 0 transparent; */
	text-decoration:none;
	background-color: #2d2d2d;
}

textarea#story.textInputName
{
	font-family:"HelveticaNeueW02-67MdCn 694060", sans-serif;
	height:300px;

}

.interfacecontainerdiv
{
	clear: both;
    margin: 20px auto 50px;
    width: 200px;
}

#thankyou, #sorry
{
font-size: 1.25em;
margin: 0 0 7px 0px;
}



#signupForm .dropdown 
{
    color: #999999;
    float: left;
    font-size: 13px;
    height: 32px;
    margin-left: 2px;
    margin-top: 3px;
    padding: 5px;
    width: 174px;
    
}

#agegate
{
display:none;
position: fixed;
left:0;
top:0;
width: 100%;
height: 100%;
background: rgba(0,0,0,0.6);

}

#agebox
{
background: url("../images/item-greyBG.jpg");
margin:100px auto;
width: 500px;
height: 300px;
text-align: center;
}

#agebox p
{
	font-family:"HelveticaNeueW02-67MdCn 694060", sans-serif;
	color:#000;
	text-align: center;
	

}
#agebox .title
{
font-size: 70px;
padding-top: 35px;
margin-bottom: -19px;
}
#agebox .desc
{
font-size:20px;
padding: 0 20px;
}

#agebox .gobackhome.button_sq
{
clear:both;
margin:0 auto;
color:#fff;
float:none;
width: 326px;
}

.dropdown_daymonth
{
width: 124px !important;
float:left !important;
}

.dropdown_year
{
width: 124px !important;
float:left !important;

}

#signupForm a
{
	text-decoration: underline;
	color: #787878;
}

#submiterror
{
   color: #C80000;
    display: none;
    font-family:"HelveticaNeueW02-67MdCn 694060", sans-serif;
    font-size: 0.8em;
/*     left: 65px; */
    letter-spacing: 1px;
    position: relative;
    top: 15px;
    z-index: 100;
    text-align: center;
    margin:0 auto;


}

#submitOff
{
background-color: #2d2d2d;
font-family: "HelveticaNeueW01-67MdCn 692713", sans-serif;;
color: #757575;
/* float: left; */
font-size: 1.2em;
height: 38px;
line-height: 21px;
margin: 29px auto 37px;
text-align: center;
text-decoration: none;
border: 0;
position: relative;
left: 15px;
padding: 9px 10px;
cursor: pointer;
width: 78px;
}

.safari #submitOff
{

padding: 8px 10px;
}

#numberdots
{

	width: 940px;

}

#numberdots .box
{
	float: left;
    width: 222px;
   

}


#bones
{
    margin: 40px auto 0;
    width: 593px;

}

#breadcrumb
{
	background:url("../images/breadcrumb.png") no-repeat scroll 0 0 transparent;
	height:34px;
	line-height:34px;
	width:914px;
	font-family: "HelveticaNeueW01-67MdCn 692713", sans-serif;;
	letter-spacing: 2px;
	font-size: 1.4em;
}

.breadlabel
{
	float:left;
	width:229px;
	text-align: center;
}

#breadcrumb.first .one
{
	color:#757575;
}

#breadcrumb.first .two, #breadcrumb.first .three
{
	color:#353535;
}


#breadcrumb.second
{

	background:url("../images/breadcrumb.png") no-repeat scroll 0 -34px transparent;

}

#breadcrumb.second .one, #breadcrumb.second .two
{
	color:#757575;
}

#breadcrumb.second .three
{
	color:#353535;
}

#breadcrumb.third .one, #breadcrumb.third .two, #breadcrumb.third .three
{
	color:#757575;
}



#breadcrumb.third
{
		background:url("../images/breadcrumb.png") no-repeat scroll 0 -68px transparent;

}

#submityourstory
{

    font-family:<?php echo $FONT_FAM; ?>, times, serif;
    font-size: 23.91pt;
    margin: 16px auto 0;
    text-align: center;
    width: 354px;
    color:#353535;
}

#thankyoumessage
{
	width:500px;
	margin: 0 auto;
	text-align: center;
}

.thankyou #blackline {
    margin: 20px 0 20px 41px;
}

.thankyou #submityourstory
{
margin-bottom: 20px;

}

#storytitle
{

	color:#3d2e27;
	margin:0 auto;
	font-family:"HelveticaNeueW02-67MdCn 694060", sans-serif;
	font-size: 1.6em;
	text-align: center;
	

}

#storyauthor, #authorName
{
	font-size: 1.3em;
	text-align: center;

}
#authorHolder
{

text-align: center;
margin: 0 auto;

}


.thankyou #backtohome, .thankyou #backtohome:hover
{
    background-color: #2D2D2D;
    border: 0 none;
    color: #757575;
    cursor: pointer;
    float: center;
    font-family: "HelveticaNeueW01-67MdCn 692713", sans-serif;;
    font-size: 1.2em;
    height: 38px;
    /* left: 0; */
    line-height: 39px;
    margin: 29px auto 37px;
    padding: 0 10px;
    /* position: relative; */
    text-align: center;
    text-decoration: none;
    display: inline-block !important;
}

/*
.chrome .thankyou #backtohome, .chrome .thankyou #backtohome:hover 
{
	padding: 3px 10px 0 10px;
}
*/

.signuptitles
{
	font-family:"HelveticaNeueW02-67MdCn 694060", sans-serif;
	font-size: 23.91pt;

	text-align: center;

}

.signuptitles.short_line
{
    margin: -16px 0 0;
}

.short_line
{

float:left;
width:184px;

}

#bones
{
clear:both;

}
.orsignup
{
margin: 0 auto;
width: 557px;

}

.submitlabels
{
 	font-family: "HelveticaNeueW02-67MdCn 694060",sans-serif;
    font-size: 1.2em;
    left: -238px;
    position: absolute;
    text-align: right;
    top: 52px;
    width: 220px;

}

#submitStory .submitlabels span
{
	font-size: 20px;
}

#submitPhoto .submitlabels span
{
	font-size: 20px;
}


#submitVideo .submitlabels span
{
	font-size: 20px;
}


.submitlabels>img
{
    display: block;
    margin: 5px 0 0 136px;
    /* left: -86px; */
    /* position: relative; */
    /* top: 66px; */
}


form .counter{
    color: #5C5C5C;
    font-size: 14px;
    position: relative;
    right: -157px;
    top: -318px;
}

form .warning{color:#600;}	
form .exceeded{color:#e00;}	


.phonenum
{   
    background: url("../images/formfieldBG.jpg") repeat-x scroll 0 0 #FFFFFF;
    border: 1px solid #858585;
    color: #000000;
    font-size: 14px;
    height: 16px;
    margin-top: 3px;
    margin-right: 10px;
    padding: 5px;
    float:left;
    width:368px;
}


div.upload {
	float:left;
	 margin-top: 21px;
    width: 157px;
    height: 38px;
    background: url('../images/buttonBGgrey.jpg') #2c2c2c;
    overflow: hidden;
    cursor:pointer;
}

div.upload input {
    display: block !important;
    width: 157px !important;
    height: 57px !important;
    opacity: 0 !important;
    overflow: hidden !important;
    cursor:pointer;
}


#uploadlabel
{
    color: #757575;
    cursor: pointer;
    font-family:"HelveticaNeueW01-67MdCn 692713", sans-serif;;
    font-size: 1.2em;
    height: 0;
    left: 0;
    position: relative;
    text-align: center;
    top: -52px;
    width: 157px;
    /* background-color: #2c2c2c !important; */
    background:  url('../images/buttonBGgrey.jpg') #2c2c2c !important;
    display:inherit;
    
    line-height: 0;
}

span#filenamedesclabel
{

clear:both;
padding-top:20px !important;
}

#filename
{
/*
position:relative;
top: -20px;
left:200px;
*/
margin-top:20px !important;
margin-left:20px !important;

font-family:"HelveticaNeueW02-67MdCn 694060", sans-serif;

float:left;

}

#signupForm .formRow.buttonbox
{
margin: 0 auto !important;
/* width:182px !important; */
text-align: center !important;
}


#submitVideo .bVErrMsgContainer .bvalidator_errmsg
{
top:-64px !important;
left:133px !important;

}

.upload .bVErrMsgContainer>.bvalidator_errmsg
{
top: -98px !important;
left:126px !important;

}

.ytlogo
{
	position: relative;
    left: 5px;
    top: 15px;
}

.ytuploader .whichcontent {


    margin-top: -10px;
}
.item.ytuploader
{
	text-align: center;

}
div.upload.yt
{
/*
margin-left: 350px !important;
margin-top: -50px;
*/
	float:none;
    clear: both !important;
    margin: 0 auto !important;
    
    
}


.ytuploader #submitBtn.button_yt
{

}

.ytuploader #uploadlabel
{
top: -49px;

}

.ytuploader #submitBtn
{
	font-size: 1.1em !important;
	font-family:"HelveticaNeueW01-67MdCn 692713", sans-serif;;
	float:none;
    clear: both !important;
    margin: 0 auto !important;

}

.ytuploader #submitBtn
{
margin: 0 auto 0 !important;

}
p.button_yt.submitBtn
{
margin-top: -59px !important;
display:none;
}

.ytuploader #filename
{
    clear: both;
    margin-left: 0 !important;
    margin-top: 6px !important;
    text-align: center;
    width: 100%;
    
}

div.upload.yt #uploadlabel
{
line-height: 21px;
}


#interface_containert
{
    margin: -11px auto 40px;
    padding-left: 21px !important;
    width: 455px;
}

#IEfile
{
display: none;

}

.ie #IEfile
{
display: block;

}



.ie .upload, .ie #filename
{
display: none;

}


.ie #file
{
display: none;

}

#mobilblock
{

display:none;
position: fixed;
left:0;
top:0;
width: 100%;
height: 100%;
background: rgba(0,0,0,0.6);

}


#disclaimer
{
	color: #666666;
    font-family: "HelveticaNeueW02-67MdCn 694060", sans-serif;
    font-size: 12px;
    margin-top: 26px;
    text-align: center;
}


textarea
{
resize:none;
}

#cancelBtn>a
{
 text-decoration: none !important;
 }


 body.youtube
 {
background-image: none;
background: #000;

 }
.button_sq
{
    background-color: #2D2D2D;
    border: 0 none;
    color: #757575;
    cursor: pointer;
    float: center;
    font-family: "HelveticaNeueW01-67MdCn 692713", sans-serif;;
    font-size: 1.2em;
    height: 38px;
    /* left: 0; */
    line-height: 39px;
    margin: 29px auto 37px;
    padding: 0 10px;
    /* position: relative; */
    text-align: center;
    text-decoration: none;
    display: inline-block !important;
}

.ie #IEfile
{
	height: 29px !important;

}

.signup .footer .middle
{
padding: 0 0.625em 0 412px !important;
}