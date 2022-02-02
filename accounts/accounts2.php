<?php

if($_SERVER['REQUEST_METHOD']='GET'){
include_once '../config/database.php';
$database = new Database();
$conn = $database->getConnection();


   $sql="SELECT * FROM account_2";
   $result=mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)>0){
       $rows=array();

   while ($r = mysqli_fetch_assoc($result)) {
    $rows["result"][]=$r;
   }

   echo json_encode($rows);

   }else {
      // echo json_encode(array("message" => "data incomplete"));
   }
}

?>