<?php
require_once('functions/function.php');

?>
<section>
    <div class="container-fluid content_part">
        <div class="row">
            <div class="col-md-2 sidebar_part">
                <div class="user_part">
                    <?php
                    if ($_SESSION['img'] != '') {
                    ?>
                        <img height="40px" src="uploads/<?= $_SESSION['img']; ?>" alt="user">
                    <?php
                    } else {
                    ?>
                        <img class="img200" height="40" src="images/avatar.jpg" alt="" />
                    <?php
                    }
                    ?>
                    <h5><?= $_SESSION['name']; ?></h5>
                    <p><i class="fas fa-circle"></i> Online</p>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="index.php"><i class="fas fa-home"></i> Dashboard</a></li>
                        <?php if ($_SESSION['role'] == 1) { ?>
                            <li><a href="all-user.php"><i class="fas fa-user-circle"></i> Users</a></li>
                        <?php } ?>
                        <li><a href="all-banner.php"><i class="fas fa-images"></i> Banner</a></li>
                        <li><a href="all-contact-message.php"><i class="fas fa-comments"></i> Contact Message</a></li>
                        <li><a href="all-member.php"><i class="fas fa-comments"></i> Member</a></li>
                        <li><a href="all-service.php"><i class="fas fa-comments"></i> Service</a></li>
                        <li><a href="top-menu.php"><i class="fas fa-comments"></i> Top Menu</a></li>
                        <li><a href="all-project.php"><i class="fas fa-comments"></i> Project</a></li>
                        <li><a href="#"><i class="fas fa-globe"></i> Live Site</a></li>
                        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 content">
                <div class="row">
                    <div class="col-md-12 breadcumb_part">
                        <div class="bread">
                            <ul>
                                <li><a href=""><i class="fas fa-home"></i>Home</a></li>
                                <li><a href=""><i class="fas fa-angle-double-right"></i>Dashboard</a></li>
                            </ul>
                        </div>
                    </div>
                </div>