<?php

    $page = $_GET['page'] ?? 'home';
?>
<div class="col-12 blog-header">
    <div class="col-11 m-auto  blog-menu ">
        <div class="menu  d-flex justify-content-center align-items-center">
            <span class="menu-span">MENU</span>
            <button class="btn-menu ms-4"><i class="fa-solid fa-bars"></i></button>
        </div>
        <div class="blog-media">
            <div class="icon-media">
                <a href="https://www.facebook.com/PrintingStudiobyDPS/"  target="_blank" rel="noopener noreferrer">
                    <div class="icon"><img src="./image/icons/fb.png" alt=""></div>
                </a>
                <a href="https://t.me/dpsadvertise"  target="_blank" rel="noopener noreferrer">
                    <div class="icon"><img src="./image/icons/telegram.png" alt=""></div>
                </a>
                <a href="https://www.instagram.com/printing.studiobydps/?hl=en"  target="_blank" rel="noopener noreferrer">
                    <div class="icon"><img src="./image/icons/instagram.png" alt=""></div>
                </a>
                <a href="https://www.tiktok.com/@dpsprinting_studio?is_from_webapp=1&sender_device=pc"  target="_blank" rel="noopener noreferrer">
                    <div class="icon"><img src="./image/icons/tiktok.png" alt=""></div>
                </a>
            </div>
            <div class="blog-search">
                <input type="text" placeholder="Search">
                <button class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <div class="blog-btn-search d-flex justify-content-center align-items-center">
                <button class="open-search search  d-flex justify-content-center align-items-center "><i class="fa-solid fa-magnifying-glass"></i></button>
                <button class="close-search search text-danger d-none   d-flex justify-content-center align-items-center"><i class="fa-solid fa-xmark"></i></button>
            </div>
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
                <li><a href="index.php?page=theme" class="<?= $page == 'theme' ? 'active' : '' ?>">Theme package</a></li>
                <li><a href="index.php?page=service" class="<?= $page == 'service' ? 'active' : '' ?>">Services</a></li>
                <li><a href="index.php?page=carrer" class="<?= $page == 'carrer' ? 'active' : ''?>">Carrers</a></li>
                <li><a href="index.php?page=news" class="<?= $page == 'news' ? 'active' :'' ?>">News</a></li>
                <li><a href="index.php?page=client" class="<?= $page == 'client' ? 'active' : '' ?>">Client</a></li>
                <li><a href="index.php?page=contact" class="<?= $page == 'contact' ? 'active' : '' ?>">Contact us</a></li>
            </ul>
        </div>
    </div>
</div>