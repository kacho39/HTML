<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html>

<?php
/*
$_GET: variables passed to the current script via the URL parameters.
$_POST: variables passed to the current script via the HTTP POST method.
*/

	//	GET
/*
visible to everyone 	(all variable names and values are displayed in the URL)
limit: 2000 char
displayed in the url 	so can bookmark it
*/
	//	POST
/*
invisible to others 	(embedded within the body of the HTTP request)
no limits on amount
supports advanced functionality
*/
?>