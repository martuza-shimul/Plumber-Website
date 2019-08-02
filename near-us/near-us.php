<?php include('config.php');


  $categorydetails=$ApiURL.'nearpag&limit=100';
$categorydetails_result = file_get_contents($categorydetails);
$categorydetails_obj =(json_decode($categorydetails_result, true));



 
 
   $categorydetailsc=$ApiURL.'compnay&limit=100';
$categorydetails_resultc = file_get_contents($categorydetailsc);
$categorydetails_objc =(json_decode($categorydetails_resultc, true));



 
 include('header.php');


 ?>



<div class="section service">
      <div class="container">
          <div class="row">
 

<?=$categorydetails_obj[0]['mapembd'];?>
  

      </div></div></div>
      
   



<?=htmlspecialchars_decode($categorydetails_obj[0]['detaisl']);?>


  <?php include('footer.php'); ?>