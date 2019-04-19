<!DOCTYPE html>
<html>
<body>
<form action="re/abc" method="POST">
	@method('PUT')
	{{csrf_field()}}
<input type="submit" value="submit">
</form>
</body>
</html>