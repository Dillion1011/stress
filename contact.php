<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
      <link rel="icon" href="logo 2r.png" />
    <link rel="stylesheet" href="contact.css" />
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/all.css">
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
  <!--header-->
    <header>
          <div class="container-fluid">
          <div class="top">
              <div
              class="fas fa-bars"
              style="margin-left: 10%; color:white"
              onclick="myFunction()">
              </div>
             <span class="name">Dillion</span>
           <span class="end" style="float:right; clear:both; margin-right:50px; "><i class="fa-solid fa-layer-group" style=" color: white;"></i> </span>
          </div>
      </div>
    </header>
    <!--main-->
    <main>
<div class="contain">
  <div class="con">
      <div class="first">
      <h2 style="text-align:center;">Contact us</h2>
      
   <form method="post" name="emailcontact">
    
    <label for="name" class="input">full name:</label><br>
    <input type="text" placeholder="name" name="fullname" required><br>

  <label for="name" class="input">Email Adress:</label><br>
    <input type="text" placeholder="Email" name="email" ><br>
  
  <label for="name" class="input">Subject:</label><br>
    <input type="text" placeholder="subject" name="subject"><br>
  <label for="name" class="input">message:</label><br>
    <textarea name="message" row="10" cols="30"></textarea><br>
    <input type="submit" value="submit" name="submit">
   </div>
   <?php if(!empty($message)){?>
  <div class="success">
    <strong><?php echo $message; ?></strong>
   </div>
<?php } ?>
   </form>

      <div class="second">
        <div class="sub"> 
        <h4 style="text-align:center; text-decoration: underline;">S.M.A<i class="fa-regular fa-gem"></i> </h4>
        <div class="social">
          <div class="one">
    <div><i class="fa fa-user-circle text-light"></i> Up work account</div>
    <div class="badge bg-warning"><i class="fa-solid fa-link"></i> click me</div>
<div><i class="fab fa-linkedin-in"></i> linkedin account</div>
 <div class="badge bg-danger">click me</div>
<div><i class="fas fa-envelope"></i> Email account</div>
 <div class="badge bg-warning">click me</div>
 <div><i class="fab fa-whatsapp" ></i> whatsapp account</div>
<div class="badge bg-danger">click me</div>
</div>

      <address>
         <div><i class="fa fa-phone text-light" ></i>phone no:
  </div>
   <div class="badge bg-warning" href="+234 8061731297">click me</div>
      </address>

    </div>
           </div>
         </div>
       </div>
      </div>
    </main>
<!---side-->
<aside>
       <div class="sidenav" id="sidena" style="display:none;">
           <div class="circle">
               <img src="./por.png" class="img-2" style="width: 100px; height: 100px" />
               <br />
                <div class="b">Dillion</div>
               <div class="b2">Web designer</div>
           </div>
                 <nav> 
                    <a href="por.html" class="out"><div class="li"><i class="fa fa-home"></i> Home</div></a>  
                    <div class="li" onclick="block()"><a> Project<i class="fa fa-chevron-down"></i></a></div>

                  <div class="none text-light" id="non" style="display:none; margin:5px 5px 5px 0px;">
                    <a href="website.html"><div class="la"><i class="fas fa-laptop"></i> website</div></a>
                    <a href="graphic.html"><div class="la"><i class="fas fa-laptop"></i >Graphics</div></a>
                   </div>

                       <a href="resume.html"><div class="li"><i class="fa fa-certificate"></i> Resume</div></a>
                       <a href="contact.html"><div class="li"><i class="fa-brands fa-meetup"></i> Contact</div></a>
               </nav>
        </div>
</aside>

<script rel="text/javascript" src="por.js"></script>

</body>
</html>