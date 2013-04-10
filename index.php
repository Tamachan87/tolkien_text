<!DOCTYPE html>
<html>
<head>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>	
	<script src="js/tolkien.js"></script>
</head>

<header>

</header>

<div class="container">

	<div class="input">
		<h2>How many paragraphs of Tolkien Texts do you want?</h2>
		<form action="text.php" method="post" class="ajax">
			<select name="number_of_paragraphs">
				<option value="0">1</option>
				<option value="1">2</option>
				<option value="2">3</option>
				<option value="3">4</option>
				<option value="4">5</option>
			</select>
			<input type="submit" value="Ain't Tolkien 'bout love!">
		</form>
	</div>

	<div class="text"></div>

</div>

</html>
