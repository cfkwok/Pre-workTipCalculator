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
					<input type="radio" name="tipPercent" value="0.10" 
						<?php if(isset($_POST['tipPercent']) && $_POST['tipPercent'] == "0.10") echo " checked='checked'"; ?> >10%				
					<input type="radio" name="tipPercent" value="0.15"
						<?php if(isset($_POST['tipPercent']) && $_POST['tipPercent'] == "0.15") echo " checked='checked'"; ?> >15%
					<input type="radio" name="tipPercent" value="0.20"
						<?php if(isset($_POST['tipPercent']) && $_POST['tipPercent'] == "0.20") echo " checked='checked'"; ?> >20%
			</div>
			<div>
				<input type="submit" value="Submit">
			</div>
			<div>
				<?php 
					if (isset($_POST['costfield'], $_POST['tipPercent'])) {
						$costfield = $_POST['costfield'];
						$tipPercent = $_POST['tipPercent'];

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