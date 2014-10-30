<?php

    header("Content-type: text/css; charset: UTF-8");
    include('../lang/settings.php');
    
    if($COUNTRY!='US'){
    	$FONT_FAM = "'Adobe Garamond Pro 1167025'";
    }else{
	    $FONT_FAM = "'Trajan Pro 1167363'";
    }
   
   
?>


* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box;
}

html {
}



a img
{
border:0;

}

body {
    margin: 0;
    padding: 0;
    /* background: #000; */
    color: #9c9d9c;
    font-family: arial;
    font-size: 16px;
    font-family:helvetica, arial, sans-serif;
    height: 100%;
	min-height: 100%;
	background: url("../images/noPrizingBG.jpg") no-repeat center top #000;

}

body.thinBG
{
background: #000;
}


body>p
{
display: none;
}

h1{
	font-size: 12px;
}



.righttitle
{

    font-family:<?php echo $FONT_FAM; ?>, times, serif;
	font-size: 20.91pt;
	text-align: center;
	margin-top: -11px;
}

.rightsubtitle
{

    font-family:<?php echo $FONT_FAM; ?>, times, serif;
	font-size: 12.3pt;
	margin-top: 1px;
	text-align: center;
}

a {
    color: #faefe0;
    text-decoration: none;
}

.story a {
  color:#000000;
  font-size:16px;
  text-decoration:none;
 }

.main {
    width: 100%;
    background: url(../images/bg.jpg) no-repeat center top;
    background-size: cover;
    overflow: hidden;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    /* min-height: 38em; */
}



/* Main Menu */
.topMenu {
	position:absolute;
	top:0;
	left: 0;
	width:100%;
	height:80px;
	
	
	background: rgba(0,0,0,.8);
	

	z-index: 101;
}

.topMenu img {
	z-index: 1;
	position: absolute;
	left:-25px;
}

.topMenu ul {
	height:40px;
	z-index: 100;
	margin-top:0;
}
.topMenu ul a {
	width: 100%;
	height: 100%;
	display: block;
}
.topMenu li {
	position: relative;
	float:left;
	height:40px;
	margin-left:15px;
	list-style-type: none;
	color: rgb(160,0,0);
	z-index: 10;
}
.topMenu li.home {background:url('../images/home.png');width:66px;}
.topMenu li.synopsis {background:url('../images/synopsis.png');width:105px;}
.topMenu li.gallery {background:url('../images/gallery.png');width:92px;}
.topMenu li.characters {background:url('../images/characters.png');width:135px;}
.topMenu li.release-dates {background:url('../images/world-release-dates.png');width:291px;}
.topMenu li.active {
	color: #FFF;
	background-position: 0 40px;
}





.menus {
    position: absolute;
    top: 2em;
    left: 2em;
    font-size: 1.5em;
    text-transform: uppercase;
}

@media only screen and (max-width:1024px) {
    .menus {
        top: 1em;
        left: 1em;
    }
}

@media only screen and (max-width:885px) {
    .menus {
        top: 2px;
        left: 2px;
    }
}

.apple-menu,
.menu {
	background-color: #000;
	-webkit-box-shadow: 0 0 15px rgba(0,0,0,.75);
	-moz-box-shadow: 0 0 15px rgba(0,0,0,.75);
	box-shadow: 0 0 15px rgba(0,0,0,.75);
	border: solid 0.0833333333em #322f2c;
    border: solid 0.0833333333em rgba(249,236,221,0.2);
    width: 5.6em;
    text-align: center;
}

.apple-menu {
    width: 11em;
}

.menu {
    /* margin-top: 0.2em; */
}

.menu-dropdown {
    height: 1.9em;
    overflow: hidden;
}

.menu-title ,
.menu-item {
    margin: 0 auto;
    cursor: pointer;
    width: 100%;
    display: block;
    font-size: 1em;
    line-height: 1.9em;
}

.menu-item {
    font-size: 0.8333333333em;
    line-height: 1.5em;
}

.menu-text {
    padding-right: 20px;
    background: url(../images/menu-closed.png) no-repeat 85% center;
}

.menu-text.open {
    background-image: url(../images/menu-open.png);
}

.footer {
    z-index: 10000 !important;
    background: url("../images/shareBG.jpg") repeat scroll 0 0 transparent;
    background-size: 100% 60px;
    color: #fff;
    position: fixed;
    bottom: 0;
    left: 0;
    font-size: 0.625em;
    text-transform: uppercase;
    width: 100%;
    text-align: center;
    font-family: arial, sans-serif;
    
    height: 60px;
}

