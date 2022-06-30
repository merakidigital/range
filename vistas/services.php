<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($titulo) ? $titulo : "Service"  ?></title>
    <script src="<?= $this->base_url() ?>/assets/local/jquery-3.5.1.slim.min.js"></script>
    <script src="<?= $this->base_url() ?>/assets/local/jquery.min.js"></script>
    <link rel="stylesheet" href="./assets/local/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/mainMobile.css">
    <script src="./assets/js/app.js"></script>
</head>

<style>
    .banner {
        background-image: url("./assets/imgs/about.png");
        background-size: cover;
    }

    #section-3 {
        background-image: url("./assets/imgs/services3.png");
        background-size: contain;
    }

    .acordeon-titulo {
        padding: 10px;
        display: flex;
        justify-content: space-between;
        background-color: #90979f;
    }

    .acordeon-titulo span {
        cursor: pointer;
    }

    .acordeon-titulo.activo {
        background-color: #a8c6e5;
    }

    .acordeon-contenido {
        display: none;
    }

    .acordeon-contenido.activo {
        display: block;
    }

    #s-4_1 {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
</style>



<body id="p-services" class="bg-white ">
    <section id="section-1" class=" text-center my-5 container">
        <h5 class="font-weight-bold c-darkblue">OUR SERVICES</h5>
        <h1 class="c-darkblue">We offer expertise and <span class="c-green">specialized services</span></h1>
        <label>Range Counselors supports clients to establish, expand and divest their businesses through strategic, value-added consulting and legal services.</label>
    </section>

    <section id="section-2" class=" container">
        <div class="row">
            <div class="col-12 col-sm-4 cart-blue ">
                <div class="p-3 pt-4 d-flex flex-column">
                    <img src="./assets/imgs/icons/oil-rig.svg" alt="Services" sizes="" srcset="" class="bg-black" width="50" height="50">
                    <i class="bi bi-linkedin py-2"></i>
                    <h5>Oilfield Services</h5>
                    <label>We provide comprehensive oil and gas industry law services, including contract review, lease negotiations, and drafting agreements.</label>
                </div>
            </div>
            <div class="col-12 col-sm-4 cart-blue ">
                <div class="p-3 pt-4 d-flex flex-column">
                    <img src="./assets/imgs/icons/acquisitions.svg" alt="Services" sizes="" srcset="" class="bg-black" width="50" height="50">
                    <i class="bi bi-linkedin py-2"></i>
                    <h5>Acquisitions, Diversitures & Joint Ventures</h5>
                    <label>We're focused on helping our clients and creating value in every major category of deal across every investment stage and geography.</label>
                </div>
            </div>
            <div class="col-12 col-sm-4 cart-blue ">
                <div class="p-3 pt-4 d-flex flex-column">
                    <img src="./assets/imgs/icons/transactions.svg" alt="Services" sizes="" srcset="" class="bg-black" width="50" height="50">
                    <i class="bi bi-linkedin py-2"></i>
                    <h5>Commercial & International Transactions</h5>
                    <label>Whether you need help in drafting a commercial contract, setting up a joint venture or closing an acquisition, our team is ready for the challenge.</label>
                </div>
            </div>
        </div>
    </section>
    <section id="section-3" class=" text-white my-5 position-relative">
        <div class="container">

            <div class="row m-0 ">
                <div class="col-12 col-sm-3 p-5 z1">
                    <h1>1,470 +</h1>
                    <h3>Happy Clients</h3>
                </div>
                <div class="col-12 col-sm-3 p-5 z1">
                    <h1>1,200 +</h1>
                    <h3>Projects Completed</h3>
                </div>
                <div class="col-12 col-sm-3 p-5 z1">
                    <h1>25 +</h1>
                    <h3>Years of Experience</h3>
                </div>
                <div class="col-12 col-sm-3 p-5 z1">
                    <h1>100M+</h1>
                    <h3>USD Funding Secured</h3>
                </div>
            </div>

        </div>

        <div class="bg-banner"></div>

    </section>
    <section class="section-4 mb-5">
        <div class="row m-0">

            <div id="s-4_1" class="col-12 col-sm-6">
                <div class="container pl-3 pl-sm-5">

                    <label class="c-green font-weight-bold">HOW WE WORK</label>
                    <h4>Let us lead your business to new markets</h4>
                    <p>Working with advanced technology and know-how businesses in the energy transition, Range is a driving force for international business expansion.</p>
                </div>
                <div class="row">

                    <div class="col-12 col-sm-6 bg-blue-dark" style="height: 70px;">

                    </div>
                    <div class="col-12 col-sm-6">


                    </div>
                </div>
            </div>
            <div id="s-4_2" class="col-12 col-sm-6">
                <div class="container pr-3 plr-sm-5">
                    <div class="acordeon  px-sm-5 ">
                        <div  data-respuesta="1" class="acordeon-titulo font-weight-bold active" >
                            First-Class investing solutions
                            <span class="font-weight-bold iconoAcordeon" data-acordeon="1">-</span>
                        </div>
                        <div id="renglon__1" class="acordeon-contenido p-3"style="display: block;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quae totam cupiditate fugit! Nulla cupiditate saepe,
                            numquam rem consequatur eaque cumque dicta quos illo pariatur magnam nobis quod ducimus odio quaerat.
                        </div>
                        <div  data-respuesta="2" class="acordeon-titulo mt-2 font-weight-bold ">
                            First-Class investing solutions
                            <span class="font-weight-bold iconoAcordeon" data-acordeon="2">+</span>
                        </div>
                        <div id="renglon__2" class="acordeon-contenido p-3 ">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quae totam cupiditate fugit! Nulla cupiditate saepe,
                            numquam rem consequatur eaque cumque dicta quos illo pariatur magnam nobis quod ducimus odio quaerat.
                        </div>
                        <div  data-respuesta="3" class="acordeon-titulo mt-2 font-weight-bold ">
                            First-Class investing solutions
                            <span class="font-weight-bold iconoAcordeon" data-acordeon="3">+</span>
                        </div>
                        <div id="renglon__3" class="acordeon-contenido p-3 ">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quae totam cupiditate fugit! Nulla cupiditate saepe,
                            numquam rem consequatur eaque cumque dicta quos illo pariatur magnam nobis quod ducimus odio quaerat.
                        </div>
                        <div  data-respuesta="4" class="acordeon-titulo mt-2 font-weight-bold ">
                            First-Class investing solutions
                            <span class="font-weight-bold iconoAcordeon" data-acordeon="4">+</span>
                        </div>
                        <div id="renglon__4" class="acordeon-contenido p-3 ">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quae totam cupiditate fugit! Nulla cupiditate saepe,
                            numquam rem consequatur eaque cumque dicta quos illo pariatur magnam nobis quod ducimus odio quaerat.
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>

    <?php $this->vista("_complementos/menus/footer") ?>
</body>

</html>