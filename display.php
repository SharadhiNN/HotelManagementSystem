<?php 
include("connect.php");
$query = "SELECT * FROM customer";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


// echo $total;

if($total != 0){
    while($result=mysqli_fetch_assoc($data)){
        echo $result['CName']." ".$result['CustID']." ".$result['CPhNo']." ".$result['BookingNo']." ".$result['CAge']." ".$result['CRoomNo']." ".$result['NoOfNights']." ".$result['CheckIN']." ".$result['CheckOUT']." ".$result['emailid'];
        echo "<br>";
    }
}
?>