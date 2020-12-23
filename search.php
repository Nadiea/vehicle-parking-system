<!DOCTYPE html>
<html>
 <head>
     
     <title>Display vehicle info</title>
     <style>
body {
  background-image: url('images/tandem-parking-featured.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;

}
table{
  font-size: 25px;
}

</style>

     
     
    </head>
    
        <body style="padding-left: 450px ;">
            <h1><b><i><u>View Your Vehicle Parking Details</u></i></b></h1>
        <div class="container"  >
            <div class="row d-flex justify-content-center ">
                <div class="col-lg-11 col-50">
                <div  class="table-responsive center" >
                    <table class="table-striped textl-center table-bordered text-DARK center">
                    <thead class="bg-dark margi text-dark">
                        <tr>
                        <th class="py-3 text-dark " ><B>Id</B></th>
                             <th class="py-3 text-dark " ><B>Name</B></th>
                             <th class="py-3 text-dark " ><B>Category</B></th>
                            
                            <th class="py-3 text-dark " ><B>Time</B></th>
                             <th class="py-3 text-dark " ><B>Charge</B></th>
                            
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
                                
                                <td><?php echo $result['time']; ?></td>
                                <td><?php echo $result['charge']; ?></td>
                                
                                
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