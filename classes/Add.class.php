<?php

class Add extends Db{
    
    public function add($fullname, $address, $birthdate, $age, $gender, $civilStat, $contactNum, $salary, $isactive, $email, $pass)
    {
        $con = $this->connect();
        $stmt = "INSERT INTO employeefile (`fullname`, `address`, `birthdate`, `age`, `gender`, `civilstat`, `contactnum`, `salary`, `isactive`, `email`, `pass`) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?);";

        $stmt2 = $con->prepare($stmt);
        $stmt2->execute([$fullname, $address, $birthdate, $age, $gender, $civilStat, $contactNum, $salary, $isactive, $email, $pass]);

    }

}