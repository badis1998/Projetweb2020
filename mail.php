<?php
    
            require 'phpmailer/PHPMailerAutoload.php';

            $mail = new PHPMailer;

            $mail->SMTPDebug = 3;                               // Enable verbose debug output

            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;   
                                        // Enable SMTP authentication
            $mail->Username = 'badis.raissi@esprit.tn';             // SMTP username
            $mail->Password = 'fcbarcelone2017';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            $mail->setFrom('badis.raissi@esprit.tn');
            $mail->addAddress($_GET['mail']);     // Add a recipient
                  // Name is optional
            $mail->addReplyTo('badis.raissi@esprit.tn');


   // Optional name
            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'Commande';
            $mail->Body    = 'salut '.$_GET['nom']. ' votre commande a été validee';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
            }
            //header('Location:');
            ?>
             <script> location.replace("affichec1.php"); </script>