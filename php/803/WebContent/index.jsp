<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Discussion Board</title>
    </head>
    <body>
        <h1>Login</h1>
        <p>Test with Username: admin Password: db</p>
        <form action = "login" method = "post">
            <label for = "name">Username:</label>
            <input type = "text" id = "username" name = "username"></input>
            <br />
            <br />
            <label for = "name">Password:</label>
            <input type = "password" id="password" name="password"></input>
            <br />
            <br />
            <input type = "submit" value = "Login"/>
        </form>
    </body>
</html>
