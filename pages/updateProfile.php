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

<section class="form-container my-5">
    <div class="form-wrapper pt-5">
        <h1>Update Your Profile Information</h1>
        <br>
        <a href="profile.php?page=profile" class="btn btn-outline-primary">back</a>
        <form action="../includes/updateProfile.inc.php" method="post">
            <input type="hidden" name="uid" value="<?=$uid?>">
            <input type="text" name="fullname" value="<?=ucfirst($empData['fullname'])?>" required class="form-control mt-2">
            <input type="text" name="address" value="<?=ucfirst($empData['address'])?>" required class="form-control mt-2">
            <p class="mt-3">Birth date</p>
            <input type="date" name="birthdate" value="<?=$empData['birthdate']?>" required class="form-control mt-2">
            <input type="number" name="age" value="<?=$empData['age']?>" required class="form-control mt-2">

            <p class="mt-3">Gender</p>
            <div>
                <label>
                    <input type="radio" name="gender" value="male" <?php if ($empData['gender'] == 'male'){?> checked <?php } ?>>
                    Male
                </label>
                <br>
                <label>
                    <input type="radio" name="gender" value="female" <?php if ($empData['gender'] == 'female'){?> checked <?php } ?>>
                    Female
                </label>
                <br>
                <label>
                    <input type="radio" name="gender" value="other" <?php if ($empData['gender'] == 'other'){?> checked <?php } ?>>
                    Other
                </label>
            </div>

            <div class="mt-3">
                <label for="civilstat">Status:</label>
                <select id="civilstat" name="civilstat" class="form-select" required>
                    <option value="<?=ucfirst($empData['civilstat'])?>"><?=ucfirst($empData['civilstat'])?></option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="separated">Separated</option>
                    <option value="widowed">Widowed</option>
                </select>
            </div>
            <input type="number" name="contactnum" value="<?=$empData['contactnum']?>" required class="form-control mt-2">
            <div class="d-flex">
                <span class="peso pt-1 mt-2 border rounded-left">&#8369;</span>
                <input type="number" step="0.02" name="salary" value="<?=$empData['salary']?>" required class="form-control mt-2">
            </div>
            <label for="flexCheckDefault" class="mt-3">Employee Status:</label>
            <div class="form-check">
                <input class="form-check-input" name="empstat" type="checkbox" value="<?=$empData['isactive']?>" id="flexCheckDefault" <?php if ($empData['isactive'] == 1){?> checked <?php } ?>>
                <label class="form-check-label" for="flexCheckDefault">
                    Active/Inactive
                </label>
            </div>
            <input type="text" name="email" value="<?=$empData['email']?>" required class="form-control mt-2">
            <input type="password" name="pwd" placeholder="Enter Your New or Current Password" value="" required class="form-control mt-2">
            <br>
            <button type="submit" name="submit" class="btn btn-outline-primary">Update</button>
            
        </form>
    </div>
</section>


<?php
    include '../partials/footer.php';
?>