<?php include "../includes/session.php";?>


 <?php     
 error_reporting(0);

 //------------------GET THE ID--------------------------------------------

  if (isset($_GET['Id']) && isset($_GET['action']) && $_GET['action'] == "edit")
	{
        $Id = $_GET['Id'];
        $query = mysqli_query($con,"select * from tblcustomerrecipients where Id='$Id'");
        $rows = mysqli_fetch_array($query);

    }

//-------------------------DELETE---------------------------------------

  if (isset($_GET['Id']) && isset($_GET['action']) && $_GET['action'] == "delete")
	{
        $Id= $_GET['Id'];

        $que = mysqli_query($con,"DELETE FROM tblcustomerrecipients WHERE Id='$Id'");

        if($que == TRUE){

            $message = "<div class='alert alert-success' role='alert'>Deleted!</div>";
        }
        else{

            $message = "<div class='alert alert-danger' role='alert'>An Error Occured!</div>";
        }
       
    }

   
    //--------------------------SAVE------------------------------------------------------

	if (isset($_POST['save']))
	{
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $phoneNo = $_POST['phoneNo'];
        $emailAddress = $_POST['emailAddress'];
        $postalAddress = $_POST['postalAddress'];
        $dateAdded = date("Y-m-d");

        $query=mysqli_query($con,"select * from tblcustomerrecipients where postalAddress = '$postalAddress'");
        $ret=mysqli_fetch_array($query);
        if($ret > 0){

            $message = "<div class='alert alert-danger' role='alert'>Recipient Already Exists!</div>";

        }
        else{

            $queryy=mysqli_query($con,"insert into tblcustomerrecipients(customerId,firstName,lastName,phoneNo,emailAddress,postalAddress,dateCreated) value('$customerId','$firstName','$lastName','$phoneNo','$emailAddress','$postalAddress','$dateAdded')");

            if ($queryy == True) {

                $message = "<div class='alert alert-success' role='alert'>Added Successfully!</div>";
            }
            else
            {
                $message = "<div class='alert alert-danger' role='alert'>An Error Occured!</div>";
            }

        }

		
	}


 //-------------------------UPDATE----------------------------------------

    if (isset($_POST['update']))
	{
       $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $phoneNo = $_POST['phoneNo'];
        $emailAddress = $_POST['emailAddress'];
        $postalAddress = $_POST['postalAddress'];
        $dateAdded = date("Y-m-d");
          
         $query=mysqli_query($con,"update tblcustomerrecipients set firstName='$firstName',lastName='$lastName',phoneNo='$phoneNo',emailAddress='$emailAddress',
         postalAddress='$postalAddress' where customerId='$customerId'");

        if($query == True) {

             $message = "<div class='alert alert-success' role='alert'>Edited Successfully!</div>";
             
        }
        else
        {
            $message = "<div class='alert alert-danger' role='alert'>An Error Occured!</div>";
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
            <h1>Mail Recipients</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mail Recipients</li>
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
                <h3 class="card-title">Add Recipients</h3>
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
                        <label>FirstName</label>
                        <input type="text" required name="firstName" value="<?php echo $rows['firstName'];?>" class="form-control" placeholder="Enter FirstName">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>LastName</label>
                        <input type="text" required name="lastName" value="<?php echo $rows['lastName'];?>" class="form-control" placeholder="Enter LastName">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" required name="phoneNo" value="<?php echo $rows['phoneNo'];?>" class="form-control" placeholder="Enter Phone Number">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" required name="emailAddress" value="<?php echo $rows['emailAddress'];?>" class="form-control" placeholder="Enter Email Address">
                      </div>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Postal Address</label>
                       <textarea class="textarea" placeholder="Place some text here" name="postalAddress"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $rows['postalAddress'];?></textarea>
                      </div>
                    </div>
                   
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <?php
                    if (isset($Id))
                    {
                    ?>
                    <button type="submit" name="update" class="btn btn-warning">Update</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                    } else {           
                    ?>
                    <button type="submit" name="save" class="btn btn-primary">Save</button>
                    <?php
                    }         
                    ?>
                   <!-- <button type="button" class="btn btn-success swalDefaultSuccess">
                  Launch Success Toast
                </button> -->
                </div>
              </form>
            </div>
     
            <!-- Horizontal Form -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">All Recipients</h3>
              </div>
              <!-- /.card-header -->
                <div class="card-body">
                 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>S/N</th>
                   <th>FirstName</th>
                    <th>LastName</th>
                  <th>Phone Number</th>
                   <th>Email Address</th>
                    <th>Postal Address</th>
                   <th>Date Added</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
              
               <?php
        $ret=mysqli_query($con,"SELECT * from tblcustomerrecipients where customerId = '$customerId'");
        $cnt=1;
        while ($row=mysqli_fetch_array($ret)) {
                            ?>
                <tr>
                <td><?php echo $cnt;?></td>
                <td><?php  echo $row['firstName'];?></td>
                <td><?php  echo $row['lastName'];?></td>
                <td><?php  echo $row['phoneNo'];?></td>
                <td><?php  echo $row['emailAddress'];?></td>
                <td><?php  echo $row['postalAddress'];?></td>
                <td><?php  echo $row['dateCreated'];?></td>
                <td><a href="?action=edit&Id=<?php echo $row['Id'];?>" title="Edit"><i class="fa fa-edit fa-1x"></i></a></td>
                <td><a onclick="return confirm('Are you sure you want to delete?')" href="?action=delete&Id=<?php echo $row['Id'];?>" title="Delete"><i class="fa fa-trash fa-1x"></i></a></td>
                </tr>
                <?php 
                $cnt=$cnt+1;
                }?>
                                 
                </tbody>
                <tfoot>
                <tr>
                 <th>S/N</th>
                   <th>FirstName</th>
                    <th>LastName</th>
                  <th>Phone Number</th>
                   <th>Email Address</th>
                    <th>Postal Address</th>
                   <th>Date Added</th>
                  <th>Edit</th>
                  <th>Delete</th>
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
