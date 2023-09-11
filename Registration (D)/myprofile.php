<?php

session_start();


// Check if the user is logged in
if (!isset($_SESSION['phone_num'])) {

  // User is not logged in, redirect to the login page
  header('Location: index.php');
  exit();
}

// User is logged in, display the success message
$phone_num = $_SESSION['phone_num'];


?>
<?php
if (!isset($_SESSION['user_id'])) {

  // User is not logged in, redirect to the login page
  header('Location: index.php');
  exit();
}


?>



<?php
if (!isset($_SESSION['username'])) {

  // User is not logged in, redirect to the login page
  header('Location: index.php');
  exit();
}


?>
<?php
if (!isset($_SESSION['email'])) {

  // User is not logged in, redirect to the login page
  header('Location: index.php');
  exit();
}


?>





<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>

  <!-- Bootstrap CSS link -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="myprofile.css">
  <style>
    #noti_number {
      color: white;
    }

    h2 {
      text-transform: capitalize;
    }

    h3 {
      text-transform: capitalize;
    }

    h4 {
      text-transform: capitalize;
    }

    h4 {
      text-transform: capitalize;
    }

    .text-primary {
      text-transform: capitalize;
    }

    .con {
      background-image: url('https://i.postimg.cc/Hssc3f4D/pexels-rostislav-uzunov-5011647.jpg');
      height: 100vh;
      width: 100%;

    }

    avbar {
      background-color: transparent;
    }

    .navbar {
      background-color: #0d838d;
      margin: 0;
      padding: 0;
    }

    body {
      margin-top: 20px;
      background: #eee;
    }

    a {
      color: #f96332;
    }

    .m-t-5 {
      margin-top: 5px;
    }

    .card {
      background: #fff;
      margin-bottom: 30px;
      transition: .5s;
      border: 0;
      border-radius: .1875rem;
      display: inline-block;
      position: relative;
      width: 100%;
      box-shadow: none;
    }

    .card .body {
      font-size: 14px;
      color: #424242;
      padding: 20px;
      font-weight: 400;

    }

    .profile-page .profile-header {
      position: relative
    }

    .profile-page .profile-header .profile-image img {
      border-radius: 50%;
      width: 140px;
      border: 3px solid #fff;
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23)
    }

    .profile-page .profile-header .social-icon a {
      margin: 0 5px
    }

    .profile-page .profile-sub-header {
      min-height: 40px;
      width: 100%
    }

    .profile-page .profile-sub-header ul.box-list {
      display: inline-table;
      table-layout: fixed;
      width: 100%;
      background: #eee
    }

    .profile-page .profile-sub-header ul.box-list li {
      border-right: 1px solid #e0e0e0;
      display: table-cell;
      list-style: none
    }

    .profile-page .profile-sub-header ul.box-list li:last-child {
      border-right: none
    }

    .profile-page .profile-sub-header ul.box-list li a {
      display: block;
      padding: 15px 0;
      color: #424242
    }
  </style>
</head>

