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

if(!empty($data->id)){
    $id=$data->id;
    $name=$data->employee_name;
    $salaryAmount=$data->salaryAmount;
    $month=$data->month;

    if($month==="January"){
        $sql="UPDATE management_employee_read SET January='$salaryAmount' where id='$id' AND employee_name='$name'";
        if(mysqli_query($conn,$sql)){
            echo json_encode(array("message" => "data updated"));
        
        }else {
            echo json_encode(array("message" => "data not updated"));
        }
    }
    
    if($month==="February"){
        $sql="UPDATE management_employee_read SET February='$salaryAmount' where id='$id' AND employee_name='$name'";
        if(mysqli_query($conn,$sql)){
            echo json_encode(array("message" => "data updated"));
        
        }else {
            echo json_encode(array("message" => "data not updated"));
        }
    }
    

    if($month==="March"){
        $sql="UPDATE management_employee_read SET March='$salaryAmount' where id='$id' AND employee_name='$name'";
        if(mysqli_query($conn,$sql)){
            echo json_encode(array("message" => "data updated"));
        
        }else {
            echo json_encode(array("message" => "data not updated"));
        }
    }
    

    if($month==="April"){
        $sql="UPDATE management_employee_read SET April='$salaryAmount' where id='$id' AND employee_name='$name'";
        if(mysqli_query($conn,$sql)){
            echo json_encode(array("message" => "data updated"));
        
        }else {
            echo json_encode(array("message" => "data not updated"));
        }
    }
    
    if($month==="May"){
        $sql="UPDATE management_employee_read SET May='$salaryAmount' where id='$id' AND employee_name='$name'";
        if(mysqli_query($conn,$sql)){
            echo json_encode(array("message" => "data updated"));
        
        }else {
            echo json_encode(array("message" => "data not updated"));
        }
    }
    

    if($month==="June"){
        $sql="UPDATE management_employee_read SET June='$salaryAmount' where id='$id' AND employee_name='$name'";
        if(mysqli_query($conn,$sql)){
            echo json_encode(array("message" => "data updated"));
        
        }else {
            echo json_encode(array("message" => "data not updated"));
        }
    }
    


    if($month==="July"){
        $sql="UPDATE management_employee_read SET July='$salaryAmount' where id='$id' AND employee_name='$name'";
        if(mysqli_query($conn,$sql)){
            echo json_encode(array("message" => "data updated"));
        
        }else {
            echo json_encode(array("message" => "data not updated"));
        }
    }
    


    if($month==="August"){
        $sql="UPDATE management_employee_read SET August='$salaryAmount' where id='$id' AND employee_name='$name'";
        if(mysqli_query($conn,$sql)){
            echo json_encode(array("message" => "data updated"));
        
        }else {
            echo json_encode(array("message" => "data not updated"));
        }
    }
    

    if($month==="September"){
        $sql="UPDATE management_employee_read SET September='$salaryAmount' where id='$id' AND employee_name='$name'";
        if(mysqli_query($conn,$sql)){
            echo json_encode(array("message" => "data updated"));
        
        }else {
            echo json_encode(array("message" => "data not updated"));
        }
    }
    if($month==="October"){
        $sql="UPDATE management_employee_read SET October='$salaryAmount' where id='$id' AND employee_name='$name'";
        if(mysqli_query($conn,$sql)){
            echo json_encode(array("message" => "data updated"));
        
        }else {
            echo json_encode(array("message" => "data not updated"));
        }
    }
    if($month==="November"){
        $sql="UPDATE management_employee_read SET November='$salaryAmount' where id='$id' AND employee_name='$name'";
        if(mysqli_query($conn,$sql)){
            echo json_encode(array("message" => "data updated"));
        
        }else {
            echo json_encode(array("message" => "data not updated"));
        }
    }
    if($month==="December"){
        $sql="UPDATE management_employee_read SET December='$salaryAmount' where id='$id' AND employee_name='$name'";
        if(mysqli_query($conn,$sql)){
            echo json_encode(array("message" => "data updated"));
        
        }else {
            echo json_encode(array("message" => "data not updated"));
        }
    }
    
   
    
}else{
    // echo json_encode(array("message" => "id not found"));
}



}

?>

