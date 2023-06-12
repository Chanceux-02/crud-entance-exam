<?php

class Login extends Db{
    public function login($email, $password){
        $con = $this->connect();
        $stmt = "SELECT `pass` FROM employeefile WHERE `email` = ?;";
        $stmt2 = $con->prepare($stmt);

        if(!$stmt2->execute([$email])){ 
            $stmt2 = null;
            header("location: ../pages/login.php?error=stmtfailed");
            exit();
        }
        if($stmt2->rowCount() == 0){ 
            $stmt = null;
            header("location: ../pages/login.php?error=nouser");
            exit();
        }
            
            $inputPass = $stmt2->fetchAll(PDO::FETCH_ASSOC); 
            $validatePass = password_verify($password, $inputPass[0]['pass']);
            // print_r($validate[0]['pass']);
            if (!$validatePass) {
                header("location: ../pages/login.php?error=loginfailed");
                exit();
            }

            $stmt = "SELECT * FROM employeefile WHERE `email` = ?;";
            $stmt2 = $con->prepare($stmt);
            if(!$stmt2->execute([$email])){ 
                $stmt2 = null;
                header("location: ../pages/login.php?error=stmtfailed");
                exit();
            }
            if($stmt2->rowCount() == 0){
                $stmt2 = null;
                header("location: ../pages/login.php?error=noUser");
                exit();
            }
            $user = $stmt2->fetchAll(PDO::FETCH_ASSOC); 
            // print_r($user[0]);
                session_start();    
                $_SESSION["fullname"] = $user[0]["fullname"];     
                $_SESSION["uid"] = $user[0]["recid"];     
                $stmt2 = null;

                // header("location: ../index.php?login-successful!");
    
    }
}