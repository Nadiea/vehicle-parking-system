<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>parking charge</title>
      
    <style>
body {
  background-image: url('images/Park07-Reversing-out-of-an-angle-park-v3.gif');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;

}
        
h1 {
  font-size: 40px;
}
table{
  font-size: 30px;
}

</style>

  </head>
  <body style="padding-left: 500px ;">
	  

    
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5">
              <h1 class="mb-0 bread"><b><u><i>Parking charge</i></u></b></h1>
            
          </div>
        </div>
      </div>
  
    
       

    <section class="ftco-section ftco-pricing">
			<div class="container">
				<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	
          	
          
          </div>
        </div>
            <table class="table table-bordered "> <thead> <tr> <th>#</th> <th>vehicle</th> <th>charge</th> </tr> </thead> <tbody>
<?php
$ret=mysqli_query($con,"select *from  tblservices");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

             <tr> <th scope="row"><?php echo $cnt;?></th> <td><?php  echo $row['vehicle'];?></td> <td><?php  echo $row['charge'];?></td> </tr>   <?php 
$cnt=$cnt+1;
}?></tbody> </table> 
			</div>
		</section>

  
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


 
    
  </body>
</html>