<!-- *****Code Contact PHP***** -->
<?php
    use PHPMailer\PHPMailer\PHPMailer;
        if (isset($_POST['sendcontact'])){
                $name =  $_POST['name'];
                $email = $_POST['email'];
                $content= $_POST['message'];

                $subject = "FEEDBACK FROM CUSTOMERS";

                require "originalWEB/PHPMailer/src/PHPMailer.php";
                require "originalWEB/PHPMailer/src/SMTP.php";
                require "originalWEB/PHPMailer/src/Exception.php"; 
               
                $mail = new PHPMailer();

                //SMTP Settings
                $mail->isSMTP();
                $mail->CharSet = "utf-8";
                $mail->Host = "smtp.gmail.com";
                $mail->SMTPAuth = true;
                $mail->Username = "beluppp@gmail.com"; //enter you email address
                $mail->Password = 'Rojoyoteamo2015'; //enter you email password
            
                $mail->Port = 465;
                $mail->SMTPSecure = "ssl";
                //Email Settings
                $mail->isHTML(true);
                $mail->setFrom($email);
                $mail->addAddress("$email"); //enter you email address
                $mail->Subject = ("$subject");
                $mail->Body = "From: $email <br> Name: $name <br> Feedback: $content" ;
                $mail->send();
            }