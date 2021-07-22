<?php
    #FUNCTIONS
    
    function connect($db){
        try{
            $db = mysqli_connect("localhost","root","","pretty-reloaded");
        }
        catch(Exception $e){
            die("Couldn't connect");
        }
    }

    function makeContact($name,$email,$phone,$message){
        global $db;
        connect($db);  
        

        //WHATSAPP LINK
        $raw_link = "https://wa.me/254";
        $digits = substr($phone,0,1);
        $whatsapp_link = $raw_link.$digits;

        if(filter_var($email,FILTER_VALIDATE_EMAIL)==true){
            $query = "INSERT INTO messages (`name`,`email`,`phone`,`whatsapp`,`message`) VALUES('$name','$email','$phone','$whatsapp_link','$message')";
            $run = mysqli_query($db,$query);
            if($run){
                $seb = "Pretty collections ";
                $sender = "7chapterhouse@gmail.com";
                $recepient = "kamankuranelly@gmail.com";
                $subject = "New Message Alert";
                $body = "You have a new message from '.$name.','.$email.' Please login to your control panel to view";
                $headers = "from: .$seb."<".$sender.>"."\r\n";
                $headers .="MIME-Version: 1.0"."\r\n";
                $headers .= "Content-Type:text/html;charset=UTF-8"."\r\n";

                try{

                    if(mail($recepient,$subject,$body,$headers)){
                        header("Location:../?Sent");
                    }else{
                        header("Location: ../?Not_Sent");
                    }
                }    
                catch(Exception $e){

                }
                    
            }    
   
        }
    }
?>