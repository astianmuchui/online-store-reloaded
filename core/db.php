<?php
    try{
        $db = mysqli_connect("localhost","root","","pretty-reloaded");
    }
    catch(Exception $e){
        die("Couldn't connect");
    }
?>