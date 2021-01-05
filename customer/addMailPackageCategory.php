<?php include "../includes/session.php";?>


 <?php     
 error_reporting(0);

    ?>

<!DOCTYPE html>
<html>
<head>
  <script>
//Only allows Numbers
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

</script>
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
            <h1>Mail Package Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mail Package Category</li>
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
     
            <!-- Horizontal Form -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">All Mail Packages</h3>
              </div>
              <!-- /.card-header -->
                <div class="card-body">
                 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>S/N</th>
                   <th>Package Name</th>
                    <th>Category</th>
                  <th>Description</th>
                   <th>Delivery Period</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody>
              
               <?php
        $ret=mysqli_query($con,"SELECT tblmailpackages.Id,tblmailpackages.packageName,tblmailpackagecategory.categoryName,tblmailpackagecategory.categoryDescription,tblmailpackagecategory.estimatedDeliveryPeriod,
        tblmailpackagecategory.categoryPrice,tblmailpackagecategory.dateAdded
        from tblmailpackagecategory 
        INNER JOIN tblmailpackages ON tblmailpackages.Id = tblmailpackagecategory.packageId");
        $cnt=1;
        while ($row=mysqli_fetch_array($ret)) {
                            ?>
                <tr>
                <td><?php echo $cnt;?></td>
                <td><?php  echo $row['packageName'];?></td>
                <td><?php  echo $row['categoryName'];?></td>
                <td><?php  echo $row['categoryDescription'];?></td>
                <td><?php  echo $row['estimatedDeliveryPeriod'];?></td>
                <td><?php  echo $row['categoryPrice'];?></td>
                </tr>
                <?php 
                $cnt=$cnt+1;
                }?>
                                 
                </tbody>
                <tfoot>
                <tr>
                 <th>S/N</th>
                   <th>Package Name</th>
                    <th>Category</th>
                  <th>Description</th>
                   <th>Delivery Period</th>
                    <th>Price</th>
                </tr>
                </tfoot>
              </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

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
