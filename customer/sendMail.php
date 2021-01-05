<?php include "../includes/session.php";?>


 <?php     
 error_reporting(0);

 //------------------GET THE ID--------------------------------------------

  if (isset($_GET['Id']) && isset($_GET['action']) && $_GET['action'] == "edit")
	{
        $Id = $_GET['Id'];
        $query = mysqli_query($con,"select * from tblmails where Id='$Id'");
        $rows = mysqli_fetch_array($query);

    }

//-------------------------DELETE---------------------------------------

  if (isset($_GET['Id']) && isset($_GET['action']) && $_GET['action'] == "delete")
	{
        $Id= $_GET['Id'];

        $que = mysqli_query($con,"DELETE FROM tblmails WHERE Id='$Id'");

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

     //-------------------CALCULATE POSTAGE PRICE-----------------------------------------
      $categoryPrice = $_POST['categoryPrice'];
      $sizePrice = $_POST['sizePrice'];
      $weightPrice = $_POST['weightPrice'];
      $stampPrice = $_POST['stampPrice'];
      $quantity = $_POST['quantity'];

      $totalPostagePrice = (($categoryPrice + $sizePrice + $weightPrice + $stampPrice) *  $quantity);

     //----------------------------------------------

        $mailPackageId = $_POST['mailPackageId'];
        $mailPackageCategoryId = $_POST['mailPackageCategoryId'];
        $packageSizeId = $_POST['packageSizeId'];
        $packageWeightId = $_POST['packageWeightId'];
        $postageStampId = $_POST['postageStampId'];
        $valueOfItem = $_POST['valueOfItem'];
        $typeOfItemId = $_POST['typeOfItemId'];
        $quantity = $_POST['quantity'];
        $dateToBeMailed = $_POST['dateToBeMailed'];
        $timeToBeMailed = $_POST['timeToBeMailed'];
        $destinationCountry = $_POST['destinationCountry'];
        $destinationRegion = $_POST['destinationRegion'];
        $destinationZipCode = $_POST['destinationZipCode'];
        $recipientsId = $_POST['recipientsId'];
        $dateAdded = date("Y-m-d");

    
        $queryy=mysqli_query($con,"insert into tblmails(customerId,mailPackageId,mailPackageCategoryId,packageSizeId,packageWeightId,postageStampId,valueOfItem,typeOfItemId,quantity,dateToBeMailed,timeToBeMailed,destinationCountry,destinationRegion,destinationZipCode,recipientsId,totalPostagePrice,isApproved,isVerified,isPickedUp,deliveryStatus,dateAdded) 
        value('$customerId','$mailPackageId','$mailPackageCategoryId','$packageSizeId','$packageWeightId','$postageStampId','$valueOfItem','$typeOfItemId','$quantity','$dateToBeMailed','$timeToBeMailed','$destinationCountry','$destinationRegion','$destinationZipCode','$recipientsId','$totalPostagePrice','0','0','0','0','$dateAdded')");

        if ($queryy == True) {

            $message = "<div class='alert alert-success' role='alert'>Save and Sent Successfully!</div>";
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
  <script>
function showCategory(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","ajaxCallPackageCategory.php?pid="+str,true);
        xmlhttp.send();
    }
}

function showSizePrice(str) {
    if (str == "") {
        document.getElementById("txtHintt").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHintt").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","ajaxCallSizePrice.php?sid="+str,true);
        xmlhttp.send();
    }
}

function showWeightPrice(str) {
    if (str == "") {
        document.getElementById("txtHinttt").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHinttt").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","ajaxCallWeightPrice.php?wid="+str,true);
        xmlhttp.send();
    }
}

function showCategoryPrice(str) {
    if (str == "") {
        document.getElementById("txtHintttt").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHintttt").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","ajaxCallCategoryPrice.php?cid="+str,true);
        xmlhttp.send();
    }
}

