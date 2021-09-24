<?php
require('./Models/Config.php');
class Student extends Config {

    private $id, $name, $email, $password, $phone, $status, $created_at, $updated_at;

    public function __construct() 
    {
        parent::__construct();
    }

    public function getStudents() 
    {
        $query = "SELECT * FROM student";
        $con = $this->pdo->prepare($query);
        $con->execute();
        
        $result = $con->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($result);
    }
}