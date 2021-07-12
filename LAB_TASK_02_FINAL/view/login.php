<?php
include "header.php" 
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login Details</title>
  </head>
  <body>
   <form method="post" action="../controller/loginCheck.php">
	  <table width="100%">
	   
	    <tr>
		  <td colspan="2">
	  <table width="60%">
	  <fieldset>
	    <legend>LOGIN</legend>
		Username:<input type="text" name="username" 
		value = "<?php 
		if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"class="input-field"><br><br>
		Password  :<input type="Password" name="password" value="<?php 
		if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"class="input-field"><br><br>
		<input type="checkbox" name="remember" /> Remember me
		<hr><br>
		           <input type="submit" name="submit" value="Submit">
				   <input type="reset" name="reset" value="Reset">				   
				   <a href = "signup.php"> SignUp</a>				   				   
	  </fieldset>
    </form>
  </body>
</html>
<?php
include "footer.php" 
?>