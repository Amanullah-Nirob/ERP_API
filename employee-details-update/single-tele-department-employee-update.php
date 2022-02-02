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
    $designation=$data->designation;
    $salary=$data->salary;
    $email=$data->email;
    $phone=$data->phone;
    $address=$data->address;
    $birthday=$data->birthday;
    
    
    $sql="UPDATE tele_department_employee_read SET employee_name='$name',designation='$designation',salary='$salary',email='$email',phone='$phone',address='$address',birthday='$birthday'  where id='$id'";
    if(mysqli_query($conn,$sql)){
        echo json_encode(array("message" => "data updated"));
    
    }else {
        echo json_encode(array("message" => "data not updated"));
    }
    
}else{
    // echo json_encode(array("message" => "id not found"));
}



}

?>

