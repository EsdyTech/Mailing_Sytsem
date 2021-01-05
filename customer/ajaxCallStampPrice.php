<?php

 include "../includes/session.php";

    $stid = intval($_GET['stid']);

        $queryss=mysqli_query($con,"select * from tblpostagestamps where Id=".$stid."");                        
        $countt = mysqli_num_rows($queryss);
      
        if($queryss){               
          $row = mysqli_fetch_array($queryss);
            echo '&#8358;'.number_format($row['stampPrice']);
            echo '<input type="hidden" name="stampPrice" value="'.$row['stampPrice'].'" class="form-control">';
        }

?>