.legal
{
    color: #fff !important;
	float: right;

}

.footer a {
    color: #fff;
}


#yourstory
{
    color: #FFFFFF;
    font-family: <?php echo $FONT_FAM; ?>,times,serif;
    font-size: 25.3px !important;
    margin-bottom: 12px;
    margin-top: 31px;
    width: 329px;
}

#yourstory_a
{

    clear: both;
    color: #FFFFFF;
    font-family: <?php echo $FONT_FAM; ?>,times,serif;
    font-size: 18.91pt;
    margin-left: 16px;
    margin-top: 113px;
}

.left {
    margin-top: 10px;
    padding-left: 10px;
    width: 308px;
    float: left;
    color:#fff;
}

.left > div {
	color:#757575;
	font-family:"Adobe Garamond Pro 1167025",times,serif;
    float: left;
    line-height: 22px;
    margin-right: 5px;
    font-size: 12pt;
}

.sharing {
    cursor: pointer;
    padding-right: 10px;
    background: url(../images/arrow-right.png) no-repeat right center;
    display:block;
}

.sharing.open {
    background: url(../images/arrow-left.png) no-repeat right center;
}

.share-wrapper {
    overflow: hidden;
    position: absolute;
    top: 30px;
    left: 16px;
    height: 30px;
}

.social.left
{
margin-left: 5px;
display:block;
}
.social.left .sharing
{
color: #fff;
font-family: "HelveticaNeueW01-67MdCn 692713" !important;
font-size: 14px;
display:block;
}


.share-sites {
   /*position: absolute;*/
    top: 0;
	left:0;
    margin-left: -345px;
    width: 345px;
}

.share-sites > div {
    float: left;
    margin-right: 10px;
    height: 21px;
    line-height: 21px;
}

.share-sites .facebook-like,
.share-sites .google {
    margin-top: 2px;
}

.share-sites .facebook-like {
    overflow: hidden;
}

.share-sites .getglue {
    margin-top: 3px;
}

/*
.right {
    margin-top: 90px;
    padding-right: 10px;
    width: 227px;
    float: right;
    text-align: center;
    line-height: 1.5em;
}
*/

.social.left.top
{

margin-left:99px;

}


.right {
    float: right;
    line-height: 1.5em;
    margin-top: 0;
    padding-right: 20px;
    text-align: right;
    width: 270px;
    color:#fff;
}

#gamedesc .right {
    float: right;
    line-height: 1.5em;
    margin-top: 0;
    padding-right: 20px;
    text-align: right;
    width: 230px;
    color:#fff;
}

.right p
{	
	color:#757575;
	font-family:<?php echo $FONT_FAM; ?>,times,serif;
	font-size: 12pt !important;
	text-align: center;
}

#prizepackage
{
text-align: right;
}



.credits {
    cursor: pointer;
    padding-right: 1em;
    background: url(../images/arrow-up.png) no-repeat right center;
     float: right;
}

.right .legal a {
    padding-left: 0.625em;
}

.middle {
    overflow: hidden;
    text-align: center;
    padding: 0 5px 0 0;
    margin: 15px auto;
}

.release-date {
    font-family:"Univers LT W01 75 Black", helvetica, arial, sans-serif;
    font-size: 38px;
}


.billing-block {
    padding: 1em;
    background: #fff;
    width: 100%;
    position: fixed;
    left: 0;
    bottom: 58px;
    text-align: center;
    display: none;
    z-index: 1000;
    font-family: arial, sans-serif;
}

.billing-block .close {
    color: #000;
    cursor: pointer;
    font-size: 0.875em;
    float: right;
    margin-bottom: 1em;
     margin-right: 33px;
}

.billing-block img {
    display: block;
    margin: 0 auto;
    clear: both;
    width: 100%;
    height: 149px;
    max-width: 895px;
}

.lt-ie9 .billing-block img {
    width: 895px;
    height: 78px;
}

.billing-block .rating {
    font-size: 0.75em;
    margin-top: 0.5em;
    color: #000;
}

@media only screen and (max-width:640px) {
    body {
        font-size: 13px;
    }
}

/* ================================================================= overlay === */

.overlay {
    z-index: 10;
    display: none;
    position: fixed;
    background: #000;
    background: rgba(0,0,0,0.8);
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}

.synopsis-modal {
    background: #000;
	border: solid 0.0833333333em #322f2c;
    border: solid 0.0833333333em rgba(249,236,221,0.2);
    width: 560px;
    height: 405px;
    margin: 8em auto 0;
}

.trailer-modal {
    background: #000;
    width: 720px;
    height: 405px;
    margin: 8em auto 0;
}

