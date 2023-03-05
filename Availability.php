<?php 
include("connect.php");
$query = "SELECT * FROM customer";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


// echo $total;

if($total != 0){
?>
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
    <header class="masthead" style="background-image:url('assets/img/header-bg.jpg');"></header>
    <br><br><br><br><br><br>
    <table class="Table1">
        <tr class="border">
            <th class="border">Customer Name</th>
            <th class="border">Customer ID</th>
            <th class="border">Customer Phone Number</th>
            <th class="border">Booking Number</th>
            <th class="border">Customer Age</th>
            <th class="border">Room Number</th>
            <th class="border">Number of Nights</th>
            <th class="border">Check In</th>
            <th class="border">Check Out</th>
            <th class="border">email ID</th>
        </tr>

    <?php

    $myfile = fopen("testfile.csv", "w") or die("Unable to open file!");

    $list = array(
        ['Name', 'ID', 'Phone Number', 'Booking Number', 'Age', 'Room Number','Bill Amount', 'No of Nights', 'Check In', 'Check Out', 'email ID']);
        foreach ($list as $fields) {
            fputcsv($myfile, $fields);
        }
    // fwrite($myfile, "Customer Name Customer ID  Customer Phone Number  Booking Number  Customer Age  Room Number  Number of Nights  Check In  Check Out  email ID");

        while($result=mysqli_fetch_assoc($data)){
        echo "<tr>
            <td class='border'>".$result['CName']."</td>
            <td class='border'>".$result['CustID']."</td>
            <td class='border'>".$result['CPhNo']."</td>
            <td class='border'>".$result['BookingNo']."</td>
            <td class='border'>".$result['CAge']."</td>
            <td class='border'>".$result['CRoomNo']."</td>
            <td class='border'>".$result['NoOfNights']."</td>
            <td class='border'>".$result['CheckIN']."</td>
            <td class='border'>".$result['CheckOUT']."</td>
            <td class='border'>".$result['emailid']."</td>
        </tr>";  
            fputcsv($myfile, $result);
        }          
        
    }
?>
    </table>
    <br><br>
    <a href="testfile.csv" download>
    <img class ="xlImg" src="Microsoft_Excel-Logo.wine.png" width="100" alt="Booking Details">
    </a>
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
