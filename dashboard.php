<!DOCTYPE html>
<html>
    <head>
        <title>Car parking main page</title>
        <style>
body {
  background-image: url('images/158057528.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include 'css/style.php';?>
        <?php include 'links/links.php';?>
    </head>
    <body style="padding-top: 100px ;">
        <div class="container register">
     <div class="row">
         <div class="col-md-3 register-left">
         <img src="../crudprac/images/crud.svg" alt=""/>
             <h2><b>Welcome to our parking service</b></h2>
             <p><b><i>please fill all the details of vehicle very carefully</i></b></p>
            
         </div>
         
         <div class="col-md-9 register-form">
        <div class="tab-content" id="myTabContent">
             <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                 <h1 class="register-heading"><b><I><u>Entry vehicle information</u></I></b></h1>
                 <form action="upload.php" method="POST" enctype="multipart/form-data">
                 <div class="row register-form">
                     <div class="col-md-6">
                     <div class="form-group">
                         <input type="text" class="form-control" placeholder="Ower name of vehicle *" name="username" value="" required/>
                         </div>
                         <div class="form-group">
                         <input type="varchar" class="form-control" placeholder="vechicle category *"  name="category" value="" required/>
                         </div>
                         
                         <div class="form-group">
                         <input type="varchar" class="form-control" placeholder="vehicle number *"  name="number" value="" required/>
                         </div>
                        <div class="form-group">
                         <input type="time" class="form-control" placeholder="Entry time *"  name="time" value="" required/>
                         </div>
                         <div class="form-group">
                         <input type="varchar" class="form-control" placeholder="parking charge *"  name="charge" value="" required/>
                         </div>
                         <div class="form-group">
                         <input type="varchar" class="form-control" placeholder="Address *"  name="address" value="" required/>
                         </div>
                          <div class="form-group">
                         <input type="varchar" class="form-control" placeholder="phone *"  name="phone" value="" required/>
                         </div>
                         <div class="form-group">
                         <input type="submit"  class="btnRegister"   name="submit" value="register"/>
                         </div>
                         
                     </div>
                     
                     </div>
                 </form>
            </div>
             </div></div> </div></div>
    </body>
</html>