<?php include "../includes/session.php";?>


 <?php     
 error_reporting(0);

if(isset($_POST['save'])){
    
    $currentPassword=$_POST['currentPassword'];
    $newPassword=$_POST['newPassword'];
    $conPassword=$_POST['conPassword'];

    if($conPassword != $newPassword){

        $message = "<div class='alert alert-danger' role='alert'>Password MisMatch!</div>";
    }
    else{

        $query=mysqli_query($con,"select * from tbladmin where Id='$customerId' and password='$currentPassword'");
        $row=mysqli_fetch_array($query);

        if($row > 0){

            $ret=mysqli_query($con,"update tbladmin set password='$newPassword' where Id='$customerId'");
            if($ret == True){

                 $message = "<div class='alert alert-success' role='alert'>Password Changed and Updated Successfully!</div>";
            }
            else{

                $message = "<div class='alert alert-danger' role='alert'>An Error Occurred!</div>";

            }
        } 
        else {

            $message = "<div class='alert alert-danger' role='alert'>Your Current Password Is Wrong!</div>";
        }
    }
   
}


    ?>

<!DOCTYPE html>
<html>
<head>
  <?php include "includes/head.php";?>
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->

   <?php include "includes/navbar.php"; ?>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include "includes/sidebar.php";?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Change Password</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Change Password</li>
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
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Change Password</h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
                <div class="card-body">
                    <?php if(isset($message)){echo $message;}else{}?>
                 <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Current Password</label>
                        <input type="password" required name="currentPassword" class="form-control" placeholder="Current Password">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>New Password</label>
                        <input type="password" required name="newPassword" class="form-control" placeholder="New Password">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" required name="conPassword" class="form-control" placeholder="Confirm Password">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  
                    <button type="submit" name="save" class="btn btn-primary">Save</button>
                  
                   <!-- <button type="button" class="btn btn-success swalDefaultSuccess">
                  Launch Success Toast
                </button> -->
                </div>
              </form>
            </div>
     
          
          <!--/.col (left) -->
          <!-- right column -->
          
            <!-- /.card -->
           
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include "includes/footer.php";?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include "includes/scripts.php";?>

</body>
</html>