.photos-modal {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}

.modal-close {
    width: 65px;
    height: 58px;
    background: url(../images/close.png) no-repeat;
    position: absolute;
    top: 0;
    left: 0;
    cursor: pointer;
}

@media only screen and (max-width:640px) {
    .synopsis-modal {
        margin-top: 1em;
    }

    .trailer-modal {
        margin-top: 2em;
        width: 560px;
        height: 315px;
    }
}

/* ================================================================= synopsis page === */

.synopsis-wrapper {
    padding: 15px;
}

.synopsis-title {
    border-bottom: 1px solid #aa7534;
    padding-bottom: 5px;
}

.synopsis-copy {
    margin: 10px 0;
    height: 360px;
    overflow: auto;
}

.synopsis-copy p {
    margin: 0 0 15px 0;
    padding: 0;
    font-size: 12px;
    line-height: 14px;
}

.scrollpane:focus {
    outline: 0;
}


.rotate {
    display: none;
}

@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) 
and (orientation : portrait) 
{
    .rotate {
        z-index: 5000;
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        background: rgba(0,0,0,0.8) url(../images/rotate.png) no-repeat center center;
        display: block;
    }
}



.interfacecontainerdiv
{
	/* margin-top: 200px; */
	

}

#gamedesc
{
   /*  background: url("../images/noPrizingBG.jpg") no-repeat scroll -148px 0 transparent; */
    height: 432px;
/* border:2px solid #fff; */
}


#storyhead
{
    background: url("../images/storyhead.jpg") no-repeat scroll 212px 0 transparent;
    height: 239px;
    
    margin: 0 auto;
    width:940px;
/* border:2px solid #fff; */
}

#storyhead.signup
{
	height:400px;
}




#storyhead.story
{
height: 146px;

}

#storyhead.thankyou
{
height: 169px;

}

.content
{
	margin:0 auto;
	width: 960px;
	margin-bottom: 150px;
}
ul#prizes 
{
list-style: none;
}

ul#prizes li
{
    margin-bottom: 20px;
    margin-left: -50px;
    text-align: left;
	

}

li#firstprize
{
background: url(../images/1stprize.png) no-repeat top left;
}

li#secondprize
{
background: url(../images/2ndprize.png) no-repeat top left;
}

li#thirdprize
{
background: url(../images/3rdprize.png) no-repeat top left;

}

ul#prizes li div.txt
{	
    margin-left: 90px;	
    font-size: .9em;
	width: 250px;
	margin-left: 90px;
}


#entries
{

	width:960px;
	margin: 0 auto;
	height: 100%;
	min-height: 100%;
	position: relative;
}

#entriesContainer
{

/* 	background: url("../images/brownBG.jpg") repeat scroll 0 0 transparent;	 */
	width:100%;
	height: 100%;
	min-height: 100%;
   /* margin-top: 40px;
	 padding-top: 40px; */
	display: block; 
}


.videoDuration
{
    background-color: #000000;
    color: #FFFFFF;
    font-size: 0.5em;
    height: 14px;
    left: 155px;
    line-height: 14px;
    position: absolute;
    text-align: center;
    top: 83px;
    width: 25px;
    font-family: 'Arial';
}

.photo
{
	
	width:300px;
	height:194px;
	margin-top: 11px;
	background-size:cover !important;
}

.full .photo
{
	
	height: auto;
	width:100%;

}

.item
{	
	/* background: none repeat scroll 0 0 #333333; */
		
	background: url("../images/item-greyBG.jpg") repeat scroll 0 0 #333333;	

	width: 300px;
	
	margin-top: 20px;
	float: left;
	color:#000;
    

}


.item.ytuploader
{

	width: 100%;
	height:300px;

}

.item p
{
	padding:0 10px;

}



.itemshare
{

	color:#757575;
	font-size: .7em;
	font-style:italic;
	text-align: right;
	padding: 10px 10px 0;
}



.shareimg
{

	margin-left:7px;
	float:right;
}

.sharelabel
{

	margin-left:7px;
	float:right;
	padding-top:6px;
}

.blackbox
{
	background: url("../images/shareBG.jpg") repeat scroll 0 0 transparent;	
	height: 39px;

}


.readmore
{
    /* background: url("../images/readmoreBG.png") no-repeat scroll 0 0 transparent; */
    
    background: #242424;
    color: #757575;
    font-size: 0.7em;
    font-style: italic;
    height: 28px;
    line-height: 24px;
    width: 90px;
    height:24px;
    text-align: center;
    margin-left: 11px;
    cursor: pointer;
}

