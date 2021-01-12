<?php
    $name = $_POST["name"];
    $visitor = $_POST["email"];
    $message= $_POST["message"];

    $emailfrom = "karankumarbarolia@gmail.com";
    $emailsub = "new Entery"
    $emailbody = "user name : $name.\n".
    "user email: $visitor.\n".
    
    "user message: $ message.\n";

    $to = "karankumarsonkaria@gmail.com";
    $headers ="from $emailfrom\r\n";
    $headers .= "reply to: $visitor \r\n";
    mail($to,%$emailsub,$emailbody,$headers);
    header("location: newpage.html");
?>