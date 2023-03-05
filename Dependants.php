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
    <form style="margin-top: 8rem;" action="#" method="POST">
        <div style="width: 45%;display: inline-grid;margin: 1rem;"><label class="form-label" style="width: 100%;">Insurance Id</label><input class="form-control" type="text" name="insId" style="width: 100%;display: block;"></div>
        <div style="width: 45%;display: inline-grid;margin: 1rem;margin-left: 2rem;"><label class="form-label" style="width: 100%;">Employee Number</label><input class="text" type="text"name="empNo" style="width: 100%;display: block;"></div>
        <div style="width: 45%;display: inline-grid;margin: 1rem;"><label class="form-label" style="width: 100%;">Dependent Name&nbsp;<input class="form-control" type="text" name="depName" style="width: 100%;display: block;"></label></div>
        <div style="width: 45%;display: inline-grid;margin: 1rem;margin-left: 2rem;"><label class="form-label" style="width: 100%;">Relation&nbsp;</label><input class="text" type="text" name="relation" style="width: 100%;display: block;"></div>
        <div style="width: 45%;display: inline-grid;margin: 1rem;margin-left: 2rem;"><label class="form-label" style="width: 100%;">Age&nbsp;</label><input class="integer" type="text" name="age" style="width: 100%;display: block;"></div>
    <!-- <button class="btn btn-primary" type="button" style="margin-left: 42.5rem;margin-top: 2rem;">Confirm</button> -->
    <div class="input_field">
                <input type = "submit" value="Register" class="btn" name="submit">
        </div>
        </form>
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
     if (isset($_POST['submit'])){
        $insId = $_POST['insId'];
        $empNo = $_POST['empNo'];
        $depName = $_POST['depName'];
        $relation = $_POST['relation'];
        $age = $_POST['age'];
        
		$stmt ="insert into employee values ('$insId', '$empNo','$depName', '$relation', '$age')";
		$data =mysqli_query($conn,$stmt);
        if($data){
			echo "Registration successfull";
		}
		else{
		echo "fail";
		}

    }
?>

