<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        .pop:hover {
            border-top-color: #006400 !important;
            transform: scale(1.10);
            transition: all 0.3s;
        }
    </style>
</head>

<body>
    <?php require('inc/navbar.php'); ?>
    <div class="banner">
        <img src="images/background.jpg" class="img-fluid" style="height: 100%; width: 100%;">
    </div>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2 text-wrap">
                        <img src="images/beauty.png">
                        <h5 class="m-0 ms-3 px-2"><a href="bridalmkp.php">BRIDAL MAKEUP</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2 text-wrap">
                        <img src="images/skincare.png">
                        <h5 class="m-0 ms-3 px-2"><a href="skincare.php">SKINCARE</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2 text-wrap">
                        <img src="images/love.png">
                        <h5 class="m-0 ms-3 px-2"><a href="destinationwed.php">DESTINATION WEDDINGS</a></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2 text-wrap">
                        <img src="images/workshop.png">
                        <h5 class="m-0 ms-3 px-2"><a href="workshop.php">WORKSHOPS</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2 text-wrap">
                        <img src="images/course.png">
                        <h5 class="m-0 ms-3 px-2"><a href="courses.php">COURSES</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2 text-wrap">
                        <img src="images/portofolio.png">
                        <h5 class="m-0 ms-3 px-2"><a href="portofolio.php">PORTOFOLIO</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <?php require('inc/footer1.php'); ?>
</body>

</html>