<body>

  <!-- header -->
  <nav class="navbar navbar-expand-lg  navbar-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php">
        <h2 class="text-white">
          <?php echo $_SESSION['username']; ?>
        </h2>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <!-- help close-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span>
                Help</span>

            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Contact details</a></li>
              <li><a class="dropdown-item" href="#">Customer care</a></li>



            </ul>

            <!-- help open-->


            <!-- support open-->


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span>
                Support</span>

            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Technical support</a></li>
              <li><a class="dropdown-item" href="#">User guide</a></li>
            </ul>




            <!-- support close-->




            <!-- user open-->

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span> <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" class="rounded-circle"
                  height="30" alt="" loading="lazy" /><? echo $_SESSION['username']; ?></span>

            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">My profile</a></li>
              <li><a class="dropdown-item" href="product.php">My product</a></li>
              <li><a class="dropdown-item" href="#">My order</a></li>

              <li><a class="dropdown-item" href="delete.php">Logout</a></li>
            </ul>
          </li>

        </ul>
        <!-- user close-->

        <a href="notificationlist.php"><i class="fa-solid fa-bell fa-lg  " aria-hidden="true" id="noti_number"></i> </a>

        <!-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
      </div>
    </div>
  </nav>

  <!-- header close -->






  <!-- <div class="container bootdey flex-grow-1 container-p-y">

    <div class="media align-items-center py-3 mb-3">
      <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="d-block ui-w-100 rounded-circle">
      <div class="media-body ml-4 ">
        <h5 class="font-weight-bold mb-0">
          <?php echo $_SESSION['username']; ?><br><span class="text-muted font-weight-normal">
            <p>
              <?php echo $_SESSION['email']; ?>
            </p>
          </span>
          </h3>
          <div class="text-muted mb-2">ID: 3425433</div>
          <a href="javascript:void(0)" class="btn btn-primary btn-sm">Edit</a>&nbsp;
          <a href="javascript:void(0)" class="btn btn-default btn-sm">Profile</a>&nbsp;
          <a href="javascript:void(0)" class="btn btn-default btn-sm icon-btn"><i class="fa fa-mail"></i></a>
      </div>
    </div> -->
  <div class="container profile-page">
    <div class="row">
      <div class="col-xl-6 col-lg-7 col-md-12">
        <div class="card profile-header">
          <div class="body">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <div class="profile-image float-md-right"> <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                    alt=""> </div>
              </div>
              <div class="col-lg-8 col-md-8 col-12">
                <h4 class="m-t-0 m-b-0"><strong>
                    <?php echo $_SESSION['username']; ?>
                  </strong></h4>
                <span class="job_post">Ui UX Designer</span>
                <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                <div>
                  <button class="btn btn-primary btn-round">Follow</button>
                  <button class="btn btn-primary btn-round btn-simple">Message</button>
                </div>
                <p class="social-icon m-t-5 m-b-0">
                  <a title="Twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                  <a title="Facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                  <a title="Google-plus" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                  <a title="Behance" href="javascript:void(0);"><i class="fa fa-behance"></i></a>
                  <a title="Instagram" href="javascript:void(0);"><i class="fa fa-instagram "></i></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-4">
        <div class="card-body">
          <table class="table user-view-table m-0">
            <tbody>
              <tr>
                <td>
                  <h5>Registered:</h5>
                </td>
                <td>
                  <h5>
                    <?php echo $_SESSION['account_created'] ?>
                  </h5>
                </td>
              </tr>
              <tr>
                <td>Latest activity:</td>
                <td>
                  <?php echo $_SESSION['last_login'] ?>
                </td>
              </tr>
              <tr>
                <td>Verified:</td>
                <td><span class="fa fa-check text-primary"></span>&nbsp; Yes</td>
              </tr>
              <tr>
                <td>Role:</td>
                <td>User</td>
              </tr>
              <!-- <tr>
              <td>Status:</td>
              <td><span class="badge badge-outline-success">Active</span></td>
            </tr> -->
            </tbody>
          </table>
        </div>
        <hr class="border-light ">
        <div class="table-responsive">
          <table class="table card-table ">
            <tbody>
              <!-- <tr>
              <th>Module Permission</th>
              <th>Read</th>
              <th>Write</th>
              <th>Create</th>
              <th>Delete</th>
            </tr>
            <tr>
              <td>Users</td>
              <td><span class="fa fa-check text-primary"></span></td>
              <td><span class="fa fa-times text-light"></span></td>
              <td><span class="fa fa-times text-light"></span></td>
              <td><span class="fa fa-times text-light"></span></td>
            </tr>
            <tr>
              <td>Articles</td>
              <td><span class="fa fa-check text-primary"></span></td>
              <td><span class="fa fa-check text-primary"></span></td>
              <td><span class="fa fa-check text-primary"></span></td>
              <td><span class="fa fa-times text-light"></span></td>
            </tr>
            <tr>
              <td>Staff</td>
              <td><span class="fa fa-times text-light"></span></td>
              <td><span class="fa fa-times text-light"></span></td>
              <td><span class="fa fa-times text-light"></span></td>
              <td><span class="fa fa-times text-light"></span></td>
            </tr> -->
            </tbody>
          </table>
        </div>
      </div>

      <div class="card">
        <div class="row no-gutters row-bordered" style="margin: 20px;">
          <h5>user activity post </h5>
          <div class="d-flex col-md align-items-center">
            <a href="javascript:void(0)" class="card-body d-block text-body">
              <div class="text-muted small line-height-1">

                <button type="button" class="btn btn-primary" data-toggle="modal"
                  data-target=".bd-example-modal-lg">view
                  post</button>

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                  aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <table class="table ">

                        <thead>
                          <tr>
                            <th class="text-center">S.L</th>
                            <th class="text-center">USER_ID</th>
                            <th class="text-center">EMAIL</th>
                            <th class="text-center">DESCRIPTION</th>
                            <th class="text-center">DOC_IMG</th>
                            <th class="text-center">CREATED_DATE</th>
                            <th class="text-center" colspan="2">Action</th>
                          </tr>
                        </thead>

                        <?php
                        include 'connection1.php';

                        $user_id = $_SESSION['user_id'];


                        // Using prepared statement to prevent SQL injection
                        $sql = "SELECT * FROM help_data where user_id = ?";
                        $stmt = $con->prepare($sql);
                        $stmt->bind_param("s", $user_id);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        $count = 1;
                        if ($result->num_rows > 0) {
                          while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                              <td>
                                <?= $count ?>
                              </td>

                              <td>
                                <?= $row["user_id"] ?>
                              </td>
                              <td>
                                <?= $row["email"] ?>
                              </td>
                              <td>
                                <?= $row["description"] ?>
                              </td>
                              <td><img height='1000px' src='<?= $row["image"] ?>'></td>
                              <td>
                                <?= $row["created_date"] ?>
                              </td>

                              <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete">Delete</button>
                              </td>
                            </tr>
                            <?php
                            $count = $count + 1;
                          }
                        } else {
                          echo "Activity : No data found";
                        }



                        ?>
                      </table>





                    </div>
                  </div>
                </div>



              </div>
              <div class="text-click">










                <!-- 
              /*
              if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
              echo "id: " . $row["id"]. " - Notification: " . $row["description"];
              }
              } else {
              echo "0 results";
              }
              */ -->



              </div>
            </a>
          </div>

          <!-- <div class="d-flex col-md align-items-center">
          <a href="javascript:void(0)" class="card-body d-block text-body">
            <div class="text-muted small line-height-1">Followers</div>
            <div class="text-xlarge">534</div>
          </a>
        </div>
        <div class="d-flex col-md align-items-center">
          <a href="javascript:void(0)" class="card-body d-block text-body">
            <div class="text-muted small line-height-1">Following</div>
            <div class="text-xlarge">236</div>
          </a>
        </div>
      </div> -->
          <hr class="border-light m-0">
          <div class="card-body">

            <table class="table user-view-table m-0">
              <tbody>
                <tr>
                  <td>Username:</td>
                  <td>
                    <?php echo $_SESSION['user_id']; ?>
                  </td>
                </tr>
                <tr>
                  <td>Name:</td>
                  <td>
                    <?php echo $_SESSION['username']; ?>
                  </td>
                </tr>
                <tr>
                  <td>E-mail:</td>
                  <td>
                    <?php echo $_SESSION['email']; ?>
                  </td>
                </tr>
                <tr>
                  <td>Company:</td>
                  <td>
                    <h4>GNOIN</h4>
                  </td>
                </tr>
              </tbody>
            </table>

            <h6 class="mt-4 mb-3">Social links</h6>

            <table class="table user-view-table m-0">
              <tbody>
                <tr>
                  <td>Twitter:</td>
                  <td><a href="javascript:void(0)">https://twitter.com/user</a></td>
                </tr>
                <tr>
                  <td>Facebook:</td>
                  <td><a href="javascript:void(0)">https://www.facebook.com/user</a></td>
                </tr>
                <tr>
                  <td>Instagram:</td>
                  <td><a href="javascript:void(0)">https://www.instagram.com/user</a></td>
                </tr>
              </tbody>
            </table>

            <h6 class="mt-4 mb-3">Personal info</h6>

            <table class="table user-view-table m-0">
              <tbody>
                <tr>
                  <td>Birthday:</td>
                  <td>May 3, 1995</td>
                </tr>
                <tr>
                  <td>Country:</td>
                  <td>Canada</td>
                </tr>
                <tr>
                  <td>Languages:</td>
                  <td>English</td>
                </tr>
              </tbody>
            </table>

            <h6 class="mt-4 mb-3">Contacts</h6>

            <table class="table user-view-table m-0">
              <tbody>
                <tr>
                  <td>Phone:</td>
                  <td>
                    <?php echo $_SESSION['phone_num']; ?>
                  </td>
                </tr>
              </tbody>
            </table>

            <h6 class="mt-4 mb-3">Interests</h6>

            <table class="table user-view-table m-0">
              <tbody>
                <tr>
                  <td>Favorite music:</td>
                  <td>
                    Rock,
                    Alternative,
                    Electro,
                    Drum &amp; Bass,
                    Dance
                  </td>
                </tr>
                <tr>
                  <td>Favorite movies:</td>
                  <td>
                    The Green Mile,
                    Pulp Fiction,
                    Back to the Future,
                    WALL·E,
                    Django Unchained,
                    The Truman Show,
                    Home Alone,
                    Seven Pounds
                  </td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>

      </div>




















      <!-- footer -->
      <footer class="bg-primary-light text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a class="btn text-white btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button"><i
                class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a class="btn text-white btn-floating m-1" style="background-color: #55acee;" href="#!" role="button"><i
                class="fab fa-twitter"></i></a>

            <!-- Google -->
            <a class="btn text-white btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button"><i
                class="fab fa-google"></i></a>

            <!-- Instagram -->
            <a class="btn text-white btn-floating m-1" style="background-color: #ac2bac;" href="#!" role="button"><i
                class="fab fa-instagram"></i></a>

            <!-- Linkedin -->
            <a class="btn text-white btn-floating m-1" style="background-color: #0082ca;" href="#!" role="button"><i
                class="fab fa-linkedin-in"></i></a>
            <!-- Github -->
            <a class="btn text-white btn-floating m-1" style="background-color: #333333;" href="#!" role="button"><i
                class="fab fa-github"></i></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2023 Copyright:
          <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
      </footer>

</body>

</html>