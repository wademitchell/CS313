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
       
    function checkPass(form)
{
  re = /^[\d]{7}$/;
  if(re.test(form.password1.value) == false) {
    alert("Password must contain at least one number and 7 characters");
    form.password1.focus();
    return false;
  }  
  return true;
}

function confirmPass(form)
{
  if(form.password2.focus.value = "")
    alert("Please confirm your password");
    form.password2.focus();
    return false;
  }

}

</script>

<label for="password1">Password:</label>
        <input type="password" id="password1" name="password" onchange="return checkPass(this);"></input>
  <br /><br />
<label for="password2">Password:</label>
        <input type="password" id="password2" name="password" onchange="return confirmPass(this);"></input>
  <br /><br />

	<input type="submit" value="Register For The Scripture Database" />

</form>

<br /><br />

<a href="signin.php">Already Registered? Sign In Here.</a>

</div>

</body>
</html>
