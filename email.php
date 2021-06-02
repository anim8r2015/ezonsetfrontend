<html>
   
   <head>
      <title>EzOnset Account Activation</title>
   </head>
   
   <body>
      
      <?php
         $to = "ezonsetfreelance@gmail.com";
         $subject = "EzOnset Account ACtivation";
         
         $message = "<b>Kindly click on this link to activate your account.</b>";
         $message .= "<h1>This will get you started.</h1>";
         
         $header = "From:ezonsetfreelance@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Email sent successfully...";
         }else {
            echo "Email could not be sent...";
         }
      ?>
      
   </body>
</html>