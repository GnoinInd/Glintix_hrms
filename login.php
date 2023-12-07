<?php
session_start();
//if($_SESSION['email']);
?>

<!DOCTYPE html>

 <?php
include 'connection.php';
// print_r($_POST);die;
// extract($_POST);
//print $email;die;
if(isset($_POST['login_btn'])){
  $email=$_POST['email'];
  $pass=$_POST['password'];
 
  $pass= md5($pass );
  



$select  = "SELECT * FROM registration WHERE email = '$email' && pass='$pass'";



if($pass){
$query      = mysqli_query($con,$select);
$row  = mysqli_num_rows($query);
$fetch= mysqli_fetch_assoc($query);
 

}

if($row==1){
  $username= $fetch['username'];
  $email= $fetch['email'];
 $_SESSION['username']=$username;
 $_SESSION['email']=$email;

 header('location:home.php');

}
else
{
  echo "invalid email/password";
}


}
?>


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
      
    </style>
  </head>
  <body>
    <div class="container-fluid bg-success" style="height:100vh;">
      <div class="row d-flex justify-content-center">
        <div class="col-md-3 align-items-center  bg-white m-5 p-5">
        
            <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
             <p class="text-danger text-center fw-bold"><?php if(isset($error)) {echo  $error ;} ?></p>
             <div class="container">
             <div class="input-group mb-3 ">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-user text-danger" aria-hidden="true"></i></span>
             <input type="text" placeholder="Email" class="form-control"  name="email" value="<?php if(isset($error)){echo $email;}?>" />
             </div>   
             <br>
             <div class="input-group mb-3 ">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-key text-danger" aria-hidden="true"></i></span>
              <input type="text" placeholder="Password" class="form-control" name="password" value="<?php if(isset($error)){echo $pass;}?>"/>
             </div>   
              <br>
            <input type="submit" value="Login" name="login_btn" class="submit_btn" />
        </div>
    </form>
           
          </div>
      </div>
    </div>
  </body>
</html>
