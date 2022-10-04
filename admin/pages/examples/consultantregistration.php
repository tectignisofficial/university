
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AGREERENT | Profile</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include 'include/header.php'; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include 'include/sidebar.php'; ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Profile</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Profile</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form class="forms-sample" method="post" enctype="multipart/form-data"
                                    style="margin:30px;">
                                    <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="exampledno" class="col-sm-2 col-form-label">Code No.<label
                                                style="color:Red">*</label></label>
                                        <div class="col-sm-10">
                                            </div>
                                            <?php $sql=mysqli_query($conn,"select id from agent_details order by user_id desc") or die( mysqli_error($conn));;
              $row=mysqli_fetch_array($sql);
              $lastid=$row['id'];
              if(empty($lastid)){
                  $number="001";
              }else{
                  $id=str_pad($lastid + 1, 3,0, STR_PAD_LEFT);
                  $number="AR".$id;
              }					
                                    ?>
                                            <input type="text" name="no" value="<?php echo $number; ?>"
                                                class="form-control" id="exampledno" readonly>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="exampleaddress" class="col-sm-2 col-form-label">Consultant
                                            Name<label style="color:Red">*</label></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                                required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="exampleaddress" class="col-sm-2 col-form-label">Office
                                            Address<label style="color:Red">*</label></label>
                                        <div class="col-sm-10">
                                            <textarea type="text" class="form-control" name="office_address"
                                                placeholder="Enter Address" required></textarea>
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label for="exampleaadhaar" class="col-sm-2 col-form-label">Mobile No.<label
                                                style="color:Red">*</label></label>
                                        <div class="col-sm-10">
                                            <input type="tel" class="form-control" id="examplemob" name="mobile_no"
                                                placeholder="Enter Mobile Number" minlength="10" maxlength="10"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleemail" class="col-sm-2 col-form-label">Email ID<label
                                                style="color:Red">*</label></label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Enter Email ID" required>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="examplepan" class="col-sm-2 col-form-label">Rera No.</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="rera"
                                                placeholder="Enter Number" required>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
              <label for="examplepan" class="col-sm-2 col-form-label">Document Prefix<label style="color:Red">*</label></label>
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="TECT-00001" name="prefix">
              </div>
            </div> -->


                                    <div class="form-group row">
                                        <label for="examplepan" class="col-sm-2 col-form-label">Photo<label
                                                style="color:Red">*</label></label>
                                        <div class="col-sm-10">
                                            <input type="file" name="file">
                                            <!-- <a href="upload_image.php" class="btn btn-success"> Upload</a>  -->
                                        </div>
                                    </div>

                                    <div class="col" align="right">
                                        <button type="submit" name="sub" class="btn btn-primary  btn-lg"
                                            style="color: aliceblue">Submit</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                        <!--/.col (left) -->
                        <!-- right column -->

                        <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include 'include/footer.php'; ?>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- Page specific script -->
    <script>
    $(function() {
        bsCustomFileInput.init();
    });
    </script>
</body>

</html>