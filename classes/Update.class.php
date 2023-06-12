<?php

class Update extends Db{
    
    public function update($fullname, $address, $birthdate, $age, $gender, $civilStat, $contactNum, $salary, $isactive, $email, $pass, $uid){
        try {
            $con = $this->connect();
            $stmt = "UPDATE employeefile SET `fullname` = ?, `address` = ?, `birthdate` = ?, `age` = ?, `gender` = ?, `civilstat` = ?, `contactnum` = ?, `salary` = ?, `isactive` = ?, `email` = ?, `pass` = ? WHERE recid = ? ";

            $stmt2 = $con->prepare($stmt);
            $stmt2->execute([$fullname, $address, $birthdate, $age, $gender, $civilStat, $contactNum, $salary, $isactive, $email, $pass, $uid]);
        }catch(PDOException $e) {

            echo $e->getMessage();

        }
    }


}

