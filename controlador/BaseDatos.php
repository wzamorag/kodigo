<?php
class BaseDatos{
    public static $db;
    public static $con;

    function __construct(){
        $this->user="kodigo";
        $this->pass="kodigo2022@";
        $this->host="localhost";
        $this->db="kodigo";
        $this->charset  = 'utf8mb4';
    }
    
    function Conectar(){
    try{
     
        $connection = "mysql:host=".$this->host.";dbname=" . $this->db . ";charset=" . $this->charset;
        // $options = [
        //     PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        //     PDO::ATTR_EMULATE_PREPARES   => false,
        // ];
        $pdo = new PDO($connection,$this->user,$this->pass);
    
        return $pdo;


    }catch(PDOException $e){
        print_r('Error connection: ' . $e->getMessage());
    }   

}
}
