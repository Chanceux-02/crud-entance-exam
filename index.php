<?php

include 'partials/header.php';

session_start();

include_once 'classes/Db.class.php';
include_once 'classes/Add.class.php';
include_once 'classes/Show.class.php';

$dbConnect = new Db;
$dbConnect->connect();

$show = new Show;
$empData= $show->show();

?>

<section class="index-header">
    <?php 
        include 'pages/nav.php'; 
        
        if(isset($_SESSION["fullname"])){
            $fullname = $_SESSION['fullname'];
            echo 'Welcome ' . $fullname;
        }else{
            echo 'You are NOT logged in!';
        }
    ?>
</section>

<section class="index-table-wrapper table-responsive">
    <h1 class="text-center">Employee Informations</h1>
    <table class="index-table mt-5 table">  
       
        <tr>
            <th class="table-header">Full Name</th>
            <th class="table-header">Address</th>
            <th class="table-header">Birth Date</th>
            <th class="table-header">Age</th>
            <th class="table-header">Gender</th>
            <th class="table-header">Civil Status</th>
            <th class="table-header">Contact Number</th>
            <th class="table-header">Salary</th>
            <th class="table-header">Active/Not Active</th>
        </tr>

        <?php foreach($empData as $key => $data){ ?>
            <tr class="mt-1">
                
                <td class="table-data"><?=$data['fullname'];?></td>
                <td class="table-data"><?=$data['address'];?></td>
                <td class="table-data"><?=$data['birthdate'];?></td>
                <td class="table-data"><?=$data['age'];?></td>
                <td class="table-data"><?=$data['gender'];?></td>
                <td class="table-data"><?=$data['civilstat'];?></td>
                <td class="table-data"><?=$data['contactnum'];?></td>
                <td class="table-data"><?=number_format($data['salary'], 2);?></td>
                <?php if ($data['isactive'] == 1) { ?>
                        <td class="table-data">Active</td>
                <?php  } else { ?>
                    <td class="table-data">Not Active</td>
                <?php  } ?>

            </tr>
        <?php } ?>

    </table>
</section>


<?php
    include 'partials/footer.php';
?>