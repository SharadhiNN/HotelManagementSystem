<?php include("connect.php");?>

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
    <form action ="#" method="POST" style="margin-top: 8rem;">
   
        <div style="width: 45%;display: inline-grid;margin: 1rem;"><label class="form-label" style="width: 100%;">Name</label><input class="form-control" type="text" name="name" style="width: 100%;display: block;"></div>
        <div style="width: 45%;display: inline-grid;margin: 1rem;margin-left: 2rem;"><label class="form-label" style="width: 100%;">Age</label><input class="form-control" type="text" name = "age" style="width: 100%;display: block;"></div>
        <div style="width: 45%;display: inline-grid;margin: 1rem;"><label class="form-label" style="width: 100%;">Phone Number</label><input class="form-control" type="tel" name="PhNo" style="display: block;width: 100%;"></div>
        <div style="width: 45%;display: inline-grid;margin: 1rem;margin-left: 2rem;"><label class="form-label" style="width: 100%;">email ID</label><input class="form-control" type="email" name="email" style="width: 100%;"></div>
        <!-- <div style="width: 45%;display: block;margin: 1rem;"><label class="form-label" style="width: 100%;">Room Type</label>
            <div class="dropdown" style="width: 100%;"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="color: black;background: transparent;border-style: none;">Dropdown </button>
                <div class="dropdown-menu"><a class="dropdown-item" href="#">Standard Room King Size Bed</a><a class="dropdown-item" href="#">Standard Room Queen Sized Bed</a><a class="dropdown-item" href="#">Deluxe Room</a><a class="dropdown-item" href="#">Premium Room</a><a class="dropdown-item" href="#">Suite</a></div>
            </div>
        </div> -->
        
        <div style="width: 45%;display: block;margin: 1rem;" class="form">
                <div class="input_field" name="RType">
                    <label>Room Type</label>
                    <select >
                        <option>Select</option>
                        <option>Standard Room King Size Bed</option>
                        <option>Standard Room Queen Sized Bed</option>
                        <option>Premium Room</option>
                        <option>Suite</option>
                    </select>
                </div>
            </div>
        <div style="width: 25%;display: inline-grid;position: relative;margin: 1rem;"><label class="form-label" style="width: 100%;">Check-in</label><input class="form-control" type="date" name="checkIn" style="width: 100%;"></div>
        <div style="width: 25%;display: inline-grid;position: relative;margin: 1rem;margin-left: 21.5rem;"><label class="form-label" style="display: block;width: 100%;">Check-out</label><input class="form-control" type="date" name="checkOut" style="width: 100%;display: block;"></div>
        <div style="width: 45%;margin-top: 1rem;margin-left: 1rem;"><label class="form-label" style="width: 100%;">Any additional information you would like to share</label><input class="form-control" type="text" style="width: 100%;display: block;"></div>
    <!-- </form><button class="btn btn-primary" type="button" style="margin-left: 42.5rem;margin-top: 2rem;">Confirm</button> -->
    <div class="input_field">
                <input type = "submit" value="Confirm" class="btn" name="submit">
        </div>
        </form>
        <div style="margin-bottom:2rem">
            <span>Change of plans? Don't worry, cancel plans in a minute with no extra charge!</span>
            <a href="delete.php">Cancel Booking</a>
        </div>
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

<?php
    if($_POST['submit']){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $Phno = $_POST['PhNo'];
        $email = $_POST['email'];
        $rtype = $_POST['RType'];
        $checkIn = $_POST['checkIn'];
        $checkOut = $_POST['checkOut'];
        $cid = "21CID1111";
         $bid = "21BNO3659";
        $rno = 001;
    $bill = 0;
    $nights = 4;
		$stmt ="insert into customer values ('$name', '$cid','$Phno','$bid','$age','$rno','$bill','$nights','$checkIn', ' $checkOut', '$email')";
		$data =mysqli_query($conn,$stmt);
        if($data){
			echo "Registration successfull";
		}
		else{
		echo "fail";
		}

    }
?>