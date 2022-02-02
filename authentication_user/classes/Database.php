<?php
class Database{
    
    // DATABASE CONNECTION
    private $db_host = 'localhost';
    private $db_name = 'glosiqul_test_erp';
    private $db_username = 'glosiqul_erp_apodigi';
    private $db_password = 'apodigi0011';
    
    public function dbConnection(){
        
        try{
            $conn = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name,$this->db_username,$this->db_password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e){
            echo "Connection error ".$e->getMessage(); 
            exit;
        }
          
    }
}