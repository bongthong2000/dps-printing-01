<?php

$page = $_GET['page'] ?? 'home';
?>
<div class="col-12 blog-header">
    <div class="col-11 m-auto mt-3 blog-menu">
        <div class="menu  d-flex justify-content-center align-items-center">
            <span class="menu-span">MENU</span>
            <button class="btn-menu ms-4"><i class="fa-solid fa-bars"></i></button>
        </div>
        <div class="blog-media">
            <div class="icon-media">
                <a href="#"><img src="./image/icons/fb.png" alt=""></a>
                <a href="#"><img src="./image/icons/telegram.png" alt=""></a>
                <a href="#"><img src="./image/icons/instagram.png" alt=""></a>
                <a href="#"><img src="./image/icons/tiktok.png" alt=""></a>
            </div>
            <div class="blog-search">
                <input type="text" placeholder="Search">
                <button class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <button class="open-search search "><i class="fa-solid fa-magnifying-glass"></i></button>
            <button class="close-search search text-danger d-none"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </div>
    <div class="menubar">
        <div class="bit d-flex justify-content-between align-items-center">
            <span>MENU</span>
            <button class="btn-bit"><img src="./image/icons/cross-out.svg" alt=""></button>
        </div>
        <hr>
        <div class="menus">
            <ul class="m-0 p-0">
                <li><a href="index.php?page=home" class="<?= $page == 'home' ? 'active' : ''?>">Home</a></li>
                <li><a href="index.php?page=service" class="<?= $page == 'service' ? 'active' : '' ?>">Services</a></li>
                <li><a href="index.php?page=products" class="<?= $page == 'products' ? 'active' : ''?>">Products</a></li>
                <li><a href="index.php?page=client" class="<?= $page == 'client' ? 'active' : '' ?>">Client</a></li>
                <li><a href="index.php?page=about" class="<?= $page == 'about' ? 'active' :'' ?>">About us</a></li>
                <li><a href="index.php?page=contact" class="<?= $page == 'contact' ? 'active' : '' ?>">Contact us</a></li>
            </ul>
        </div>
    </div>
</div>