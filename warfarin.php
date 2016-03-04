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

            <form action= "process_warfarin.php" method= "POST" >
                <div class="col-md-5">
                    <h2>Warfarin <small>You are now testing for Warfarin</small></h2>
                    <h3>Genes <small>Select the diferent gene variants that the patient has</small></h3>
                    <h4>CYP2C9 <small>Select one of the variants</small></h4>
                    <label class="radio-inline">
                        <input type="radio" name="CYP2C9" id="Variant1" value="Variant1" label="Variant1">  1
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="CYP2C9" id="Variant2" value="Variant2" label="Variant2">  2
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="CYP2C9" id="Variant3" value="Variant3" label="Variant3">  3
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="CYP2C9" id="Variant3" value="Variant3" label="Variant4">  4
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="CYP2C9" id="Variant3" value="Variant3" label="Variant5">  5
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="CYP2C9" id="Variant3" value="Variant3" label="Variant6">  6
                    </label>

                    <h4>VKORC1 <small>Select one of the variants</small></h4>
                    <label class="radio-inline">
                        <input type="radio" name="VKORC1" id="Variant1" value="Variant1" label="Variant1">  1
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="VKORC1" id="Variant2" value="Variant2" label="Variant2">  2
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="VKORC1" id="Variant3" value="Variant3" label="Variant3">  3
                    </label>
                    <br>
                    <br>
                </div>
                <div class="col-md-6">
                   <h3>Patient Information <small>Inseart the patient informtion to calculate the dosage</small></h3>
                   <h4>Weight <small>Input the weight of the patient in kg</small></h4>
                   <input type="number" class="form-control" id="weight" placeholder="Weight">
                   <h4>Height <small>Input the height of the patient in cm</small></h4>
                   <input type="number" class="form-control" id="height" placeholder="Height">
                   <h4>Age <small>Input the age of the patient in years</small></h4>
                   <input type="number" class="form-control" id="age" placeholder="Age">
                   <h4>Gender <small>Select the gender of the patient </small></h4>
                   <label class="radio-inline">
                        <input type="radio" name="gender" id="Male" value="Male" label="Male">  Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" id="Female" value="Female" label="Female">  Female
                    </label>
                <br>
                <br>
                    <input type="Submit" class="btn btn-primary btn-lg" value="Submit" />
                </div>




        </form> 

    </div>
</div> 
<?php include_once 'footer.php'; ?>
</body>
</html>


