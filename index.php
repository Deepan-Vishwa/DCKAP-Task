
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

  <div class="container mb-2 w-50 mt-4">
      <h2>Registration</h2>
    <form class="row g-3" action="status.php" method="POST" enctype="multipart/form-data">
        <div class="col-md-6">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" id="name" required>
         
        </div>
        <div class="col-md-6">
          <label for="Username" class="form-label">Username</label>
          <input type="text" class="form-control" name="Username" id="Username" required>
          
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label">Email ID</label>
          <input type="email" class="form-control" name="email" id="email" required>
          
        </div>
        <div class="col-md-6">
          <label for="mobile" class="form-label">Mobile Number</label>
          <input type="tel" class="form-control" name="mobile" id="mobile" pattern="[789][0-9]{9}" required>
          
        </div>
        <div class="col-md-6">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
            
          </div>
        <div class="col-md-6">
          <label for="confirm_password" class="form-label">Confirm Passowrd</label>
          <input type="password" class="form-control" name="confirm_password" id="confirm_password" required>
          
        </div>
        <div class="col-md-4">
            <label for="dob" class="form-label">DOB</label>
            <input type="date" class="form-control" name="dob" id="dob" required>
            
          </div>
          <div class="col-md-4">
            <label for="state" class="form-label">State</label>
            <input type="text" class="form-control" name="state" id="state" required>
            
          </div>
          <div class="col-md-4">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" name="city" id="city" required>
            
          </div>
          <div class="col-md-4">
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control" name="country" id="country" required>
           
          </div>
          <div class="col-md-8">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" name="address" id="address" required>
            
          </div>
        
          <div class="col-md-12">
            <label for="image" class="form-label">Profile Image</label>
            <input class="form-control" type="file" name="image" id="image" accept="image/*" required>
            
          </div>
        <div class="col-12 text-center">
          <button type="submit" id="register" class="btn w-25 btn-primary">Register</button>
        </div>
      </form>
  </div>

  <script src="./js/insert-data.js"></script>
</body>

</html>