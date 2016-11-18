<html>
<head>
</head>
<body>
<form name="form1" method="post" action="Sanitizer.php">
    Email Address: <br/>
    <input type="text" name="email" value="<?php echo $_POST['email']; ?>" size="50"/> <br/><br/>
    Home Page: <br/>
    <input type="text" name="homepage" value="<?php echo $_POST['homepage']; ?>" size="50" /> <br/>
    <br/>
    <input type="submit" />
</form>
</body>
</html>