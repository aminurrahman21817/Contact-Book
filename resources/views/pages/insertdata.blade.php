<form action="{{url('data-added')}}" method="post">
	@csrf
	<input type="text" name="name" placeholder="name">
	<input type="email" name="email" placeholder="email">
	<input type="text" name="phone" placeholder="phone">
	<input type="text" name="description" placeholder="description">
	<input type="submit" name="submit" placeholder="submit" value="submit">
</form>