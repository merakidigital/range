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
    <div class="d-flex justify-content-between px-5 pt-5">

        <img src="" alt="" srcset="" width="50" height="50">

        <div class="row  align-items-center z1">
            <a href="./Home" class="c-principal px-5">Home</a>
            <a href="./About" class="c-principal px-5">About</a>
            <a href="./Services" class="c-principal px-5">Services</a>
            <a href="./Team" class="c-principal px-5">Team</a>
            <a href="./Contact" class="c-principal px-5">Contact</a>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center h-100">

        <h1 class="display-3 text-white font-weight-bold z1"><?= isset($titulo) ? $titulo : ""  ?></h1>
    </div>
    <div class="bg-banner"></div>
</div>