<?php 
 // required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
    include_once '../config/database.php';
    // instantiate product object
    $database = new Database();
    $db = $database->getConnection();

      //  echo "<pre>";
      //  print_r($_FILES['my_image']);
      //  echo "</pre>";
       $img_name = $_FILES['my_image']['name'];
       $img_size = $_FILES['my_image']['size'];
       $tmp_name = $_FILES['my_image']['tmp_name'];
       $error = $_FILES['my_image']['error'];
       if ($error === 0) {
          if ($img_size > 12500000) {
             echo json_encode(array("message" => "Sorry, your file is too large."));
             // $em = "Sorry, your file is too large.";
             // header("Location: index.php?error=$em");
          }else {
             $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
             $img_ex_lc = strtolower($img_ex);
    
             $allowed_exs = array("jpg", "jpeg", "png"); 
    
             if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = '../uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
         // image_url='http://localhost/erpApi/uploads/$new_img_name'
                // Insert into Database
                $employee_name=$_POST['employee_name'];
                $designation=$_POST['designation'];
                $salary=$_POST['salary'];
                $email=$_POST['email'];
                $phone=$_POST['phone'];
                $address=$_POST['address'];
                $birthday=$_POST['birthday'];

    $query = "INSERT INTO  management_employee_read (employee_name,designation,salary,email,phone,address,birthday,employee_image) 
         VALUES ('$employee_name','$designation','$salary','$email','$phone','$address','$birthday','https://testerp.apodigi.com/erpApi/uploads/$new_img_name')";
        // create the product
       if(mysqli_query($db,$query)){
        echo json_encode(array("message" => "bd department employee details was created."));
        header("Location: https://testerp.apodigi.com/dashboard/employee");
}else{
        echo json_encode(array("message" => "bd department employee details not created."));

}
}else {
                echo json_encode(array("message" => "You can't upload files of this type"));
                // header("Location: index.php?error=$em");
}

}



}else {
          echo json_encode(array("message" => "unknown error occurred!"));
          // header("Location: index.php?error=$em");
       }
    }else {
    //   echo json_encode(array("message" => "submit button name uncompleted"));
    }

?>

