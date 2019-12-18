<?php
include("includes/config.php");
include("includes/header.php");


 ?>
<style type="text/css">

.error{
  color: red;
}
.success{
  color :green;
  font-weight: bold;
}
</style>
<body id="body-bg" >

<div class="container">
  <div class="login-form col-md-4 offset-md-4">
    <div class="jumbotron" style="margin-top : 20px;">
      <h3 align='center'> Sign Up Form</h3><br>
      <form method="post" >
        <div class="form-group">
        <label>Name :</label>
        <input type="text" name="name"placeholder="Name" class="form-control" autocomplete="off">
      </div>
      <div class="form-group">
      <label>Contact :</label>
      <input type="text" name="contact"placeholder="123...." class="form-control"utocomplete="off">
      </div>
      <div class="form-group">
      <label>Email :</label>
      <input type="email" name="email"placeholder="Your email" class="form-control"autocomplete="off">
      </div>
    
       <?php
      $db = mysqli_connect('localhost', 'root', '', 'project');
      $id = $_GET['id'];
      $query = "SELECT * FROM movie WHERE id=$id" ;
      $results = mysqli_query($db, $query);
      $list = mysqli_fetch_assoc($results);
      $price=$list['ticket_price'];

        ?>
      <div class="form-group">
      <label>Date :</label>
      <input type="date" name="dob"class="form-control"value="<?php echo $date; ?>">
      </div>

      <div class="form-group">
      <label>Time:</label>
      <input type="text" name="atime"placeholder="<?php echo $list['time_slot']; ?>" class="form-control">
      </div>
      <div class="form-group">
      <label>Movie name:</label>
      <input type="text" name="mname"placeholder="<?php echo $list['movie_name']; ?>" class="form-control">
      
      </div>
      <label>Price:</label>
      <div class="form-group">
      <input type="text" name="price"placeholder="<?php echo $list['ticket_price']; ?>" class="form-control">
     </div>
     <div class="form-group">
      <label>Ticket Quantity :</label>
       <select name="quantity">
             <option selected disabled hidden>Ticket quantity</option>
             <option value="1">One</option>
             <option value="2">Two</option>
             <option value="3">Three</option>
             <option value="4">Four</option>
           </select>
      </div>
     <div class="form-group">
      <label>Payment :</label>
        <input type="text" name="payment"placeholder="Enter bkash ref no or AC no" class="form-control">
      </div>
     <br>
     
      <center><input type="submit" name="submit" value="Submit" class="btn btn-success"></center>
      </form>

      <?php 

      if (isset($_POST['submit'])){
        $name     =$_POST['name'];
        $contact  =$_POST['contact'];
        $email     =$_POST['email'];
        $dob      =$_POST['dob'];
        $atime    =$_POST['atime'];
        $mname    =$_POST['mname'];
        $price    =$_POST['price'];
        $quantity =$_POST['quantity'];
        $payment  =$_POST['payment'];
        $query = "INSERT INTO posts (subject,contact,email,dob,atime,mname,price,quantity,payment)
        VALUES ('$name ','$contact',' $email','$dob','$atime ',' $mname ','$price ','$quantity','$payment')";

        $customer_list = mysqli_query($con,$query);
        if(!$customer_list){
          die("Query Failed" . mysqli_error($con));
        }

      }

       ?>
        
      
    </div>

  </div>

</div>
</body>
</html>
