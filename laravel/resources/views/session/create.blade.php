<!DOCTYPE html>
<html>
<head>
	<title>create project</title>
</head>
<body>
<form action="/project" method="post">
	@csrf
	<div><input type="text" name="title" placeholder="enter your project name"/></div>
	<div><textarea name="description" placeholder="describe your project"></textarea></div>
	<div><button type="submit">create project</button></div>
</form>
</body>
</html>