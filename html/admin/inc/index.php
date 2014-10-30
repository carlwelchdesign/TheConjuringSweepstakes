<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../css/styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/formHandling.js"></script>

</head>

<body>
<div id="signupForm">
  <form action="submit.php" method="post" enctype="application/x-www-form-urlencoded" name="bones" id="bones"> 
  
  <div class="formRow">
      <span class="formLabel">First Name</span>
      <input name="firstname" id="firstname" type="text"  class="textInput"/>
  </div>
  
  <div class="formRow">
      <span class="formLabel">Last Name</span>
      <input name="lastname" id="lastname" type="text"  class="textInput"/>
  </div> 
  
  <div class="formRow">
      <span class="formLabel">Email</span>
      <input name="email" id="email" type="text"  class="textInput"/>
  </div>
  
  <div class="formRow">
     <span class="formLabel">Country</span>
     <select name="country" id="country">
      <option value="">Country...</option>
      <option value="Afganistan">Afghanistan</option>
      <option value="Albania">Albania</option>
      <option value="United Kingdom">United Kingdom</option>
      <option value="United States of America">United States of America</option>
     </select>
  </div>

    
  <div class="formRow">
    <span class="formLabel">Link to video</span>
    <input name="video"type="text"  class="textInput" id="video" onChange="checkThumb(this.value);" />
  </div>
  
  <div class="formRow"><img class="thumbPreview" src="../images/blank.jpg"/></div>
  
  <div class="formRow">
      <input name="submit" type="submit" value="submit" />
  </div>
  s
  </form>

</body>
</html>
