<?php

 include "../includes/session.php";

    $sid = intval($_GET['sid']);

        $queryss=mysqli_query($con,"select * from tblpackagesize where Id=".$sid."");                        
        $countt = mysqli_num_rows($queryss);
      
        if($queryss){               
          $row = mysqli_fetch_array($queryss);
            echo '&#8358;'.number_format($row['sizePrice']);
            echo '<input type="hidden" name="sizePrice" value="'.$row['sizePrice'].'" class="form-control">';
        }

?>

