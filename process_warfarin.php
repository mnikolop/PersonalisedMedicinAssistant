<?php

$dosage = 5;
$validity = 1;

if(isset($_POST['CYP2C9'], $_POST['VKORC1'], $_POST['weight'], $_POST['height'], $_POST['age'], $_POST['gender'])){

	$weight = $_POST['weight'];
	$height = $_POST['height'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];

	$CYP2C9 = $_POST['CYP2C9'];
	$VKORC1 = $_POST['VKORC1'];

	if (($CYP2C9 == 'Variant2') || ($CYP2C9 == 'Variant3')) {
		$dosage = $dosage + ($dosage * 0.5);
		$validity = 0;

	}

	if ($weight >= 70) {
		$n = $weight / 10;
		$dosage = $dosage + ($dosage * ($n * 0.1));	
	}

	if ($height >= 170) {
		$n = $height / 10;
		$dosage = $dosage + ($dosage * ($n * 0.1));
	}
	#echo $dosage;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Personalised Medicine Assistant</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"><!-- defining responsivnes in mobile devices -->
	<meta charset="utf-8"><!-- defining the character set for encoding -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet"> <!-- styling link -->
</head>

<body>
	<div id="index">
		<?php include_once 'navbar.php'; ?>
		<div class="container-fluid"> 
			<div id="ttl" class="bs-docs-header" tabindex="-1">
				<h1 id="overview">PMA <small>Personalised Medicine Assistant</small></h1>
			</div>

			<div class="bs-docs-section">
				<h2 id="" class="page-header">Verification for Warfarin </h2>
				<?php
					if($validity = 0){
						echo "You should consider some other medication."; 
					}
					elseif ($validity = 1) {
						echo "Warfarin is compatible with the patient's genome.";
					}
				?>
				<p>

				</p>
			</div>
			<div class="bs-docs-section">
				<h2 id="form_link" class="page-header">Recommended Dosage </h2>
				<?php 
					echo "The recomended dosage for Warfarin is ".$dosage. "mg/day.";
				?>
			</div>
			<div class="bs-docs-section">
				<h2 id="form_link" class="page-header">Check again </h2>
				<p class="lead">
					Would you like to test any other medication? <a href="drugSelect.php">Start by clicking here</a> 
				</p>
			</div>
		</div> 
		<?php include_once 'footer.php'; ?>
	</body>
	</html>


