<?php

 include "../includes/session.php";

    $wid = intval($_GET['wid']);

        $queryss=mysqli_query($con,"select * from tblpackageweight where Id=".$wid."");                        
        $countt = mysqli_num_rows($queryss);
      
        if($queryss){               
          $row = mysqli_fetch_array($queryss);
            echo '&#8358;'.number_format($row['weightPrice']);
            echo '<input type="hidden" name="weightPrice" value="'.$row['weightPrice'].'" class="form-control">';
        }

?>

