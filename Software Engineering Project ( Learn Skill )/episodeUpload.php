<?php
    include 'config.php';
    $showAlert = false;
    $showError = false;
    $courseID = $_GET['id'];
    $query = "SELECT * FROM `products` WHERE id = '$courseID'";
    $result1 = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result1);
    if(isset($_POST['upload'])){
        $targetDirection = "episodes/";
        $title = $_POST["title"];
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDirection . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        $description = $_POST["description"];
        $allowedTypes = array("mp4", "avi", "mov", "mkv");

        if (in_array($fileType,$allowedTypes)) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                
                $sql = "INSERT INTO `episode`(`e_name`, `e_description`, `e_path`, `e_file`, `course_id`) VALUES ('$title','$description', '$targetFilePath', '$fileName', '$courseID')";
                $result = mysqli_query($conn,$sql);
                if($result) {

                    $showAlret = true;
                }

            }
            else {
                $showError = 'Something went wrong';
              }
        }
        else {
            $showError = 'Invalid file format';
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Episode Upload</title>
</head>
<body class="bg-black">
    <div class="header">
        <?php
            if ($showAlert) {
            echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Video Uploaded Successfully </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> ';
            }
            if ($showError) {
            echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> ' . $showError . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            }
        ?>
    </div>

        <a href="admin.php" class="btn btn-outline-warning" tabindex="-1" role="button" aria-disabled="true">Admin Home</a>
    
    <div class="container col-sm-12 col-md-7 col-lg-9 bg-dark text-light mt-3">
		
        <h2 class="text-center mb-5">Upload episodes of <?php echo $row ['name'] ?></h2>
        <div class="col-sm-12 col-md-7 col-lg-6 m-auto">
            <form action="episodeUpload.php?id= <?php echo $courseID ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">

                    <label for="title">Title:</label>
                     <input class="form-control form-control-sm" type="text" name="title" required><br>

                    <label for="file" class="form-label">Upload the file here:</label>
                    <input class="form-control form-control-sm" name="file" type="file" accept="video/*" required> <br> 

                    
                    <label for="description">Description:</label>
                    <input class="form-control form-control-sm" type="text" name="description" required><br>

                    
                                       


                    <input type="submit" name="upload" value="Upload" class="btn btn-secondary ml-3">
                </div>

            </form>
        </div>
    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>