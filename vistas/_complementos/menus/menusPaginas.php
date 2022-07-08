<style>
    .banner {
        background-image: url("./assets/imgs/home1.jpg");
        height: 50vh;
        background-size: cover;
        display: flex;
        flex-direction: column;
        position: relative;
    }

    .banner a {
        color: #fff
    }

    .z1 {
        z-index: 1;
    }

    .bg-banner {
        background-color: #0000008f;
        width: 100%;
        height: 100%;
        position: absolute;
        z-index: 0;
    }
</style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<div class="banner header_pagina">
    <nav id="navMenu_general" class="  w-100    pb-5 pt-2   d-flex justify-content-between p-0 px-sm-5 pt-sm-5">

        <div class="content-logo-home px-4 px-sm-0">
            <img src="./assets/imgs/logo-header.png" width="60px" height="auto" id="logo-home">
            <i id="btnMenu" class="fas fa-align-justify"  ></i>
        </div>
        <div id="nav-content-items" class="row font-weight-bold  align-items-center ">
            <a href="./Home" class=" px-5 xsmall-text font-weight-bold menu-desk-item">HOME</a>
            <a href="./About" class=" px-5 xsmall-text font-weight-bold menu-desk-item">ABOUT</a>
            <a href="./Services" class=" px-5 xsmall-text font-weight-bold menu-desk-item">SERVICES</a>
            <a href="./Team" class=" px-5 xsmall-text font-weight-bold menu-desk-item">TEAM</a>
            <a href="./Contact" class=" px-5 xsmall-text font-weight-bold menu-desk-item">CONTACT</a>
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-center h-100">

        <h1 class="display-3 text-white font-weight-bold z1"><?= isset($titulo) ? $titulo : ""  ?></h1>
    </div>
    <div class="bg-banner"></div>
</div>