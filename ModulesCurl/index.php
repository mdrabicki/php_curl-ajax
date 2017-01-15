<?php

$serversame = "127.0.0.1";
$username = "modulesTest";
$password = "modulesTest";
$dbname = "modules";

$conn = new mysqli($serversame, $username, $password, $dbname);

if ($conn->connect_error) {
    die("nie dziala: " . $conn->connect_error);
}
$sql = "SELECT * from Students";
$result = $conn->query($sql);

$array = [] ;
while ($row = $result->fetch_assoc()) {
    $array[] = $row; // 'id: '.$row["Id"]." name: ".$row["FirstName"]." ".$row["LastName"]."<br>";
}

//var_dump($_SERVER);
$action = isset($_GET['action'])?$_GET['action']:"";
switch($action){
    case 'post': echo json_encode($array);
        break;
}





//            var_dump($_POST);
//            if(isset($_POST['name'])){
//                print_r($_POST['name']); 
//            }
        