<?php 
include("connect.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Hotel</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aguafina+Script&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amethysta&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arizonia&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Average&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Benne&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Brygada+1918&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav" style="background: url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;);">
        <div class="container"><a class="navbar-brand" href="index.php" style="font-family: Alegreya, serif;color: black;">HOTEL</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link" href="Guest.html" style="color: black;">Services</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="Guest.html" style="color: black;">About</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="Guest.html" style="color: black;">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="bg-light" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="margin-top: 0;">
                    <h2 class="text-uppercase section-heading">Welcome to the Hotel Family!</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-6 portfolio-item"><a class="portfolio-link" href="#portfolioModal1" data-bs-toggle="modal"></a>
                    <div class="portfolio-caption">
                        <h4><a href="Employee.php" style="color: black;">New Employee</a></h4>
                        <p class="text-muted">Enter the details</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-5 portfolio-item"><a class="portfolio-link" href="#portfolioModal4" data-bs-toggle="modal"></a>
                    <div class="portfolio-caption">
                        <h4><a href="EmployeeInfo.php" style="color: black;">Employee Information</a></h4>
                        <p class="text-muted">Get Information about Employees</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-6 portfolio-item"><a class="portfolio-link" href="#portfolioModal3" data-bs-toggle="modal"></a>
                    <div class="portfolio-caption">
                        <h4><a href="Availability.php" name = "download" style="color: black;">Booking Details</a></h4>
                        <p class="text-muted">Check availability of rooms</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-5 portfolio-item"><a class="portfolio-link" href="#portfolioModal5" data-bs-toggle="modal"></a>
                    <div class="portfolio-caption">
                        <h4><a href="BillAmt.php" style="color: black;">Bill Amount</a></h4>
                        <p class="text-muted">Generate the Bills for customers</p>
                    </div>
                </div>
                <div class="col portfolio-item"><a class="portfolio-link" href="#portfolioModal5" data-bs-toggle="modal"></a>
                    <div class="portfolio-caption">
                        <h4><a href="Dependants.php" style="color: black;">Dependents</a></h4>
                        <p class="text-muted">Enter the details</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="copyright">Copyright&nbsp;© Brand 2023</span></div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>


