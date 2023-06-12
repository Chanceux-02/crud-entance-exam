<?php

class Show extends Db{
    
    public function show(){
        $con = $this->connect();
        $stmt = "SELECT * FROM employeefile ORDER BY 'fullname';";

        $stmt2 = $con->prepare($stmt);
        $stmt2->execute();

        return $stmt2->fetchAll(PDO::FETCH_ASSOC);
    }

    public function showUserProfile($id){
        $con = $this->connect();
        $stmt = "SELECT * FROM employeefile WHERE recid = ?;";

        $stmt2 = $con->prepare($stmt);
        $stmt2->execute([$id]);

        return $stmt2->fetch(PDO::FETCH_ASSOC);
    }
    public function checkEmail($email){
        $con = $this->connect();
        $stmt = "SELECT * FROM employeefile WHERE email = ?;";

        $stmt2 = $con->prepare($stmt);
        $stmt2->execute([$email]);

        return $stmt2->fetch(PDO::FETCH_ASSOC);
    }

}

