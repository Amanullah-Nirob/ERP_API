<?php

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


if($_SERVER['REQUEST_METHOD']='PUT'){
include_once '../config/database.php';
$database = new Database();
$conn = $database->getConnection();

$data = json_decode(file_get_contents("php://input"));

if(!empty($data->amount) && !empty($data->month)){

    $Amount=$data->amount;
    $month=$data->month;

    if($month==="January"){
        $sql="UPDATE down_payment_month SET January=January + $Amount";
        if(mysqli_query($conn,$sql)){
            echo json_encode(array("message" => "data updated"));
        
        }else {
            echo json_encode(array("message" => "data not updated"));
        }
    }
    
    if($month==="February"){
        $sql="UPDATE down_payment_month SET February=February + $Amount";
        if(mysqli_query($conn,$sql)){
            echo json_encode(array("message" => "data updated"));
        
        }else {
            echo json_encode(array("message" => "data not updated"));
        }
    }
    

    if($month==="March"){
        $sql="UPDATE down_payment_month SET March=March + $Amount";
        if(mysqli_query($conn,$sql)){
            echo json_encode(array("message" => "data updated"));
        
        }else {
            echo json_encode(array("message" => "data not updated"));
        }
    }
    

    if($month==="April"){
        $sql="UPDATE down_payment_month SET April=April + $Amount";
        if(mysqli_query($conn,$sql)){
            echo json_encode(array("message" => "data updated"));
        
        }else {
            echo json_encode(array("message" => "data not updated"));
        }
    }
    
    if($month==="May"){
        $sql="UPDATE down_payment_month SET May=May+$Amount";
        if(mysqli_query($conn,$sql)){
            echo json_encode(array("message" => "data updated"));
        
        }else {
            echo json_encode(array("message" => "data not updated"));
        }
    }
    

    if($month==="June"){
        $sql="UPDATE down_payment_month SET June=June+$Amount";
        if(mysqli_query($conn,$sql)){
            echo json_encode(array("message" => "data updated"));
        
        }else {
            echo json_encode(array("message" => "data not updated"));
        }
    }
    


    if($month==="July"){
        $sql="UPDATE down_payment_month SET July=July+$Amount";
        if(mysqli_query($conn,$sql)){
            echo json_encode(array("message" => "data updated"));
        
        }else {
            echo json_encode(array("message" => "data not updated"));
        }
    }
    


    if($month==="August"){
        $sql="UPDATE down_payment_month SET August=August+$Amount";
        if(mysqli_query($conn,$sql)){
            echo json_encode(array("message" => "data updated"));
        
        }else {
            echo json_encode(array("message" => "data not updated"));
        }
    }
    

    if($month==="September"){
        $sql="UPDATE down_payment_month SET September=September+$Amount";
        if(mysqli_query($conn,$sql)){
            echo json_encode(array("message" => "data updated"));
        
        }else {
            echo json_encode(array("message" => "data not updated"));
        }
    }
    if($month==="October"){
        $sql="UPDATE down_payment_month SET October=October+$Amount";
        if(mysqli_query($conn,$sql)){
            echo json_encode(array("message" => "data updated"));
        
        }else {
            echo json_encode(array("message" => "data not updated"));
        }
    }
    if($month==="November"){
        $sql="UPDATE down_payment_month SET November=November+$Amount";
        if(mysqli_query($conn,$sql)){
            echo json_encode(array("message" => "data updated"));
        
        }else {
            echo json_encode(array("message" => "data not updated"));
        }
    }
    if($month==="December"){
        $sql="UPDATE down_payment_month SET December=December+$Amount";
        if(mysqli_query($conn,$sql)){
            echo json_encode(array("message" => "data updated"));
        
        }else {
            echo json_encode(array("message" => "data not updated"));
        }
    }
}else {
    // echo json_encode(array("message" => "data incomplete"));
}
    
   
    




}

?>

