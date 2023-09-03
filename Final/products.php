<?php

include 'config.php';


$sql = "SELECT * FROM `products` ORDER BY id DESC";
$result = mysqli_query($conn, $sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style122.css">
</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php include 'header.php'; ?>

<div class="container">

<section class="products">

   <h1 class="heading">latest Courses</h1>

   <div class="box-container">

      <?php
      
      
         while($fetch_product = mysqli_fetch_assoc($result)){
      ?>

      <form action="products.php" method="post">
         <div class="box">
            <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" style="width: 31rem" alt="">
            <a href="episodeList.php?id=<?php echo $fetch_product['id'] ?>"> <h3><?php echo $fetch_product['name']; ?></h3> </a>
            <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <a href="episodeUpload.php?id=<?php echo $fetch_product['id'] ?>" class="text-decoration-none text-light btn btn-dark btn-sm border-success rounded">Add Materials</a>
            <!-- <input type="submit" class="btn" value="Add Materials" name="add_materials"> -->
         </div>
      </form>

      <?php
         };
      
      ?>

   </div>

</section>

</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>