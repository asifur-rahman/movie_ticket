<div class='container'> ;
 <h3></br> Welcome to Admin Panel</h3>;
 Total registered users : $row;
 <a href='admin-logout.php'><button class='btn btn-primary'style='float:right;'>Logout</button></a>;
 </br></br>";
 <table class='table table-dark'>";
 <tr align='center'>";
 <th scope="col">S.no</th>
 <th scope="col">Name</th>;
 <th scope="col">Contact</th>;
 <th scope="col">Email</th>;
 <th scope="col">Date</th>;
 <th scope="col">Show Time</th>;
 <th scope="col">Movie Name</th>;
 <th scope="col">Ticket Price</th>;
 <th scope="col">Seatno</th>;
 <th scope="col">payment</th>;
 <th scope="col">Delete</th>;
 </tr>";
 
 

<?php
include("includes/header.php");
include("includes/config.php");
session_start();
$name=$_SESSION['name'];
$query= "SELECT * FROM posts";
$select_all_user = mysqli_query($con,$query);
$i=0;
while($row=mysqli_fetch_assoc($select_all_user)){
  $id       =$row['id'];
  $subject  =$row['subject'];
  $contact  =$row['contact'];
  $email    =$row['email'];
  $atime    =$row['atime'];
  $dob      =$row['dob'];
  $mname    =$row['mname'];
  $price    =$row['price'];
  $quantity =$row['quantity'];
  $payment  =$row['payment'];

 ?>
 <tr>
    <?php  echo "<th>".$i=$i+1;"</th>";?>
   <td><?php echo $subject; ?></td>
   <td><?php echo $contact; ?></td>
   <td><?php echo $email; ?></td>
   <td><?php echo $atime; ?></td>
   <td><?php echo $dob; ?></td>
   <td><?php echo $mname; ?></td>
   <td><?php echo $price; ?></td>
   <td><?php echo $quantity; ?></td>
   <td><?php echo $payment; ?></td>
   <td><a href='del2.php?del2=<?php echo $id; ?>'
  class='btn btn-danger'>Delete</th></a></td>
 </tr>

 <?php  

}


?>
