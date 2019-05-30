<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FORM</title>
  </head>
  <body>
  	<h1>FORM POST</h1>
  	<form action="post.php" method="POST">
  		<label >Username: <br><input name="username" type="username"></label><br>
  		<label> Email: <br><input type="email" name="email"></label><br>
  		<label> Password:  <br> <input type="password" name="password"></label><br>
  		<label> Confirm_Password: <br> <input type="password" name="confirm_password"></label><br>
  		<label> Gender: <select name="gender">
  			<option value="1">woman</option>
  			<option value="2">man</option>
  		</select></label><br>
  		<button type="submit" name="button">Submit</button>
  	</form>
   


  </body>
</html>
