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
     if(!empty($_POST["submit"])){
      $fullname = $_POST["fullname"];
      $email = $_POST["email"];
      $Subject = $_POST["subject"];
      $toEmail = "adeyeraadesola06@gmail.com";

      $mailheader = "name" .$fullname .
   "\r\n Email:".$email .
   "\r\n fullname:".$fullname .
   "\r\n subject:".$subject . "\r\n";

   if(mail($toEmail,$fullname,$subject)){
    $message = "your contact information is received successfully";
   }
     }

?>
</body>
</html>