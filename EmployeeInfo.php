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
        <div style="width: 45%;display: inline-grid;margin: 1rem;margin-left: 25rem;"><label class="form-label" style="width: 100%;">Enter Phone Number</label><input class="form-control" type="text" name="cust" style="width: 100%;display: block;"></div>
        <div class="input_field">
                <input type = "submit" value="Find" class="btn" name="submit">  
        </div>
    </form>

    <?php
if ($_POST['submit']) {
    //  echo "here";
    $cust = $_POST['cust'];
    $query = "SELECT * FROM employee WHERE EmpPhNo=$cust";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    if($result=mysqli_fetch_assoc($data))
    {
        echo "<table class='Table1'>
            <tr class='border'>
            <th class='border'>Number</th>
                <th class='border'>Name</th>
                <th class='border'>Type</th>
                <th class='border'>Address</th>
                <th class='border'>Phone Number</th>
                <th class='border'>Salary</th>
                <th class='border'>Department</th>
            </tr>
            <tr>
                <td class='border'>" . $result['EmpNo'] . "</td>
                <td class='border'>" . $result['EmpName'] . "</td>
                <td class='border'>" . $result['EmpType'] . "</td>
                <td class='border'>" . $result['EmpAddress'] . "</td>
                <td class='border'>" . $result['EmpPhNo'] . "</td>
                <td class='border'>" . $result['Salary'] . "</td>
                <td class='border'>" . $result['Department'] . "</td>
            </tr>";
        echo "<br>";
    }
    else{
        echo "Invalid Employee Number";
    }
}
?>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>