<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@ page import="java.util.List" %>
<%@ page import="java.util.ArrayList" %>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Discussion Posts</title>
</head>
<body>

	<div>
		
		<br />Scriptures:<br />

		<c:forEach var="scripture" items="${scriptures}">
        ${username}
        <strong>${scripture.comment}</strong><br />
        <br />

</c:forEach>



	</div>
	<br />
	<a href="newScripture.html">New Post</a>
	<br />
	<a href="logout">Logout</a>
</body>
</html>
