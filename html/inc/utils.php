<?php



//UTILITY FUNCTIONS BELOW
//NO NEED TO MODIFY THESE

include_once 'inc/model.php'; 
$model = new Model();

function prevent_xss($str)
{
    if (is_array($str)) {
        foreach($str as $key => $value){
        	$str[$key] = prevent_xss($value);
        }
    } else {
        $str = preg_replace('!<script([^>]*)>!si', '&lt;script$1&gt;', $str);
        $str = str_replace('</script>', '&lt;/script&gt;', $str);
        $str = preg_replace('!(\S+)script\s*:!si', '$1scriipt:', $str);
        $str = preg_replace('!\bon[a-zA-Z]*=!si', 'onHack=', $str);
    }
    return $str;
}



  function cleanVar ($string) 
  {
  	$string = trim($string);
  	//$string = safeEscapeString($string);
  	$string = strip_tags($string);
  	$string = htmlentities($string);
  	return $string;
  }
  

function check_email_address($email) {
  // First, we check that there's one @ symbol, and that the lengths are right
  if (!preg_match("[^@]{1,64}@[^@]{1,255}", $email)) {
    // Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
    return false;
  }
  // Split it into sections to make life easier
  $email_array = explode("@", $email);
  $local_array = explode(".", $email_array[0]);
  for ($i = 0; $i < sizeof($local_array); $i++) {
     if (!preg_match("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) {
      return false;
    }
  }  
  if (!preg_match("^\[?[0-9\.]+\]?$", $email_array[1])) { // Check if domain is IP. If not, it should be valid domain name
    $domain_array = explode(".", $email_array[1]);
    if (sizeof($domain_array) < 2) {
        return false; // Not enough parts to domain
    }
    for ($i = 0; $i < sizeof($domain_array); $i++) {
      if (!preg_match("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) {
        return false;
      }
    }
  }
  return true;
}
?>
