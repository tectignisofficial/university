<?php
include("configure.php");

if(isset($_POST['signup'])){
    $email=$_POST['email'];  
  $from = 'Enquiry <'.$email.'>' . "\r\n";
  $sendTo = 'Enquiry <'.$email.'>';
  $subject = 'Agreerent';
  // $fields = array( 'name' => 'name' );
  $from = 'Agreerent: 1.0' . "\r\n";
  $from .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  
  
  $emailText = '
  <html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="x-apple-disable-message-reformatting"> 
      <title></title>
      <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
      <style>
        
      </style>
  </head>
  <body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
     <div>
     <h1>'.$email.'</h1>
     </div>
  </body>
  </html>';
  
  try{
    foreach($_POST as $key => $value){
      if(isset($fields[$key])){
        $emailText.="$fields[$key]: $value\n";
      }
    }
   if( mail($sendTo,$subject,$emailText, "From:" .$from)){
  
    $sql=mysqli_query($conn,"INSERT INTO `subscribe`(`subscriber`) 
     VALUES ('$email')");
     if($sql=1){
       echo "<script>alert('Agent Registered Successfully');</script>";    }
     else{
       echo "<script>alert('Something Wrong');</script>";
     }
   }else{
      echo "$sendTo $subject $emailText $from";
   }
  }
  catch(\Exception $e){
    echo "not done";
  }
  if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    $encode=json_encode($responseArray);
    header('content-Type: application/json');
    echo $encoded;
  }
  else{
    echo $responseArray['message'];
  }
  }
?>
<section class="cta-2">
    <div class="container">
        <div class="row align-items-center subscribe-section ">
            <div class="col-lg-6">
                <div class="section-heading black-text">
                    <span class="subheading">Newsletter</span>
                    <h3>Join our community of students</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="subscribe-form">
                    <form method="post">
                        <input type="text" class="form-control" placeholder="Email Address" name="email">
                        <button type="submit"
                        name="signup" class="btn btn-main">Subscribe<i class="fa fa-angle-right ml-2"></i> </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
