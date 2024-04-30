<?php
 
    $host="localhost";
    $port=3306;
    $user="cpses_zhj8iwy9p0@localhost";
    $password="";
    $dbname="zhojxvsm_test";

    $con = new mysqli($host, $user, $password, $dbname, $port)
    or die ('Could not connect to the database server' . mysqli_connect_error());

    //$con->close();
