<?php
include 'config.php';
$courseId = $_GET['id'];
$query = "SELECT * FROM `products` WHERE id = '$courseId'";
$result1 = mysqli_query($conn, $query);
$row1 = mysqli_fetch_assoc($result1);

$sql = "SELECT * FROM episode WHERE course_id = '$courseId' ORDER BY e_id ASC";
$result = mysqli_query($conn, $sql);

if (isset($_POST['delete'])) {
    include 'config.php';
    $del_id = $_POST['idToDelete'];
    $sql2 = "DELETE FROM episode WHERE e_id = $del_id";
    if (mysqli_query($conn, $sql2)) {
      header('Location: adminHome.php');
    } else {
      echo "Error!" . mysqli_error($conn);
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Episode List</title>
    <link rel="stylesheet" href="css/episodeList.css">
 
</head>
<body>

     <section class="top">
        <a href="adminHome.php" class="btn-custom btn-warning" tabindex="-1" role="button" aria-disabled="true">Admin Home</a>
     </section>
<div class="container mt-5">
    <p class="custom-text fs-2">Episode List of <?php echo $row1['name'] ?></p>
    <table class="custom-table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Episode Name</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tbody>
            <tr>
                <th scope="row"><?php echo $row['e_id'] ?></th>
                <td><a class="custom-link" href="adminView.php?id=<?php echo $row['e_id'] ?>"><?php echo $row['e_name'] ?></a></td>
                <td>
                    <form action="episodeList.php" method="POST"> 
                        <input type="hidden" name="idToDelete" value="<?php echo $row['e_id'] ?>">
                        <button type="submit" name="delete" class="custom-btn-delete">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
    <section class="new">
        <form action="episodeList.php" method="POST">
            <a href="episodeUpload.php?id=<?php echo $row1['id'] ?>" class="custom-link btn-success">Add episode</a>
        </form>
    </section>
</div>

    
</body>
</html>