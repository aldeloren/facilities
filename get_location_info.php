<?php
error_reporting(-1);
require 'credentials.php';


/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$loc_id = $_GET['loc_id'];
$query = "SELECT * FROM loc_detail WHERE loc_id='$loc_id'";
$result = $mysqli->query($query);
$jsonData = array();
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
   array_push($jsonData,$row);
   //$arrayItemName = $row["loc_name"];
}

//$jsonFile = "locations.json";
//$jsonFileOpen = fopen($jsonFile, 'w');
$jsonData = (json_encode($jsonData));
echo $jsonData;
//fwrite($jsonFileOpen,$jsonData);
//fclose($jsonFileOpen);
?>
