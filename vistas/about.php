<!DOCTYPE html>
<html lang="en" class=" ">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($titulo) ? $titulo : "About"  ?></title>
    <link rel="stylesheet" href="./assets/local/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/mainMobile.css">
</head>

<style>
    html {
        height: 100%;
    }

    #img_1 {
        height: 400;
        width: 400;
        position: absolute;
        right: -20;
        bottom: -15;
    }

    .imagen-completa {
        background-image: url("./assets/imgs/img13.png");
        background-size: cover;
        display: flex;
        flex-direction: column;
        position: relative;
    }

    .banner a {
        color: #fff
    }

    .banner {
        background-image: url("./assets/imgs/about.png");
    }

    .team-img {
        min-height: 320px;
        padding: 10px;
        color: #fff;
    }

    .s4-textos {
        background-color: #f3f3f3;
    }
</style>


<body id="p-about" class="bg-white ">

    <section id="section-1 ">
        <div class="d-flex flex-wrap  container ">

            <div class="col-12 col-sm-6 py-5">
                <div class="recuadro position-relative">

                    <img id="img_1" src="./assets/imgs/img14.png">
                </div>
            </div>
            <div class="col-12 col-sm-6 d-flex flex-column justify-content-center">
                <h5 class="font-weight-bold">WHY RANGE COUNSELORS</h5>
                <h2 class="text-mobile-1 font-weight-bold">With over 10 years of experience helping business striving for excellence</h2>
                <div class="d-flex mt-5">
                    <div class="d-flex flex-wrap mb-2 mb-0">
                        <div class="col-12 col-sm-6 border-left ">
                            <div class="row">

                                <div class="col-4">
                                    <img src="./assets/imgs/icons/icon11.png">

                                </div>
                                <div class="col-8">
                                    <h3 class="font-weight-bold">100m+</h3>
                                    <h6 class="xsmall-text">USD of Funding secured</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 border-left  mt-3 mt-sm-0">
                            <div class="row">

                                <div class="col-4">
                                    <img src="./assets/imgs/icons/icon12.png">

                                </div>
                                <div class="col-8">
                                    <h3 class="font-weight-bold">100+</h3>
                                    <h6 class="xsmall-text">Deals closed across the world</h6>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>

        </div>
    </section>
    <section id="section-2" class="imagen-completa mt-7">
        <div class="container">

            <div class="row h-100 m-0 ">

                <div class="col-12 col-sm-6 d-flex flex-column justify-content-center align-items-space h-100 z1 py-5">

                    <h2 class=" text-white font-weight-bold  ">We take business to new markets </h2>
                    <p class="text-white small-text">We support clients to establish, expand and divest their businesses through strategic, value-added consulting and legal services, combining specialist know-how, connections, local partners and execution expertise.</p>
                    <div class="row mt-5">
                        <div class="col-6 col-sm-6  ">
                            <div class="row">
                                <div class="col-12 col-sm-2 pb-2 ">

                                    <img src="./assets/imgs/icons/about1.svg">
                                </div>
                                <div class="col-12 col-sm-10 ">
                                    <h4 class="text-white font-weight-bold">Market knowledge</h4>
                                    <p class="text-white xsmall-text">We develop legal strategies for domestic and international markets.</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-6 col-sm-6 ">
                            <div class="row">
                                <div class="col-12 col-sm-2 pb-2 ">
                                    <img src="./assets/imgs/icons/about2.svg">
                                </div>
                                <div class="col-12 col-sm-10">
                                    <h4 class="text-white font-weight-bold">Industry-specific</h4>
                                    <p class="text-white xsmall-text">Our transactional law attorneys can assist you with oil and gas rights of way, securing leases, drilling, and starting operations.</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-6 col-sm-6  ">
                            <div class="row">
                                <div class="col-12 col-sm-2 pb-2 ">
                                    <img src="./assets/imgs/icons/about3.svg">
                                </div>
                                <div class="col-12 col-sm-10">
                                    <h4 class="text-white font-weight-bold">Worldwide coverage</h4>
                                    <p class="text-white xsmall-text">Our team has established connections to resource producing countries all over the world.</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-6 col-sm-6 ">
                            <div class="row">
                                <div class="col-12 col-sm-2 pb-2 ">
                                    <img src="./assets/imgs/icons/about4.svg">
                                </div>
                                <div class="col-12 col-sm-10">
                                    <h4 class="text-white font-weight-bold">Tailored Services</h4>
                                    <p class="text-white xsmall-text">Providing technical and legal skills that are tailored to the client's needs.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">

                </div>

            </div>
        </div>
        <div class="bg-banner"></div>
    </section>
    <section id="section-3" class="container mt-7">
        <h2 class="text-center "><label class="sub-borde-verde font-weight-bold"> Who we are</label></h2>

        <div class="d-flex justify-content-around mb-4 row">

            <div class="col-12 col-sm-4 p-2 my-2 my-0">
                <div class="imagen-1 team-img " style="background-image: url(./assets/imgs/who1.png) ;">
                    <div class="iconos d-flex flex-column h-100 justify-content-between">
                        <div class="info-superior">
                            <h5 class="medium-text">Oil & Gas Expert</h5>
                            <div class="d-flex">
                                <img src="./assets/imgs/icons/in.svg">
                            </div>
                            <div class="d-flex flex-column mt-2">

                                <label> <u class="small-text">555-55-555</u></label>
                                <label> <u class="small-text">Jordan@rangecounselors.com</u></label>
                            </div>
                        </div>
                        <div class="info-inferior">
                            <h3 class="font-weight-bold">Jordan Strouse</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 p-2 my-2 my-0">
                <div class="imagen-1 team-img " style="background-image: url(./assets/imgs/who2.png) ;">
                    <div class="iconos d-flex flex-column h-100 justify-content-between">
                        <div class="info-superior">

                        </div>
                        <div class="info-inferior">
                            <h3 class="font-weight-bold">Jane Doe</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 p-2 my-2 my-0">
                <div class="imagen-1 team-img " style="background-image: url(./assets/imgs/who3.png) ;">
                    <div class="iconos d-flex flex-column h-100 justify-content-between">
                        <div class="info-superior">

                        </div>
                        <div class="info-inferior">
                            <h3 class="font-weight-bold">John Doe</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-4" class="container mt-9 mb-5">
        <div class="text-center">

            <h4 class="c-verde font-weight-bold">RECENT NEWS</h4>
            <h2 class=" font-weight-bold">Our latest articles</h2>
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