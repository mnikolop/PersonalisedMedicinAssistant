<?php

if (isset($_POST['drug'] )) {
    if ($_POST['drug'] == 'Plavix'){
        header('Location: ../plavix.php');
    }

    if ($_POST['drug'] == 'Warfarin'){
        header('Location: ../warfarin.php');                  
    }
}

