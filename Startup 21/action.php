<html>
    <body>
        <?php
          if(isset($_POST["subscribe"])) {
          $mailto = "abiolaajibola955@gmail.com";
           $frommail = $_POST["newsletter_subscription"];
           $subject = "Newsletter subscription";
           $subject2 = "Confirmation: E-mail was sent successfully | SwiftFoodsng.";
           $newsletter_subscription = "";
           $newsletter_subscriptionErr= "";
           if (empty($_POST["newsletter_subscription"])) {
            $newsletter_subscriptionErr = "Email is required";
          } else {
            function test_input($newsletter_subscription){
                $newsletter_subscription = trim($newsletter_subscription);
            }
            $newsletter_subscription = test_input($_POST["newsletter_subscription"]);
            // check if e-mail address is well-formed
            if (!filter_var($newsletter_subscription, FILTER_VALIDATE_EMAIL)) {
              $newsletter_subscriptionErr = "Invalid email format";
            }  
          }
          $message = "Hello, a new E-mail:" . $frommail . "has subscribed to the newsletter.";
           $message2 = "Hello, Thank you for subscribing to our newsletter, we will be keeping you updated on news about our services."."\n"."Regards, SwiftFoodsng.";
         $header= "From: $frommail";
         $header2 = "From:  $mailto";

         $result1 = mail($mailto, $subject, $message, $header );
          $result2 = mail($frommail, $subject2, $message2, $header2 );
         
         if ($result1 && $result2){
             $success = "Your e-mail was sent successfully.";
         } else {
             $failed = " Sorry, your e-mail could not be sent.";
         }
        }
         ?>
       Hello, a new E-mail: <?php echo $_POST["newsletter_subscription"] ?> has subscribed to the newsletter.


    </body>
</html>