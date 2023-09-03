<?php

include 'config.php';
session_start();
$userId = $_SESSION['id'];
$courseId = $_GET['id'];
$query = "SELECT * FROM `products` WHERE id = '$courseId'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);



if(isset($_POST['order_btn'])){

   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $method = $_POST['method'];
   $flat = $_POST['flat'];
   $street = $_POST['street'];
   $city = $_POST['city'];
   
  
   $pin_code = $_POST['pin_code'];
   $price_total = $row['price'];



   // $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
   // $price_total = 0;
   // if(mysqli_num_rows($cart_query) > 0){
   //    while($product_item = mysqli_fetch_assoc($cart_query)){
   //       $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
   //       $product_price = number_format($product_item['price'] * $product_item['quantity']);
   //       $price_total += $product_price;
   //    };
   // };
  

   // $total_product =  mysqli_num_rows($result);
   $detail_query = mysqli_query($conn, "INSERT INTO `order`(`name`, `number`, `email`, `method`, `flat`, `street`, `city`, `pin_code`, `total_price`, `course_id`, `user_id`) VALUES('$name','$number','$email','$method','$flat','$street','$city','$pin_code', '$price_total', '$courseId', '$userId')") or die('query failed');

   if($detail_query){
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>thank you for choosing our courses!</h3>
         <div class='order-detail'>
            <span>".$row['name']."</span>
            <span class='total'> total : $".$price_total."/-  </span>
         </div>
         <div class='customer-details'>
            <p> your name : <span>".$name."</span> </p>
            <p> your number : <span>".$number."</span> </p>
            <p> your email : <span>".$email."</span> </p>
            <p> your address : <span>".$flat.", ".$street.", ".$city.",".$pin_code."</span> </p>
            <p> your payment mode : <span>".$method."</span> </p>
            <p>(*Wait For Confirmation*)</p>
         </div>
            <a href='useProfile.php?id=<?php echo $userId ?>' class='btn'>continue Checking the course</a>
         </div>
      </div>
      ";
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="fontawesome/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style122.css">

</head>
<body>

<?php include 'header1.php'; ?>

<div class="container">

<section class="checkout-form">

   <h1 class="heading">complete your order</h1>

   <form action="" method="post">

   <div class="display-order">
      
      <span><?php echo $row['name'] ?></span>

     
      <span class="grand-total"> grand total : ৳<?php echo $row['price'] ?>/- </span>
   </div>

      <div class="flex">
         <div class="inputBox">
            <span>your name</span>
            <input type="text" placeholder="enter your name" name="name" required>
         </div>
         <div class="inputBox">
            <span>your number</span>
            <input type="number" placeholder="enter your number" name="number" required>
         </div>
         <div class="inputBox">
            <span>your email</span>
            <input type="email" placeholder="enter your email" name="email" required>
         </div>
         <div class="inputBox">
            <span>payment method</span>
            <select name="method">
               
               <option value="credit cart">credit cart</option>
               
            </select>
         </div>
         <div class="inputBox">
            <span>address line 1</span>
            <input type="text" placeholder="e.g. flat no." name="flat" required>
         </div>
         <div class="inputBox">
            <span>NID</span>
            <input type="text" placeholder="e.g. NID" name="street" required>
         </div>
         <div class="inputBox">
            <span>city</span>
            <input type="text" placeholder="e.g. Dhaka" name="city" required>
         </div>
         
         <div class="inputBox">
            <span>pin code</span>
            <input type="text" placeholder="e.g. " name="pin_code" required>
         </div>
      </div>
      <input type="submit" value="Enroll Now" name="order_btn" class="btn">
   </form>

</section>

</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>