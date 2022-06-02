<!DOCTYPE html>
<html lang="en" class=" ">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($titulo) ? $titulo : "d"  ?></title>
    <link rel="stylesheet" href="./assets/local/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<style>
    html {
        height: 100%;
    }

    .recuadro {
        background-color: #303659;
        width: 400;
        height: 400;
    }

    #img_1 {
        height: 400;
        width: 400;
        position: absolute;
        right: -20;
        bottom: -15;
    }

    .imagen-completa {
        background-image: url("./assets/imgs/home1.jpg");
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
    @media (max-width: 992px) {
        .recuadro {
            background-color: #303659;
            width: 100%;
            height: 100%;
        }

        #img_1 {
            height: 100%;
            width: 100%;
            position: absolute;
            right: -20;
            bottom: -15;
        }
    }
    @media (max-width: 512px) {
        .recuadro {
            background-color: #303659;
            width: 200;
            height: 200;
        }

        #img_1 {
            height: 200;
            width: 200;
            position: absolute;
            right: -20;
            bottom: -15;
        }
    }

    .team-img {
        min-height: 320px;
        padding: 10px;
        color: #fff;


    }
    .s4-textos{
        background-color: #f3f3f3;
    }
</style>


<body class="bg-white">

    <section id="section-1 ">
        <div class="d-flex flex-wrap  container ">

            <div class="col-12 col-sm-6 py-5">
                <div class="recuadro position-relative">

                    <img id="img_1" src="./assets/imgs/img2.jpg">
                </div>
            </div>
            <div class="col-12 col-sm-6 d-flex flex-column justify-content-center">
                <h5>WHY RANGE COUNSELORS</h5>
                <h1>With over 10 years of experience helping business striving for excellence</h1>
                <div class="d-flex mt-5">
                    <div class="d-flex flex-wrap mb-2 mb-0">
                        <div class="col-12 col-sm-6 border-left ">
                            <div class="col-4">

                            </div>
                            <div class="col-8">
                                <h1>100m+</h1>
                                <h6>Funcing secured</h6>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 border-left  mt-3 mt-sm-0">

                            <div class="col-4">

                            </div>
                            <div class="col-8">
                                <h1>100+</h1>
                                <h6>Deals closed across the world</h6>
                            </div>
                        </div>


                    </div>

                </div>
            </div>

        </div>
    </section>
    <section id="section-2" class="imagen-completa">
        <div class="row h-100 m-0 ">

            <div class="col-12 col-sm-6 d-flex flex-column justify-content-center align-items-space h-100 z1 p-sm-5 py-3">

                <h3 class=" text-white font-weight-bold  ">We take business to new markets </h3>
                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="row">
                    <div class="col-6 col-sm-6">
                        <div class="row">
                            <div class="col-12 col-sm-1 pt-2">
                                <i class="bi bi-yin-yang text-white "></i>
                            </div>
                            <div class="col-12 col-sm-10">
                                <h5 class="text-white">Leading provider</h5>
                                <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-6 col-sm-6">
                        <div class="row">
                            <div class="col-12 col-sm-1 pt-2">
                                <i class="bi bi-yin-yang text-white"></i>
                            </div>
                            <div class="col-12 col-sm-10">
                                <h5 class="text-white">Leading provider</h5>
                                <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-6 col-sm-6">
                        <div class="row">
                            <div class="col-12 col-sm-1 pt-2">
                                <i class="bi bi-yin-yang text-white"></i>
                            </div>
                            <div class="col-12 col-sm-10">
                                <h5 class="text-white">Leading provider</h5>
                                <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-6 col-sm-6">
                        <div class="row">
                            <div class="col-12 col-sm-1 pt-2">
                                <i class="bi bi-yin-yang text-white"></i>
                            </div>
                            <div class="col-12 col-sm-10">
                                <h5 class="text-white">Leading provider</h5>
                                <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6">

            </div>
            <div class="bg-banner"></div>

        </div>
    </section>
    <section id="section-3" class="container my-3">
        <h1 class="text-center">MEET THE TEAM</h1>

        <div class="d-flex justify-content-around mb-4 row">

            <div class="col-12 col-sm-4 p-2 my-2 my-0">
                <div class="imagen-1 team-img bg-primary ">
                    <div class="iconos d-flex flex-column h-100 justify-content-between">
                        <div class="info-superior">
                            <h5>Oil & Gas Expert</h5>
                            <div class="d-flex">

                                <i class="bi bi-twitter mr-2"></i>
                                <i class="bi bi-linkedin"></i>
                            </div>
                            <div class="d-flex flex-column mt-2">

                                <label> <u>555-55-555</u></label>
                                <label> <u>Jordan@rangecounselors.com</u></label>
                            </div>
                        </div>
                        <div class="info-inferior">
                            <h2>Jordan Strouse</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 p-2 my-2 my-0">
                <div class="imagen-1 team-img bg-primary ">
                    <div class="iconos d-flex flex-column h-100 justify-content-between">
                        <div class="info-superior">
                            <h5>Oil & Gas Expert</h5>
                            <div class="d-flex">

                                <i class="bi bi-twitter mr-2"></i>
                                <i class="bi bi-linkedin"></i>
                            </div>
                            <div class="d-flex flex-column mt-2">

                                <label> <u>555-55-555</u></label>
                                <label> <u>Jordan@rangecounselors.com</u></label>
                            </div>
                        </div>
                        <div class="info-inferior">
                            <h2>Jordan Strouse</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 p-2 my-2 my-0">
                <div class="imagen-1 team-img bg-primary ">
                    <div class="iconos d-flex flex-column h-100 justify-content-between">
                        <div class="info-superior">
                            <h5>Oil & Gas Expert</h5>
                            <div class="d-flex">

                                <i class="bi bi-twitter mr-2"></i>
                                <i class="bi bi-linkedin"></i>
                            </div>
                            <div class="d-flex flex-column mt-2">

                                <label> <u>555-55-555</u></label>
                                <label> <u>Jordan@rangecounselors.com</u></label>
                            </div>
                        </div>
                        <div class="info-inferior">
                            <h2>Jordan Strouse</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-4" class="container my-3 mb-5">
        <div class="text-center">

            <h4>RECENT NEWS</h4>
            <h3>Our latest articles</h3>
        </div>
        <div class="s4-imgs row">
            <div class="col-12 col-sm-4">

                <img class="responsive w-100" src="./assets/imgs/home1.jpg">
                <div class="s4-textos p-2">
                    <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit blanditiis itaque, </h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, sit eius iste architecto blanditiis sequi ad dicta, ipsum dolores aspernatur quos sed iusto quod repellat accusantium ratione est asperiores consequatur?</p>
                    <a class="mt-1 text-primary">Keep Reading</a>
                </div>
            </div>
            <div class="col-12 col-sm-4">

                <img class="responsive w-100" src="./assets/imgs/home1.jpg">
                <div class="s4-textos p-2">
                    <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit blanditiis itaque, </h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, sit eius iste architecto blanditiis sequi ad dicta, ipsum dolores aspernatur quos sed iusto quod repellat accusantium ratione est asperiores consequatur?</p>
                    <a class="mt-1 text-primary">Keep Reading</a>
                </div>
            </div>
            <div class="col-12 col-sm-4">

                <img class="responsive w-100" src="./assets/imgs/home1.jpg">
                <div class="s4-textos p-2">
                    <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit blanditiis itaque, </h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, sit eius iste architecto blanditiis sequi ad dicta, ipsum dolores aspernatur quos sed iusto quod repellat accusantium ratione est asperiores consequatur?</p>
                    <a class="mt-1 text-primary">Keep Reading</a>
                </div>
            </div>
        </div>
    </section>

</body>

<?php $this->vista("_complementos/menus/footer") ?>

</html>