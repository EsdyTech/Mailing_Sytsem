      
    <?php
      $queryss=mysqli_query($con,"select * from tblcustomers where Id=".$customerId."");                        
      $row = mysqli_fetch_array($queryss);
    
    ?>
    
    
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="index3.html" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Welcome <?php echo $row['firstName'].' '. $row['lastName'];?></a>
        </div>
      </div><nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Packages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addMailPackage.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mail Packages</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="addMailPackageCategory.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mail Packages Category</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="addMailPackageSize.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mail Package Size</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="addMailPackageWeight.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mail Package Weight</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mails
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="sendMail.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Send Mail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="allMails.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Mails</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Addresses
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addPostalAddress.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My Postal Address</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="addRecipientsAddress.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Recipients Addresses</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Postage Stamps
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addPostageStamp.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Postage Stamps</p>
                </a>
            </ul>
          </li>
         <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">   
            <li class="nav-item">
                <a href="changePassword.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>          
              <li class="nav-item">
                <a href="../logout.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
        </li>        
        </ul>
      </nav>
    </div>
     </aside>