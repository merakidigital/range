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
<div class="banner">
    <div class="justify-content-between px-sm-5 pt-sm-5 z1 d-none d-sm-flex ">

    <img src="./assets/imgs/logo-header.png" width="100px" height="auto">

        <div class="row  align-items-center z1">
            <a href="./Home" class="c-principal xsmall-text font-weight-bold px-5">HOME</a>
            <a href="./About" class="c-principal xsmall-text font-weight-bold px-5">ABOUT</a>
            <a href="./Services" class="c-principal xsmall-text font-weight-bold px-5">SERVICES</a>
            <a href="./Team" class="c-principal xsmall-text font-weight-bold px-5">TEAM</a>
            <a href="./Contact" class="c-principal xsmall-text font-weight-bold px-5">CONTACT</a>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center h-100">

        <h1 class="display-3 text-white font-weight-bold z1"><?= isset($titulo) ? $titulo : ""  ?></h1>
    </div>
    <div class="bg-banner"></div>
</div>