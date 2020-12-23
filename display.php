<!DOCTYPE html>
<html>
 <head>
     
     <title>Display vehicle info</title>
     <style>
body {
  background-image: url('images/2020-Vauxhall-Corsa-SRi-UK-01.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
     <?php include 'css/style.php';?>
        <?php include 'links/links.php';?>
     
    </head>
    
        <body style="padding-top: 100px ;">
        <div class="container"  >
            <div class="row d-flex justify-content-center ">
                <div class="col-lg-11 col-50">
                <div  class="table-responsive" >
                    <table class="table-striped textl-center table-bordered text-light">
                    <thead class="bg-white margi text-light">
                        <tr>
                        <th class="py-3 text-dark " >id</th>
                             <th class="py-3 text-dark " >Name</th>
                             <th class="py-3 text-dark " >Category</th>
                             <th class="py-3 text-dark " >Number</th>
                             <th class="py-3 text-dark " >Time</th>
                             <th class="py-3 text-dark " >Charge</th>
                            <th class="py-3 text-dark " >Address</th>
                            <th class="py-3 text-dark " >phone</th>
                              <th class="py-3 text-dark " >Exit</th>
                        
                        </tr>
                    </thead>
                        <tbody>
                            <?php
                            include('includes/dbconnection.php');
                            $selectquery = "select * from vehicleinfo";
                            $query = mysqli_query($con,$selectquery);
                            $result = mysqli_fetch_array($query);
                            while($result = mysqli_fetch_array($query)){
                                ?>
                            <tr>
                                <td><?php echo $result['id']; ?></td>
                                <td><?php echo $result['username']; ?></td>
                                <td><?php echo $result['category']; ?></td>
                                <td><?php echo $result['number']; ?></td>
                                <td><?php echo $result['time']; ?></td>
                                <td><?php echo $result['charge']; ?></td>
                                <td><?php echo $result['address']; ?></td>
                                 <td><?php echo $result['phone']; ?></td>
                                <td><a href = 'delete.php?rn=$result[id]'>out</a></td>
                                
                            </tr>
                            <?php
                            }
                            
                            ?>
                        </tbody>
                    </table>
                    
                    </div>
            
                </div>
            </div>
        
        
        
        
        
        </div>
    </body>
</html>