<?php 

    //let7s get all values
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $website = $_POST['website'];
    $message = $_POST['message'];

    if(!empty($email) && !empty($email)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $reciver = "barmanapu5670@gmail.com";
            $subject  = "From: $name <$email>";
            $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage: $message\n\nRegards,\n$name";
            $sender = "From: $email";
            if(mail($reciver, $subject, $body, $sender)){
                echo "Your message has been sent";
            }else{
                echo "Sorry, faild to send your message!";
            }
        }else{
            echo "Enter a valid email address";
        }
    }else{
        echo "Email and password fields is required";
    }

?>