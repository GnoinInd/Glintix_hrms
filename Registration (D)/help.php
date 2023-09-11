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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .con {
            background-image: url('https://i.postimg.cc/Hssc3f4D/pexels-rostislav-uzunov-5011647.jpg');
            height: 100vh;
            width: 100%;

        }
    </style>

</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary-subtle">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">
                <h4>
                    <?php echo $_SESSION['username']; ?>
                </h4>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <!-- help close-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
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
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
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
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span> <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg"
                                    class="rounded-circle" height="30" alt="" loading="lazy" /> <?php echo $_SESSION['username']; ?></span>

                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="myprofile.php">My profile</a></li>
                            <li><a class="dropdown-item" href="#">My product</a></li>
                            <li><a class="dropdown-item" href="#">My order</a></li>

                            <li><a class="dropdown-item" href="delete.php">Logout</a></li>
                        </ul>
                    </li>

                </ul>
                <!-- user close-->







                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- header close -->





    <section class="vh-100" style="background-color: #2779e2; ">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-9">




                    <div>


                        <h5 class="auto-type  showCursor: false text-light"></h5>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
                        <script>
                            var typed = new Typed('.auto-type', {
                                strings: ["<?php echo $_SESSION['username'] ?> we are always ready to help you, please fill-up your issue"],
                                typeSpeed: 150,
                                backspeed: 150, // typing speed
                                loop: true

                            });

                        </script>
                    </div>



                    <div class="card" style="border-radius: 15px; h: 800; w: 600; ">
                        <div class="card-body">
                            <h3 class="text-primary mb-4">Complaint Form</h3>
                            <form action="insertdata_help.php" method="POST" enctype="multipart/form-data">
                                <div class="row align-items-center pt-4 pb-3">

                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Full name</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input type="text" class="form-control form-control-lg"
                                            value="<?php echo $_SESSION['user_id'] ?>"
                                            placeholder="<?php echo $_SESSION['username'] ?>" name="user_id" />

                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Email address</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input type="email" class="form-control form-control-lg"
                                            placeholder="example@example.com" name="email" />

                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Description</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <textarea class="form-control" rows="3"
                                            placeholder="Message sent to the employer" name="description"></textarea>

                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Upload Doc</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input class="form-control form-control-lg" name="file" id="formFileLg"
                                            type="file" />
                                        <div class="small text-muted mt-2">Upload your relevant file.
                                            Max file
                                            size 50 MB</div>

                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="px-5 py-4">
                                    <button type="submit" class="btn btn-primary btn-lg" name="submit">Send
                                        application</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>











    <!-- footer -->
    <footer class="bg-primary-light text-center text-white mt-30px">
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