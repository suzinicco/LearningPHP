<?php
if($_POST['user']) {
   print "Hello, ";
   print $_POST['user'];
   print "!";
   }
   else {
     print <<<_HTML_
	 <form method="post" action="$_SERVER[PHP_SELF]">
	 Username: <input type="text" name="user">
	 <br />
	 <input type="submit" value"Login">
	 </form>
_HTML_;
	 }
?>