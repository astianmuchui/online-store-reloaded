<?php
    //This file calls certain functions on certain conditions
    require './core.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        switch($id){
            case 1:
                require './db.php';
                $name = $_SESSION['name'];
                $email = $_SESSION['email'];
                $phone = $_SESSION['phone'];
                $message = $_SESSION['message'];
                if(makeContact($name,$email,$phone,$message)){
                    header("Location: ../ ");
                };
                break;

        }
    }else{
        header("Location: ../");
    }

?>