<?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $senderEmail = test_input($_POST("email"));
        $senderMsg = test_input($_POST("messageToMe"));
    }

    $senderMsg = wordwrap($senderMsg, 70);

    $receiverEmail = "olya.gubich@gmail.com";
    $subject = "Message from a site visitor";
    $bodyMessage = "E-mail: ".$senderEmail."\n";
    $bodyMessage .= "Message: ".$senderMsg;

    $headers = "From: ".$senderEmail."\r\n";
    $headers .= "Reply to: ".$senderEmail."\r\n"; 

    $mailStatus = mail($receiverEmail, $subject, $bodyMessage, $headers);

    if($mailStatus) {
        ?>
            <script language = "javascript" type="text/javascript">
                alert("Thanks for your message. I'll contact you as soon as possible.");
                window.location.href = "../index.html";
            </script>
        <?php
    } 
    else {
        ?>
            <script language = "javascript" type="text/javascript">
                alert("Message failed. Please, send your e-mail to olya.gubich@gmail.com");
                window.location.href = "./contacts.html";
            </script>
        <?php

    }
?>