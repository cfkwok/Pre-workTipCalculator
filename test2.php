<html>
	<head>
		<link rel="stylesheet" href="style.css">	
		<title>Tip Calculator</title>	
	</head>

	<body>
		<form action="" method="POST">
			<fieldset>
			<legend>Tip Calculator</legend>
			<div>
				<?php
					if (isset($_POST['costfield'])) {						
						if (is_numeric($_POST['costfield']) && $_POST['costfield'] >= 0) {
							
							echo 'Bill Subtotal: $ <input type="text" name="costfield" value="' . ($_POST['costfield']) . '"';
						} else {
							echo '<div id="error">Bill Subtotal: $ <input type="text" name="costfield" value="0"</div>';
						}
					} else {
						echo 'Bill Subtotal: $ <input type="text" name="costfield" value="0"';
					}
				 ?>
			</div>
			<div>
				Tip Percentage:

				<?php
					for ($i = 0.10; $i <= 0.20; $i = $i + 0.05) {
						if(isset($_POST['tipPercent']) && $_POST['tipPercent'] == $i) {
							echo '<input type="radio" name="tipPercent" value="' . $i . '"' . " checked='checked'>" . $i * 100 . "%";
						} else {
							echo '<input type="radio" name="tipPercent" value="' . $i . '">' . $i * 100 . "%";
						}
					}
				?>

			</div>
			<div>
				<input type="submit" value="Submit">
			</div>
			<div>
				<?php 
					if (isset($_POST['costfield'], $_POST['tipPercent'])) {
						$costfield = (float) $_POST['costfield'];
						$tipPercent = (float) $_POST['tipPercent'];

						if (is_numeric($costfield) && $costfield >= 0) {
							echo '<br><fieldset>';
							echo 'Tip: $' . number_format((float) $tipAmount = ($costfield * $tipPercent), 2, '.', '');
							echo '<br>Total: $' . number_format((float) ($costfield + $tipAmount), 2, '.', '');
							echo '</fieldset>';
						}
					}
				?>
			</div>
			</fieldset>
		</form>
	</body>

</html>