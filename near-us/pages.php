<?php include('config.php');

$pages=$_GET['pages'];
  $categorydetails=$ApiURL.'nearpagin&pages='.$pages;
$categorydetails_result = file_get_contents($categorydetails);
$categorydetails_obj =(json_decode($categorydetails_result, true));



 
 
   $categorydetailsc=$ApiURL.'compnay&limit=100';
$categorydetails_resultc = file_get_contents($categorydetailsc);
$categorydetails_objc =(json_decode($categorydetails_resultc, true));



 
 include('header.php');
 
 
 ?>
    <!-- Start Page Banner -->
    <div class="page-banner" style="padding:40px 0; background: url(images/slide-02-bg.jpg) center #f9f9f9;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2><?=$categorydetails_obj[0]['title'];?></h2>
      
          </div>
        
        </div>
      </div>
    </div>
    <!-- End Page Banner -->


    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="page-content">












          <div class="row">

             


<?=htmlspecialchars_decode($categorydetails_obj[0]['detaisl']);?>


            <div class="col-md-12">

                    <!-- Classic Heading -->
              <p><span>Direction to client location</span></p>

 <?=$categorydetails_obj[0]['mapembd'];?>
            </div>




          </div>
 
 











        </div>
      </div>
    </div>
    <!-- End content -->








<?php include('footer.php'); ?>