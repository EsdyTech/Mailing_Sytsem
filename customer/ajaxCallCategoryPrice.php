<?php

 include "../includes/session.php";

    $cid = intval($_GET['cid']);

        $queryss=mysqli_query($con,"select * from tblmailpackagecategory where Id=".$cid."");                        
        $countt = mysqli_num_rows($queryss);
      
        if($queryss){               
          $row = mysqli_fetch_array($queryss);
            echo '&#8358;'.number_format($row['categoryPrice']);
            echo '<input type="hidden" name="categoryPrice" value="'.$row['categoryPrice'].'" class="form-control">';
        }

?>

