<?php

// check if User coming form a request

 if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Assign Variables

   $user = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
   $mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
   $cell = filter_var($_POST['cellephone'], FILTER_SANITIZE_NUMBER_INT);
   $msg  = filter_var($_POST['message'], FILTER_SANITIZE_STRING);


   // creating array of error_get_last

   $formErrors = array();
   if (strlen($user) <= 3){
     $formErrors[] = "Username Must Be Larger Than <strong> 3 </strong> Characters";
   }
   if (strlen($msg) <= 10){
     $formErrors[] = "Uour message Can/'t Be Less Than <strong> 10 </strong> Characters";
   }

// if no errors send the email [ mail(to, subject, message, headers, parameters)]

$headers = 'From: ' . $mail . '\r\n';
$myEmail = 'imdrmas@gmail.com';
$subject = 'Contact From';

if (empty($formErrors)){

  mail($myEmail, $subject, $msg, $headers);

  $user = '';
  $mail = '';
  $cell = '';
  $msg  = '';

  $success = '<div class="alert alert-success"> J\'ai Reçu Votre Message </div>';
}
 }

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>contact us</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/contact.css">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



  </head>
  <body class="bd">

   <!-- start Form -->
   <section class="contact-us text-center img-responsive center-block">
  <div class="fields">
  <div class="container">
  <div class="row">


<h1 class="pan">Numero de téléphone: <span>+00 758 35 07 68</span></h1>
<h2 class="pan">E-meil: <span>imdrmas@gmail.com</span></h2>
<i class="glyphicon glyphicon-arrow-up"></i>
    <h6 class="h">Envoyer un message</h6>
      <p class="lead"> Feel free to contact any time</p>


     <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
       <div class="col-md-6 wow bounceInLeft" data-wow-duration="2s" data-wow-offest="300">
          <?php if(! empty($formErrors)) { ?>
            <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>

            <?php
               foreach($formErrors as $error){
                  echo $error . '<br/>';
                   }
                ?>
             </div>
             <?php } ?>

        <?php if (isset($success)) { echo $success; } ?>

        <div class="form-group">
       <input
            class="username form-control"
            type="text"
            name="username"
            placeholder="Votre Nom" value="<?php if (isset($user)) { echo $user; } ?>" />
      <i class="fa fa-user fa-fw"></i>
      <span class="asterisx">*</span>

      <div class="alert alert-danger custom-alert">
        Votre nom il faut être plus de <strong> 3 </strong> Caractères
      </div>
      </div>

       <div class="form-group">
       <input
       class="email form-control"
       type="text"
       name="email"
       placeholder="Entrer Votre Email" value="<?php if (isset($mail)) { echo $mail; } ?>"/>
       <i class="fa fa-envelope fa-fw"></i>
       <span class="asterisx">*</span>
         <div class="alert alert-danger custom-alert">
            Email ne peut pas être  <strong> Vide </strong>
         </div>
         </div>


      <input
       class="form-control"
       type="text"
       name="cellephone"
       placeholder="Téléphone" value="<?php if (isset($cell)) { echo $cell; } ?>" />
       <i class="fa fa-phone fa-fw"></i>
</div>


      <div class="col-md-6 wow bounceInRight" data-wow-duration="2s" data-wow-offest="300">
        <div class="form-group">
       <textarea
       class="message form-control"
       name="message"
       rows="5"
       placeholder=" Votre Message !" value="<?php if (isset($msg)) { echo $msg; } ?>"></textarea>

       <span class="asterisx">*</span>
       <div class="alert alert-danger custom-alert">
          Votre Message ne peuvent pas être moins de  <strong> 10 </strong> Mots
       </div>
       </div>


        <input
        class=" btn btn-success btn-lg btn-block"
        type="submit"
        value="Send Message">
        <i class="fa fa-send send-icon"></i>
     </form>
   </div>
</div>
</div>
</div>
</section>

<!--  Form -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>


    <body/>
    <html/>
