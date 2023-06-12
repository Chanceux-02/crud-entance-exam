<?php
    include '../partials/header.php';
?>

<section class="form-container my-5">
    <div class="form-wrapper pt-5">
        <h1>Register</h1>
        <p>or log in <a href="login.php" class="">here!</a></p>
        <br>
        <a href="../index.php?home" class="btn btn-outline-primary">back</a>
        <form action="../includes/register.inc.php" method="post">
            
            <input type="text" name="fullname" placeholder="Enter your full name" required class="form-control mt-2">
            <input type="text" name="address" placeholder="Enter your address" required class="form-control mt-2">
            <p class="mt-3">Birth date</p>
            <input type="date" name="birthdate" required class="form-control mt-2">
            <input type="number" name="age" placeholder="age" required class="form-control mt-2">

            <p class="mt-3">Gender</p>
            <div>
                <label>
                    <input type="radio" name="gender" value="male">
                    Male
                </label>
                <br>
                <label>
                    <input type="radio" name="gender" value="female">
                    Female
                </label>
                <br>
                <label>
                    <input type="radio" name="gender" value="other">
                    Other
                </label>
            </div>

            <div class="mt-3">
                <label for="civilstat">Status:</label>
                <select id="civilstat" name="civilstat" class="form-select" required>
                    <option value=""></option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="separated">Separated</option>
                    <option value="widowed">Widowed</option>
                </select>
            </div>
            <input type="number" name="contactnum" placeholder="Enter your contact number" required class="form-control mt-2">
            <div class="d-flex">
                <span class="peso pt-1 mt-2 border rounded-left">&#8369;</span>
                <input type="number" step="0.01" name="salary" placeholder="Enter your salary &#8369;00.00" required class="form-control mt-2">
            </div>
            <input type="text" name="email" placeholder="Enter your user name" required class="form-control mt-2">
            <input type="password" name="pwd" placeholder="Enter your password" required class="form-control mt-2">
            <br>
            <button type="submit" name="submit" class="btn btn-outline-primary">Register</button>
            
        </form>
    </div>
</section>


<?php
    include '../partials/footer.php';
?>