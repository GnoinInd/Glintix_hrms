<?php
session_start();
?>
<!DOCTYPE html>
<?php
 include 'connection.php';
// //  print_r($_POST);
//  extract($_POST);
// print $email;die;
 if(isset($_POST['submit'])){

  $username   = mysqli_real_escape_string($con, $_POST['username']);
  $email        = mysqli_real_escape_string($con, $_POST['email']);
  $mobile       = mysqli_real_escape_string($con, $_POST['mobile']);
  $password     = mysqli_real_escape_string($con, $_POST['password']);
  $cpassword    = mysqli_real_escape_string($con, $_POST['cpassword']);

  $pass         = md5($password );
  $cpass        = md5($cpassword  );

  $emailquery   = "SELECT * FROM  registration WHERE email ='$email'";
  $result       = mysqli_query($con, $emailquery);
  $emailcount   = mysqli_num_rows($result);
  
  if (empty($username)) {
        $error = "username Must be Required";
  }
  elseif(strlen($username)<3){
        $error= "username Must be 3 Character";
  }
  elseif(empty($email)){
        $error = "Email Must be Required";
  }
  elseif(empty($mobile)){
        $error = "Mobile Number Required" ;
  }
  elseif(strlen($mobile)<10){
        $error = "Input  10 Digit Mobile Number";
  }
  elseif(empty($password)){
        $error = "Password Can not be Blank";
  }
  elseif(strlen($password)<6){
        $error = "Password must be 6 Character";
  }
  elseif($password != $cpassword){
        $error =" Password Does not match";
  }
  elseif($emailcount>0){
        $error = "Email Already Exixts";
  }
  else{
    $data = "INSERT INTO   registration (username, email, mobile,  pass, cpassword)
    VALUES ('$username','$email', '$mobile',  '$pass', '$cpass')";

    $query = mysqli_query($con, $data);

    if($query){
          header("location:index.php");

          /* $welcome = "Hello $firstname,  Your account created successfully";
           function alert($welcome){
            echo "<script>alert('$welcome');</script>" ;
           };
           echo alert($welcome) ;*/
    }
    else{
      ?>
        <script>alert("Account Not Created Successfully");</script>

      <?php
           
    }
         }
    
  }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="mystyle.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
<div class="container-fluid bg-info" style="height:100vh;">
     <div class="row d-flex justify-content-center " >
      <div class="col-md-3 align-items-center  bg-white m-5 p-5">
             <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                        <p class="text-danger text-center fw-bold"><?php if(isset($error)) {echo  $error ;} ?></p>

                  <!-- username -->
                  <div class="input-group mb-3 ">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="username" class="form-control" placeholder="Enter your username"  name="username" value="<?php if(isset($error)){echo $username;}?>" />
                 </div>
        
        
                       <!-- email -->
                  <div class="input-group mb-3">
                 <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                 <input type="email" placeholder="email" class="form-control" name="email" value="<?php if(isset($error)){echo $email;}?>" />
                 </div>
       
        
                  <!-- mobile -->
                   <div class="input-group mb-3">
                         <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone text-danger" aria-hidden="true"></i></span>
                        <input type="number" class="form-control" placeholder="mobile"  name="mobile" value="<?php if(isset($error)){echo $mobile;}?>" />
                  </div>
            
        
                     <!-- password -->
        
                  <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1"><i class="fa fa-key text-danger" aria-hidden="true"></i></span>
                        <input type="Password" class="form-control" placeholder="password"  name="password" value="<?php if(isset($error)){echo $password;}?>"/>
                  </div>     
        
       
       
        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock " aria-hidden="true"></i></span>
        <input type="cpassword" class="form-control" placeholder="Re-enter your password"  name="cpassword" value="<?php if(isset($error)){echo $cpassword;}?>"/>
        </div>
        
        
        
        <input type="submit" value="sign up" name="submit" class="submit_btn"/>
      
      </form>
      </div>
     </div>
</div>
</body>
</html>