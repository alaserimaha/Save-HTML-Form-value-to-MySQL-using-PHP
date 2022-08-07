<?php  
   
$number = $_GET['number'];   
$conn = mysqli_connect("localhost","root", "", "db");
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$sqlquery = "INSERT INTO tabel  VALUES($number)";
if(mysqli_query($conn, $sqlquery)){
    echo "<br><br><h3>The number $number has been stored Successfully</h3>";

} else{
    echo "ERROR: Hush! Sorry $sqlquery. "
        . mysqli_error($conn);
}
 mysqli_close($conn);  
?> 
