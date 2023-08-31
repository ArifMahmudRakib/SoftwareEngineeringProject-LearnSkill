<header class="header">

   <div class="flex">

      <a href="home.php" class="logo">Learn skill</a>

      <nav class="navbar">
         <a href="admin.php">add Course</a>
         <a href="products.php">view Course</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">Enroll <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>