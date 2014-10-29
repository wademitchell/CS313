<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>

<body>
<div>

<h1>Registration</h1>

<form id="form" action="signupinsert.php" method="POST">

<label for="username">Username:</label>	
    <input type="text" id="username" name="username"></input>
	<br /><br />

	   <script> 
       
function checkPass()
{
  var re_num = /\d/;
  if(re_num.test(document.getElementById('password1').value) == false) {
    alert("Password must contain at least one number");
    document.getElementById('password1').focus();
  } 
  if(document.getElementById('password1').value.length < 7) {
    alert("Password must have at least 7 characters");
    document.getElementById('password1').focus();
  }  
}

function confirmPass()
{
  if(document.getElementById('password2').value != document.getElementById('password1').value) {
    alert("Please confirm your password");
    document.getElementById('password2').focus();
  }
}

</script>

<label for="password1">Password:</label>
        <input type="password" id="password1" name="password" onchange="checkPass()"></input>
  <br /><br />
<label for="password2">Confirm Password:</label>
        <input type="password" id="password2" name="password" onchange="confirmPass()"></input>
  <br /><br />

	<input type="submit" value="Register For The Scripture Database" />

</form>

<br /><br />

<a href="signin.php">Already Registered? Sign In Here.</a>

</div>

</body>
</html>