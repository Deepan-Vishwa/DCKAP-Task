<?php
include "./config.php";

extract($_POST);


$validate_email_query = "SELECT email FROM users WHERE email = '$email'";

$result = mysqli_query($conn,$validate_email_query);

if(mysqli_num_rows($result) ===0){
    
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
           
            $insert = $conn->query("INSERT INTO `users`(`name`, `username`, `email`, `passowrd`, `mobile`, `image`, `dob`, `address`, `city`, `state`, `country`) 
            VALUES ('$name','$Username','$email','$password','$mobile','$imgContent','$dob','$address','$city','$state','$country')"); 
            if($insert){ 
                
                $statusMsg = '<div class="alert alert-success" role="alert">Registration Successful</div>'; 
                
            }else{ 
                $statusMsg = '<div class="alert alert-danger" role="alert">Registration Unsuccessful</div>'; 
            }  
        }
        else{
            $statusMsg = '<div class="alert alert-danger" role="alert">Email ID Already Exists.</div>'; 
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    
    <title>DCKAP TASK</title>
</head>
<body style="background-color: rgb(233, 242, 248);">
<nav class="navbar navbar-dark" style="background-color: #16659e;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="./assets/dckap.png" alt="" width="30" height="24" class="d-inline-block align-top">
        DCKAP
      </a>
    </div>
  </nav>

  <div class="container mb-2 w-50 mt-5 text-center">
     
  
  <?php echo $statusMsg; ?>

<a type="button" class="btn btn-danger w-25" href="index.php">Go to Home</a>
  </div>

  
</body>

</html>