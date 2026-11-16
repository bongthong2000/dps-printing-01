<?php
$page = $_GET['page'] ?? 'home';

?>

<!DOCTYPE html>
<html lang="en">
  <?php include ("./layout/header.php") ?>
<body>
    <div class="main-container">
        <div class="col-12 blog-contain">
            <!-- layout-menu -->
            <?php include ("./layout/menu.php")?>
            <!-- pages -->
            <?php 
                if ($page === 'home') {
                    include "./layout/slider.php";
                    include("./pages/home.php");
                }
                elseif ($page === 'theme') {
                    include("./pages/theme.php");
                }
                // elseif ($page === 'products') {
                //     include("./pages/products.php");
                // }
                // elseif ($page === 'client') {
                //     include("./pages/client.php");
                // }
                // elseif ($page === 'about') {
                //     include("./pages/aboutUs.php");
                // }
                //  elseif ($page === 'contact') {
                //     include("./pages/contact.php");
                // }
            ?>
            <!-- layout-footer -->
            <?php  include ("./layout/footer.php") ?>
        </div>
    </div>

    <script src="./js/scrip1.js"></script>
</body>
</html>           