<?php
 include "../includes/session.php";

?>


<!DOCTYPE html>
<html>
<head>
 <?php include "includes/head.php";?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->

  <?php include('includes/navbar.php');?>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  

     <!-- Sidebar -->

<?php include('includes/sidebar.php');?>

      <!-- Sidebar Menu -->

      <!-- /.sidebar-menu -->
    <!-- /.sidebar -->
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         
          <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php 
              $packageCatQuery=mysqli_query($con,"SELECT * from tblmails where customerId = '$customerId'");                       
              $countPacakgeCat = mysqli_num_rows($packageCatQuery);
              ?>
                <h3><?php echo $countPacakgeCat;?></h3>
                <p>Sent Mails</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php 
              $packageSizeQuery=mysqli_query($con,"SELECT * from tblmails where customerId = '$customerId' and isPickedUp = '0'");                       
              $countPacakgeSize = mysqli_num_rows($packageSizeQuery);
              ?>
                <h3><?php echo $countPacakgeSize;?></h3>
                <p>Pending PickUp Mails</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php 
              $packageWeightQuery=mysqli_query($con,"SELECT * from tblmails where customerId = '$customerId' and isApproved = '1'");                       
              $countPacakgeWeight = mysqli_num_rows($packageWeightQuery);
              ?>
                <h3><?php echo $countPacakgeWeight;?></h3>
                <p>Approved Mails</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

           <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
              <?php 
            $stampQuery=mysqli_query($con,"SELECT * from tblmails where customerId = '$customerId' and deliveryStatus = '1'");                       
            $countStamp = mysqli_num_rows($stampQuery);
              ?>
                <h3><?php echo $countStamp;?></h3>
                <p>Delivered Mails</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php 
              $packageSizeQuery=mysqli_query($con,"SELECT * from tblmails where customerId = '$customerId' and isPickedUp = '1'");                       
              $countPacakgeSize = mysqli_num_rows($packageSizeQuery);
              ?>
                <h3><?php echo $countPacakgeSize;?></h3>
                <p>PickedUp Mails</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php 
              $packageWeightQuery=mysqli_query($con,"SELECT * from tblmails where customerId = '$customerId' and deliveryStatus = '0'");                       
              $countPacakgeWeight = mysqli_num_rows($packageWeightQuery);
              ?>
                <h3><?php echo $countPacakgeWeight;?></h3>
                <p>Pending Mails</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php 
              $packageCatQuery=mysqli_query($con,"SELECT * from tblcustomerrecipients where customerId = '$customerId'");                       
              $countPacakgeCat = mysqli_num_rows($packageCatQuery);
              ?>
                <h3><?php echo $countPacakgeCat;?></h3>
                <p>Recipients</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

            <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
              <?php 
            $stampQuery=mysqli_query($con,"SELECT * from tblmails where customerId = '$customerId' and isApproved = '0'");                       
            $countStamp = mysqli_num_rows($stampQuery);
              ?>
                <h3><?php echo $countStamp;?></h3>
                <p>UnApproved Mails</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>


        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
           
            <!-- /.card -->

            <!-- DIRECT CHAT -->
           
            <!-- TO DO List -->
          
              <!-- /.card-body -->
             
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
            
            <!-- /.card -->

            <!-- solid sales graph -->
            
            <!-- /.card -->

                <!--The calendar -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'includes/footer.php';?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include 'includes/scripts.php';?>
</body>
</html>
