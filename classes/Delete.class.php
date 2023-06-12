<?php

class Delete extends Db{

public function delete($id) { 
            try {
    
                $con = $this->connect();
                $stmt = "DELETE FROM employeefile WHERE recid = ? ";
                
                $stmt2 = $con->prepare($stmt);
                $stmt2->execute([$id]); 
                
    
            }catch(PDOException $e) {
    
                echo $e->getMessage();
    
            }
        }  
} 