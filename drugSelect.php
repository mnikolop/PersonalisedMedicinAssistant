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

            <form action= "includes/process_drug.php" method= "POST" >
                <div class="col-md-5">
                    </select>
                    <br>
                    <h3>Drug <small>Type in the name of the drug you want to test</small></h3>
                    <select class="form-control" name="drug" id="drug">
                        <option value="Plavix">Plavix</option>
                        <option value="Warfarin">Warfarin</option>
                    </select>
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