.item.full
{
	width:940px;
	margin-bottom:130px;
}



.story
{
	font-size: 10px;

}

.full .story
{
	font-size: 16px;
	line-height: 23px;
}

img.videoImage
{
	width:300px;
	height:auto;
	margin-top: 11px;
	
}

.playicon
{
    background: url("../images/playicon.png") no-repeat scroll 0 0 transparent;
    height: 169px;
    left: 78px;
    position: absolute;
    top: 139px;
    width: 300px;
}

.gotostory
{
	cursor:pointer;

}

#submitstory
{
    background: none repeat scroll 0 0 #1c1c1c;
    border: 1px solid #353535;
    display: block;
    /* height: 34px; */
    padding-top: 3px;
    text-align: center;
    width: 300px;
    margin-top: 20px;
    color: #fff;
    font-family: "HelveticaNeueW01-67MdCn 692713";
    font-size: 16pt;
    letter-spacing:2px;
    padding-bottom: 3px;
}

.left .youcansubmit
{
font-family: <?php echo $FONT_FAM; ?>,times,serif;
}

#submitstory_s
{
    background: none repeat scroll 0 0 #1c1c1c;
    border: 1px solid #353535;
    display: block;
    height: 34px;
    padding-top: 3px;
    text-align: center;
    width: 300px;
    margin: 20px auto 20px;
    color: #757575;
    font-family: "HelveticaNeueW02-67MdCn 694060";
    font-size: 16pt;
    letter-spacing:2px;
    line-height: 31px;
}

#back
{
    background: none repeat scroll 0 0 #1c1c1c;
	font-family:"HelveticaNeueW02-67MdCn 694060";
    line-height: 27px;
    border: 1px solid #353535;
    display: block;
    height: 34px;
    padding-top: 7px;
    padding-left:10px;
    padding-right:10px;
    text-align: center;
    width: 200px;
    margin: 20px 0 20px 0 ;
    color: #757575;
    font-size: 13pt;
    letter-spacing:2px;
}

.youcansubmit
{
    color: #FFFFFF !important;
    font-family: <?php echo $FONT_FAM; ?>,times,serif;
    font-size: 19px !important;
    margin-bottom: 9px;
    margin-top: 20px;
    text-align: center;
    width: 294px;
	
}

.itemtitle
{
	font-family:"HelveticaNeueW02-67MdCn 694060";

	font-size: 1.4em;
	color:#000;
    line-height: 0;
    margin-bottom: 11px;
}

.videoTitle, .videoDate, .videoUser, .videoLoc{
	font-size: 0.55em;
    margin: 1px 0;
	font-family:"HelveticaNeueW02-67MdCn 694060";
}

.videoUser
{
	font-size: 1.1em;
	color: #4e4e4e;

}

#chooser
{
margin:0 auto;
width:304px;

}

#blackline
{
	margin:20px 0 0 -29px;

}
.ytuploader #blackline 
{
    display: block;
    margin: 30px auto 0 !important;
}

#blackline_rev
{
	
	margin:0 0 0 38px;

}

#blackline_rev_a
{
	
	margin:29px 0 0 -31px;

}

.choose
{
	float:left;
/* 	margin:20px 29px; */
	width: 101px;
}

.choose p
{
	text-align: center;
	font-family:"HelveticaNeueW02-67MdCn 694060";
	width:86px;
	margin-bottom: 4px;
	font-size: 1.1em;
}

.choose .button
{
	width: 86px;
	height: 84px;
	cursor: pointer;
}

#choose_story .button
{
	background:url("../images/storyButton.png") no-repeat scroll 0 0 transparent;


}

#choose_photo .button
{
	background:url("../images/photoButton.png") no-repeat scroll 0 0 transparent;

}

#choose_video .button
{
	background:url("../images/videoButton.png") no-repeat scroll 0 0 transparent;

}

.submitTypes
{

	clear:both;

    margin-bottom: 0px;
	margin-top: -40px;
position: relative;
padding: 40px 0;
}

.closetype
{
	left: -15px;
    position: relative;
    top: -65px;
    display:none;


}

.chooser
{

width:740px;

margin-bottom: 40px;

}

.likebox
{
	color:#757575;
	font-size: .7em;
	padding: 7px 0 0;
}

.full .likebox, .full .itemshare
{
	font-size: 1.1em;

}

.likebutton
{
    background: none repeat scroll 0 0 #1c1c1c;
    border: 1px solid #353535;
    display: block;
    height: 24px;
    padding-top: 6px;
    text-align: center;
    width: 47px;
    margin-top: 0px;
    color: #757575;
    line-height: 20px;
    font-style:italic;
    cursor:pointer;
    float:right;

}

