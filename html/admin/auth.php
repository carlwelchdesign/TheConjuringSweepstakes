<?php
if(!empty($_POST['password'])) { 
    if(md5('blah@#$'.sha1('3NhNj8&'.$_POST['password']) ) =='2579d056c05f226d2370ac79b27526dd' ) {
    header("Location: ok.php"); /* Redirect here if the password is correct */
    } else {
        header("Location: ../index.php"); /* Return here if the password ain't correct */
    }   
} else {
    header("Location: ../index.php"); /* Return here if the field is empty */
}
?>