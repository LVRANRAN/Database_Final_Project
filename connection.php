<?php

    $dbc = mysqli_connect("localhost","root","","f196083b");
    if(mysqli_connect_errno()){
        echo 'Failed to connect to MySQL: '.mysqli_connect_error();
    }
//$projectID = 30;