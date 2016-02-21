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
          <nav class="navbar navbar-inverse ">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="form.php">Personalised Medicine Assistant</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home </a></li>
        <li class="active"><a href="form.php">Form<span class="sr-only">(current)</span></a></li>
        


</li>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
<div class="container-fluid"> 

    <form action= "#" method= "POST" >
        <div class="col-md-5">
        </select>
        <br>
        <h3>Drug <small>Type in the name of the drug you want to test</small></h3>
        <select class="form-control" name="drug">
            <option>Plavix</option>
            <option>Warfarin</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
        <h3>Genes <small>Select the diferent gene variants that the patient has</small></h3>
        <h4>CYP2C19 <small>Select one of the variants</small></h4>
        <label class="radio-inline">
            <input type="radio" name="CYP2C19" id="Variant1" value="Variant1" label="Variant1">  1
        </label>
        <label class="radio-inline">
            <input type="radio" name="CYP2C19" id="Variant2" value="Variant2" label="Variant2">  2
        </label>
        <label class="radio-inline">
            <input type="radio" name="CYP2C19" id="Variant3" value="Variant3" label="Variant3">  3
        </label>
        <label class="radio-inline">
            <input type="radio" name="CYP2C19" id="Variant3" value="Variant3" label="Variant4">  4
        </label>
        <label class="radio-inline">
            <input type="radio" name="CYP2C19" id="Variant3" value="Variant3" label="Variant5">  5
        </label>
        <label class="radio-inline">
            <input type="radio" name="CYP2C19" id="Variant3" value="Variant3" label="Variant6">  6
        </label>
        <label class="radio-inline">
            <input type="radio" name="CYP2C19" id="Variant3" value="Variant3" label="Variant7">  7
        </label>
        <label class="radio-inline">
            <input type="radio" name="CYP2C19" id="Variant3" value="Variant3" label="Variant8">  8
        </label>
        <br>
        <br>
    </div>
    <div class="col-md-6">
       <h3>Patient Information <small>Inseart the patient informtion to calculate the dosage</small></h3>
       <h4>Weight <small>Input the weight of the patient</small></h4>
       <input type="number" class="form-control" id="weight" placeholder="Weight">
       <h4>Height <small>Input the height of the patient</small></h4>
       <input type="number" class="form-control" id="height" placeholder="Height">
       <h4>Gender <small>Select the gender of the patient</small></h4>
       <label class="radio-inline">
        <input type="radio" name="gender" id="Male" value="Male" label="Male">  Male
    </label>
    <label class="radio-inline">
        <input type="radio" name="gender" id="Female" value="Female" label="Female">  Female
    </label>
    <br>
    <br>
    <input type="Submit" class="btn btn-default btn-lg" value="Submit" />
</div>




</form> 

</div>
</div> 
</div>
</div>
<?php include_once 'footer.php'; ?>
</body>
</html>


