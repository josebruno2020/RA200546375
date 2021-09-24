<?php
require('./Models/Config.php');
class  Course extends Config {

    private $id, $nameCourse, $description, $dateStart, $dateFinish, $status, $created_at, $updated_at;

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllCourse()
    {
        $query = "SELECT * FROM course";
        $con = $this->pdo->prepare($query);
        $con->execute();
        
        $result = $con->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($result);
    }
}