<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">CRUD EXAM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if(isset($_SESSION["fullname"])){ ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page?page=home" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../pages/profile.php?page=profile">Profile</a>
                    </li>
                    <li class="nav-item ms-5">
                        <?php 
                        if (isset($_GET['page'])) {
                            $message = $_GET['page'];
                            if ($message === 'profile') {
                            ?> 
                                <form action="../includes/logout.inc.php" method="post">
                                    <button type="submit" name="submit" class="nav-link btn btn-unstyled">Logout</button>
                                </form>
                            <?php 
                            }else{
                            ?>
                                <form action="includes/logout.inc.php" method="post">
                                    <button type="submit" name="submit" class="nav-link btn btn-unstyled">Logout</button>
                                </form>
                            <?php   };
                        }else{ ?>
                            <form action="includes/logout.inc.php" method="post">
                                <button type="submit" name="submit" class="nav-link btn btn-unstyled">Logout</button>
                            </form>
                        <?php } ?>
                    </li>
                <?php }else{ ?>
                    <li class="nav-item mt">
                        <a class="nav-link active" aria-current="page?page=home" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item mt">
                        <a class="nav-link active" href="../pages/login.php?loginpage">Log in</a>
                    </li>
                    <li class="nav-item mt">
                        <a class="nav-link active"  href="../pages/register.php?register">Register</a>
                    </li>
                    <li class="nav-item mt">
                        <a class="nav-link ms-5">Log in to manage your profile!</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>