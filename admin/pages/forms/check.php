<?php
include('../../../configure.php');
session_start();
if(isset($_SESSION['id'])) // If session is not set then redirect to Login Page
{
 header("Location:index.php"); 
}
?>
<?php
if(isset($_POST['dnkk'])){
    $query=mysqli_query($conn,"select * from instructor where id='".$_POST['dnkk']."'");
    $row=mysqli_fetch_array($query);
    echo '         <div class="row">
    <div class="col-md-6">
      <div class="form-group col">
        <label for="exampleInputEmail1">Instructor Name</label>
        <input type="text" class="form-control" value="'.$arr['instructor'].'" name="instructor" >
      </div>
      </div>
     
      </div>
      <div class="row">
      <div class="col-md-6">
      <div class="form-group col">
        <label for="exampleInputEmail1">About Instructor</label>
        <textarea class="form-control" value="'.$arr['about'].'" name="about"></textarea>
      </div>
      </div>
     
      <div class="col-md-6">
      <div class="form-group col">
        <label for="exampleInputPassword1">Courses</label>
        <input type="text" class="form-control" name="courses" value="'.$arr['about'].'" >
      </div>
      </div>
      
      </div>
      <div class="row">
  <div class="col-md-6">
      <div class="form-group col">
        <label for="exampleInputPassword1">Students</label>
        <input type="text" class="form-control" name="students" value="'.$arr['students'].'" >
      </div>
      </div>
     
</div>
    
    

    
  ';}
  
  if(isset($_POST['leaveEdit'])){
    $id=$_POST['leaveid'];
    $emp_id=$_POST['leaveemplid'];
    $instructor = $_POST['instructor'];
    $about = $_POST['about'];
    $courses = $_POST['courses'];
    $student = $_POST['students'];
    
   
    $sql="UPDATE `instructor` SET `instructor`='$instructor',`about`='$about',`courses`='$courses',`employee_id`='$emp_id',`students`='$student' WHERE id='$id
    .'";
    if (mysqli_query($conn, $sql)){
      header("location:advanced.php");
   } else {
      echo "<script> alert ('connection failed !');window.location.href='advanced.php'</script>";
   }
  }
?>