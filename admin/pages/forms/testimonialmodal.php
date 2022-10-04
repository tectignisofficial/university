<?php
include('../../../configure.php');
?>
<?php
if(isset($_POST['dnk3'])){
  $query=mysqli_query($conn,"select * from testimonial where id='".$_POST['dnk3']."'");
  $row=mysqli_fetch_array($query);
  echo ' 
  <div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
       Course Name  <span class="text-danger">*</span>
      </label>
      <div class="input-group">
      <input type="hidden" name="id" value="'.$row['id'].'">
         
        <input class="form-control" placeholder="course name" name="description" type="text" value="'.$row['description'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
  <label for="date">
  Duration <span class="text-danger">*</span>
  </label>
  <div class="input-group">
   
    <textarea class="form-control" placeholder="duration" name="about">'.$row['about'].'</textarea>
    
  </div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
  <label for="date">
  Price <span class="text-danger">*</span>
  </label>
  <div class="input-group">
   
    <textarea class="form-control" placeholder="price" name="name">'.$row['name'].'</textarea>
    
  </div>
</div>
</div>
</div>

 <div class="row">
 <div class="col-md-12">
<div class="form-group">
<label for="clock_in">
Image   <span class="text-danger">*</span>
</label>
<div class="input-group">
<input type="file" class="form-control" value="'.$row['image'].'" name="image" >

</div>
</div>
</div>
 
</div>
';
}


?>