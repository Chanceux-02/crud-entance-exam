<?php
    include '../partials/header.php';
?>

<section class="form-container mt-5">
    <div class="form-wrapper pt-5">
        <h1>Log in</h1>
        <p>or register <a href="register.php" class="">here!</a></p>
        
        <br>
        <a href="../index.php?home" class="btn btn-outline-primary">back</a>
        <form action="../includes/login.inc.php" method="post">
            <input type="text" name="email" placeholder="Enter your User name" required class="form-control mt-2">
            <input type="password" name="pwd" placeholder="Enter your password" required class="form-control mt-2">
            <br>
            <button type="submit" name="submit" class="btn btn-outline-primary">Login</button>
            <br>
        </form>
    </div>
</section>


<?php
    include '../partials/footer.php';
?>