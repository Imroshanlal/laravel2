<!DOCTYPE html>
<html>
<body>
	<form action="re" method="POST">
		{{csrf_field()}}
		<input type="text" name="text">
		<input type="submit" value="submit">
	</form>	
</body>
</html>