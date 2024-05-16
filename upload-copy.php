<?php
    //za uploadvane na snimki

    $targetdirectory = "img/";
    $targetfile = $targetdirectory . basename($_FILES["photo-input"]["name"]);
    $isupload = 1;
    $filetype = strtolower(pathinfo($targetfile,PATHINFO_EXTENSION));

    //proverka dali failut sushtestvuva
    if(file_exists($targetfile))
    {
        $isupload = 0;
        header("Location: login.html?error=Файлът вече съществува");

    }

    //ogranichenie na razmera
    if($_FILES["photo-input"]["size"] > 5000000)
    {
        //tvurde golqm
        $isupload = 0;
    }

    //ogranichenie na failoviq format
    $allowedtypes = array("jpg", "jpeg", "png", "gif", "pdf");
    if(!in_array($filetype, $allowedtypes))
    {
        $isupload = 0;
    }

    if($isupload == 0)
    {

    }
    else
    {
        if(move_uploaded_file($_FILES["input-file"]["tmp_name"], $targetfile))
        {
            //failut e kachen
        }
        else
        {
            //vuznikna greshka
        }
    }