<?php
include('config.php');
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php?access_denied");
}
?>
<style>
    .navbar a {
        font-family: "Harlow Solid" !important;
        color: #9c47fc;
        display: block;
        background: -webkit-linear-gradient(#ff7bb0, #ff0b55);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .fas {
        font-size: 23px;
        color: #9c47fc;
        display: block;
        background: -webkit-linear-gradient(#ff7bb0, #ff0b55);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .fa {
        font-size: 15px;
        color: #9c47fc;
        display: block;
        background: -webkit-linear-gradient(#ff7bb0, #ff0b55);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>
<script src="https://kit.fontawesome.com/cb32ff1eee.js" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><i class="fas fa-theater-masks blue "></i>MokletPerpus</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="tampiladmin.php"><i class="fa fa-book"></i> Book</a>
            <a class="nav-item nav-link" href="transaksi/index.php"><i class="fa fa-users"></i> Community</a>
            <a class="nav-item nav-link" href="#"><i class="fa fa-address-book"></i> About</a>
            <a class="nav-item nav-link" href="#"><i class="fa fa-question"></i> Help</a>
            <a class="nav-item nav-link" href="admin.php"><i class="fa fa-user-graduate"></i> <?php echo $_SESSION['username']; ?></a>
            <a class="nav-item nav-link" href="logout.php"><i class="fa fa-sign-out-alt"></i>Log Out</a>


        </div>
    </div>
</nav>