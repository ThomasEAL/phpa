<?php
$userName=$_GET['brugernavn'];
$pw=$_GET['kodeord'];


if (empty($userName)){
    echo "hov hov ... du glemte at udfylde dit brugernavn </br>";
}else{
    echo "Du har angivet dit brugernavn til at være : $userName </br>";
    
}

if (empty($pw)){
    echo "hov hov ... du glemte at udfylde dit password </br>";
}else{
    echo "Du har angivet dit password til at være : $pw </br>";
    
}


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "thomas_dk";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO venner (navn)
VALUES ('$userName')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>




?>