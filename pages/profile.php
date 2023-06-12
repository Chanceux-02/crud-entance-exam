<?php

include '../partials/header.php';

session_start();

include_once '../classes/Db.class.php';
include_once '../classes/Show.class.php';

$uid = "";
if(isset($_SESSION["fullname"])){
    $uid = $_SESSION['uid']; 
}

$show = new Show;
$empData = $show->showUserProfile($uid);


?>

<section>
    <?php 
        include '../pages/nav.php'; 
    ?>
</section>

<section class="user-info-wrapper my-5">
    <div class="user-info-wrapper2">
        <h1 class="text-center">Your Personal Information</h1>
        <a href="../index.php" class="btn btn-outline-primary back">back</a>
        <div class="user-info-responsv d-flex justify-content-center mt-1">
            <a href="../pages/updateProfile.php" class="btn btn-outline-primary">Edit Your Prodile Account</a>
            <h4 class="mx-5 text-center">Or</h4>
            <form action="../includes/deleteProfile.inc.php" method="post">
                <input type="hidden" name="uid" value="<?=$uid?>">
                <button type="submit" name="deleteProfile" class="btn btn-outline-primary delete">Delete Your Profile Account</button>
            </form>
        </div>
        <div class="user-info-responsv d-flex justify-content-around mt-5">   
            <div class="user-info-container">
                <h6 class="shadow p-3 mb-5 bg-white rounded" >Full Name: <?=ucfirst($empData['fullname']);?></h6>
                <h6 class="shadow p-3 mb-5 bg-white rounded" >Address : <?=ucfirst($empData['address']);?></h6>
                <h6 class="shadow p-3 mb-5 bg-white rounded" >Birthdate: <?=$empData['birthdate'];?></h6>
                <h6 class="shadow p-3 mb-5 bg-white rounded" >Age: <?=$empData['age'];?></h6>
                <h6 class="shadow p-3 mb-5 bg-white rounded" >Gender: <?=ucfirst($empData['gender']);?></h6>
            </div>
            <div class="user-info-container">
                <h6 class="shadow p-3 mb-5 bg-white rounded" >Civil Status: <?=ucfirst($empData['civilstat']);?></h6>
                <h6 class="shadow p-3 mb-5 bg-white rounded" >Contact Number: <?=$empData['contactnum'];?></h6>
                <h6 class="shadow p-3 mb-5 bg-white rounded" >Salary: <?=number_format($empData['salary'], 2);?></h6>
                <h6 class="shadow p-3 mb-5 bg-white rounded" >Employee Status: 
                    
                    <?php if ($empData['isactive'] === 1) { ?>
                        Active
                    <?php } else { ?>
                            Not Active
                    <?php } ?>
                </h6>
                <h6 class="shadow p-3 mb-5 bg-white rounded">Email: <?=$empData['email'];?></h6>
                <!-- <h6 class="shadow p-3 mb-5 bg-white rounded">Password: </h6> -->
            </div>
        </div>
    </div>
</section>

<?php
    include '../partials/footer.php';
?>