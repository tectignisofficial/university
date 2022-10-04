
  <?php
  session_start();
  echo "<script type='text/javascript'>alert('logout sucessfully!');
  window.location.href='login.php';</script>";
   session_destroy(); 
   
   ?>
   