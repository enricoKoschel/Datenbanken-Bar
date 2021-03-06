<?php
	session_start();
	$_SESSION['question3'] = $_POST['radioButton'];
?>

<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">

	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		  integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
			crossorigin="anonymous"></script>

	<script src="//code.jquery.com/jquery.min.js"></script>
	<script>
		$.get("nav.html", function (data) {
			$("#nav-placeholder").replaceWith(data);
		});
	</script>

	<title>Allgemeinwissenstest Frage 4</title>
</head>
<body>
	<div id="nav-placeholder"></div>

	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Frage 4: Welche der folgenden Städte befindet sich <b>nicht</b> in Deutschland?</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<form action="quiz4.php" method="post">
					<div class="form-check form-check-inline">
						<label class="form-check-label">Berlin
							<input class="form-check-input" type="radio" name="radioButton" value="option1">
						</label>
					</div>
					<div class="form-check form-check-inline">
						<label class="form-check-label">Hamburg
							<input class="form-check-input" type="radio" name="radioButton" value="option2">
						</label>
					</div>
					<div class="form-check form-check-inline">
						<label class="form-check-label">New York
							<input class="form-check-input" type="radio" name="radioButton" value="option3">
						</label>
					</div>
					<div class="form-check form-check-inline">
						<label class="form-check-label">Kiel
							<input class="form-check-input" type="radio" name="radioButton" value="option4">
						</label>
					</div>
					<br>
					<br>
					<button type="submit" class="btn btn-primary">Senden</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>