.likecount
{
   
    display: block;
    height: 24px;
    padding-top: 6px;
    text-align: center;
    width: 47px;
    margin-top: 0px;
    color: #fff;
    line-height: 20px;
    
    float:right;
}

#entrycontrol
{
    margin-top: 40px;
    padding-left: 10px;
}

.shortline
{
width:225px;
}

.bgtexure
{
    background: url("../images/item-greyBG.jpg") repeat scroll 0 0 #333333;
    color: #000000;
    margin: 53px auto 150px;
    width: 940px;
}

#signupFormIntro
{
	clear:both;
	/* height:400px; */

}

.signupformline
{
margin:20px 0 37px 60px;
}

#submitaquestion
{
	margin:31px auto 0;
	font-family:<?php echo $FONT_FAM; ?>,times,serif;
    font-size: 16.91pt;
    text-align: center;
}

#submitdescription
{
text-align: center;
margin:0 auto;
width:486px;
}

.formhead
{

	margin-bottom: 40px;

}

.story .videoUser
{
font-size: 2em;
margin-bottom:15px;
letter-spacing: 1px;
}

.storytitle
{	
    color: #433028;
    font-family: "HelveticaNeueW02-67MdCn 694060";
    font-size: 2.9em;
    margin-bottom: 0;
    margin-left: 10px;
    margin-top: 10px;
}

.box.first
{
    background: url("../images/step1.png") no-repeat scroll 0 0 transparent;
	padding-left: 90px;
}

.box.second
{
    background: url("../images/step2.png") no-repeat scroll 0 0 transparent;
	padding-left: 90px;
}

.box.third
{
    background: url("../images/step3.png") no-repeat scroll 0 0 transparent;
	padding-left: 90px;
}
.box .title
{
	font-family:<?php echo $FONT_FAM; ?>,times,serif;
    font-size: 16.91pt !important;
    margin: 0;
}

.facebook, .twitter
{
cursor: pointer;

}

#socialtemp
{
	position: relative;
	left:446px;
	top:0;

}

#filters
{
margin: -38px 20px 0;
float:right;
}

.filters
{
	float:left;
	margin-left:11px;
	cursor: pointer;

}

#options.filters
{
margin-top:10px;

}

.filterlabels
{
	font-family:"HelveticaNeueW02-67MdCn 694060";
	font-style:italic;
	letter-spacing: 2px;
	float: left;
    margin-left: 20px;
    margin-top:10px;
}

.readmore.gotostory
{
	font-family:"HelveticaNeueW02-67MdCn 694060";

}

.rulesContainer {
	width:80%;
	margin-left:auto;
	margin-right:auto
}

.rulesContainer p {
	color: #F0F0F0;
	display: block;
}


.indicator
{
	float:left;

}

.indicator_icon
{
	float:left;
	padding-left: 6px;
}

p#hashtag
{
    color: #FFFFFF;
    font-size: 18px !important;
    margin-bottom: 2px;
    margin-top: 40px !important;
    margin-left: 40px !important;
	font-family: <?php echo $FONT_FAM; ?>,times,serif !important;
}


#releasedate
{
    margin-left: 15px;
    margin-top: 12px;

}

#socialbox
{
width:200px;
float:right;
margin-top:10px;
}

#socialbox .share
{
float:left;
font-family: "HelveticaNeueW01-67MdCn 692713";
margin-top:2px;
color:#fff;
text-align: center;
margin-left: 67px;
font-size: 16px !important;
}

#socialbox .facebook
{	
	width:21px;
	float:left !important;
	margin-left:96px;
}


#socialbox .twitter.box
{
	width:21px;
	float:left !important;
	margin-left:5px;

}

#socialbox p#hashtag
{
font-family: <?php echo $FONT_FAM; ?>,times,serif !important;
margin-left:40px !important;
margin-bottom: 4px !important;
}


#socialbox #openingdate
{
margin-left:0;

}


iframe.ytembed
{
	z-index: 300 !important;
	position: absolute !important;

}




#ieShim
{
display:none;

}

.ie #ieShim
{
display:block;
clear:both;
height: 300px;

}


#cancelBtn>a
{
 text-decoration: none !important;
 }
 
 
 #logintoyour, #ytaccount
 {
	 
	/* line-height: 20px; */
	 
 }
 
 
 #ytlogo
 {
	 
	margin-bottom: -15px; 
	margin-left: 10px; 
	margin-right: -6px;
 }


.twitter-tweet
{
	cursor: pointer;
}