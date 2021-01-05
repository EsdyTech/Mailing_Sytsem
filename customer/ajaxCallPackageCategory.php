<?php

 include "../includes/session.php";

    $pid = intval($_GET['pid']);

        $queryss=mysqli_query($con,"select * from tblmailpackagecategory where packageId=".$pid." ORDER BY categoryName ASC");                        
        $countt = mysqli_num_rows($queryss);

        if($countt > 0){                       
        echo'<select required name="mailPackageCategoryId" onchange="showCategoryPrice(this.value)" class="custom-select form-control">';
        echo'<option value="">--Select Package Category--</option>';
        while ($row = mysqli_fetch_array($queryss)) {
        echo'<option value="'.$row['Id'].'" >'.$row['categoryName'].'</option>';
        }
        echo '</select>';
        }

?>

