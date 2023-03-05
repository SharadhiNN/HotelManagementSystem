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
        <div style="width: 45%;display: inline-grid;margin: 1rem;margin-left: 25rem;"><label class="form-label" style="width: 100%;">Enter Customer Phone Number</label><input class="form-control" type="text" name="cust" style="width: 100%;display: block;"></div>
    
    <div class="input_field">
                <input type = "submit" value="Generate" class="btn" name="submit">  
    </div>
    </form>
  
    <a href="https://doc-0o-14-apps-viewer.googleusercontent.com/viewer/secure/pdf/75krt4s5lp0orcp7r23s1092vpfphr9v/stv0rcp2756me5ej45fm4lj0dmd267ql/1673517300000/drive/03452567398043235163/ACFrOgBHbZhATk5kFbRsQT0UXHdhDN4-xHn7-WzXcg8NWMIvZjZ5n6tp5XK6ihTpuOsqrrxSUfGiHixtT26uSLywnXY1i3m2vaMWgHqWFQfiCbOxCzBofajkI7xmrdLA1h5erLbadWPh8CCvQHE5?print=true" download>
    <img class ="xlImg" src="unnamed.png" width="100" alt="Booking Details">
    </a> 

<?php
if ($_POST['submit']) {
    //  echo "here";
    $cust = $_POST['cust'];
    $query = "SELECT * FROM bill WHERE CPhNo = $cust";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    $myfile = fopen("billamt.csv", "w") or die("Unable to open file!");

    $li = array(
        [' ','', 'Hotel']
    );
    foreach ($li as $fields) {
        fputcsv($myfile, $fields);
    }
    $lis = array(
        [' ','','Diagon Alley, Cornelia Street, Rio de Janeiro']
    );
    foreach ($lis as $fields) {
        fputcsv($myfile, $fields);
    }
    $lists = array(
        ['  ',' ', 'India']
    );
    foreach ($lists as $fields) {
        fputcsv($myfile, $fields);
    }
    $listss = array(
        ['  ', ' ', ' ']
    );
    foreach ($listss as $fields) {
        fputcsv($myfile, $fields);
    }
    foreach ($listss as $fields) {
        fputcsv($myfile, $fields);
    }


    $list = array(
        ['Customer Name', 'Phone Number', 'Bill Amount']
    );
    foreach ($list as $fields) {
        fputcsv($myfile, $fields);
    }


        // $myfile = fopen("billamt.pdf", "w") or die("Unable to open file!");
        // fwrite($myfile, "Hotel");
        // fwrite($myfile, "Diagon Alley, Cornelia Street, Rio de Janeiro, India");



        if ($result = mysqli_fetch_assoc($data)) {
            echo "<table class='Table1'>
            <tr class='border'>
                <th class='border'>Customer Name</th>
                <th class='border'>Customer Phone Number</th>
                <th class='border'>Bill Amount</th>
            </tr>
            <tr>
                <td class='border'>" . $result['CName'] . "</td>
                <td class='border'>" . $result['CPhNo'] . "</td>
                <td class='border'>" . $result['BillAmt'] . "</td>
            </tr>";
            echo "<br>";
            fputcsv($myfile, $result);
        } else {
            echo "Invalid Phone Number";
        }
    }
// $a = 1;
// while ($a <= 15){
//     $listss = array(
//         ['  ', ' ', ' ']
//     );
//     foreach ($listss as $fields) {
//         fputcsv($myfile, $fields);
//     }
// }
$listss = array(
    ['  ', ' ', ' ']
);
foreach ($listss as $fields) {
    fputcsv($myfile, $fields);
}
foreach ($listss as $fields) {
    fputcsv($myfile, $fields);
}
foreach ($listss as $fields) {
    fputcsv($myfile, $fields);
}
foreach ($listss as $fields) {
    fputcsv($myfile, $fields);
}
foreach ($listss as $fields) {
    fputcsv($myfile, $fields);
}
$lass = array(
    [' Thank You!Visit Again!']
);
foreach ($lass as $fields) {
    fputcsv($myfile, $fields);
}
$lap = array(
    [' www.hotel.com','']
);
foreach ($lap as $fields) {
    fputcsv($myfile, $fields);
}
?>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html> 