function showStampPrice(str) {
    if (str == "") {
        document.getElementById("txtstamp").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtstamp").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","ajaxCallStampPrice.php?stid="+str,true);
        xmlhttp.send();
    }
}
</script>
 <!-- Scripts for Country and Regions Dropdown Addedd-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="../js/geodatasource-cr.min.js"></script>
    <!-- <link rel="stylesheet" href="assets/css/geodatasource-countryflag.css"> -->
    <!-- link to languages po files -->
    <link rel="gettext" type="application/x-po" href="languages/en/LC_MESSAGES/en.po" />
    <script type="text/javascript" src="../js/Gettext.js"></script>
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
            <h1>Send Mails</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Send Mails</li>
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
                <h3 class="card-title">Send Mails</h3>
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
                        <label>Package Name</label>
                          <?php 
                            $query=mysqli_query($con,"select * from tblmailpackages ORDER BY packageName ASC");                        
                            $count = mysqli_num_rows($query);
                            if($count > 0){                       
                                echo ' <select required name="mailPackageId" onchange="showCategory(this.value)" class="custom-select form-control">';
                                echo'<option value="">--Select Package--</option>';
                                while ($row = mysqli_fetch_array($query)) {
                                echo'<option value="'.$row['Id'].'" >'.$row['packageName'].'</option>';
                                    }
                                echo '</select>';
                            }
                            ?>    
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Mail Package Category</label> <?php echo "<i>Price of Package Category Selected: </i><span id='txtHintttt' style='color:red'></span>";?> 
                         <?php
                            echo"<div id='txtHint'></div>";
                          ?>        
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Package Size</label> <?php echo "<i>Price of Package Size Selected: </i><span id='txtHintt' style='color:red'></span>";?> 
                          <?php 
                            $query=mysqli_query($con,"select * from tblpackagesize");                        
                            $count = mysqli_num_rows($query);
                            if($count > 0){                       
                                echo ' <select required name="packageSizeId" onchange="showSizePrice(this.value)" class="custom-select form-control">';
                                echo'<option value="">--Select Package Size--</option>';
                                while ($row = mysqli_fetch_array($query)) {
                                echo'<option value="'.$row['Id'].'" >'.$row['sizeFrom'].'-'.$row['sizeTo'].'</option>';
                                    }
                                echo '</select>';
                            }
                            ?>     
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Package Weight</label> <?php echo "<i>Price of Package Weight Selected: </i><span id='txtHinttt' style='color:red'></span>";?> 
                          <?php 
                            $query=mysqli_query($con,"select * from tblpackageweight");                        
                            $count = mysqli_num_rows($query);
                            if($count > 0){                       
                                echo ' <select required name="packageWeightId" onchange="showWeightPrice(this.value)" class="custom-select form-control">';
                                echo'<option value="">--Select Package Weight--</option>';
                                while ($row = mysqli_fetch_array($query)) {
                                echo'<option value="'.$row['Id'].'" >'.$row['weightFrom'].'-'.$row['weightTo'].'</option>';
                                    }
                                echo '</select>';
                            }
                            ?>     
                      </div>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Value of Item</label>
                        <input type="text" required name="valueOfItem" value="<?php echo $rows['valueOfItem'];?>" onkeypress="return isNumber(event)" class="form-control" placeholder="Enter Value of Item i.e. the amount the item cost (e.g. 1000, 2200)">
                      </div>
                    </div>
                   <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Type of Item</label>
                          <?php 
                            $query=mysqli_query($con,"select * from tblitemtype");                        
                            $count = mysqli_num_rows($query);
                            if($count > 0){                       
                                echo ' <select required name="typeOfItemId" class="custom-select form-control">';
                                echo'<option value="">--Select Item Type--</option>';
                                while ($row = mysqli_fetch_array($query)) {
                                echo'<option value="'.$row['Id'].'" >'.$row['itemTypeName'].'</option>';
                                    }
                                echo '</select>';
                            }
                            ?>     
                      </div>
                    </div>
                  </div>

                    <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" required name="quantity" value="<?php echo $rows['quantity'];?>" onkeypress="return isNumber(event)" class="form-control" placeholder="Enter Quantity">
                      </div>
                    </div>
                   <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Date to be Mailed</label>
                        <input type="date" required name="dateToBeMailed" value="<?php echo $rows['dateToBeMailed'];?>" class="form-control" placeholder="Enter Date to be Mailed">
                      </div>
                    </div>
                  </div>
                    <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Time to be Mailed</label>
                        <input type="time" required name="timeToBeMailed" value="<?php echo $rows['timeToBeMailed'];?>" class="form-control" placeholder="Enter Time to be Mailed">
                      </div>
                    </div>
                   <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Destination Country</label>
                        <select class="custom-select gds-cr countryflag" country-data-region-id="gds-cr-three" value="<?php echo $rows['destinationCountry'];?>" name="destinationCountry">
                        </select>
                      </div>
                    </div>
                  </div>
                    <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                         <label>Destination Region/State</label>
                        <select class="custom-select" id="gds-cr-three" name="destinationRegion" value="<?php echo $rows['destinationRegion'];?>" >
                      </select>
                      </div>
                    </div>
                   <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Destination Zip Code</label>
                        <input type="text" required name="destinationZipCode" value="<?php echo $rows['destinationZipCode'];?>" class="form-control" placeholder="Enter Destination Zip Code">
                      </div>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                         <label>Recipient</label>
                          <?php 
                            $query=mysqli_query($con,"select * from tblcustomerrecipients where customerId = '$customerId'");                        
                            $count = mysqli_num_rows($query);
                            echo ' <select required name="recipientsId" class="custom-select form-control">';
                            echo'<option value="">--Select Recipient--</option>';
                            while ($row = mysqli_fetch_array($query)) {
                            echo'<option value="'.$row['Id'].'">'.$row['firstName'].' '.$row['lastName'].'</option>';
                                }
                            echo '</select>';
                            ?>     
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Postage Stamp</label> <?php echo "<i>Price of Postage Stamp Selected: </i><span id='txtstamp' style='color:red'></span>";?> 
                             <?php 
                            $query=mysqli_query($con,"select * from tblpostagestamps");                        
                            $count = mysqli_num_rows($query);
                            if($count > 0){                       
                                echo ' <select required name="postageStampId" onchange="showStampPrice(this.value)" class="custom-select form-control">';
                                echo'<option value="">--Select Postage Stamp--</option>';
                                while ($row = mysqli_fetch_array($query)) {
                                echo'<option value="'.$row['Id'].'">'.$row['stampName'].'</option>';
                                    }
                                echo '</select>';
                            }
                            ?>   
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  
              <button type="submit" name="save" class="btn btn-primary">Save and Send</button>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             
              <input type="hidden" name="totalPostagePrice" value="<?php echo $totalPostagePrice;?>" class="form-control">
              <b><?php echo 'Total Postage Price : &#8358;'. number_format($totalPostagePrice);?></b>
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
