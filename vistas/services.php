<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($titulo) ? $titulo : "d"  ?></title>
    <link rel="stylesheet" href="./assets/local/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<style>
    #section-3 {
        background-image: url("./assets/imgs/home1.jpg");
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



<body class="bg-white ">
    <section id="section-1" class=" text-center my-5">
        <h5>OUR SERVICES</h5>
        <h1>We offer expert counseling for you</h1>
        <label>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam et sit assumenda numquam officiis architecto voluptatibus </label>
    </section>
    <section id="section-2" class=" container">
        <div class="row">
            <div class="col-12 col-sm-4 bg-primary">
                <div class="p-3 pt-4 d-flex flex-column">
                    <i class="bi bi-linkedin py-2"></i>
                    <h5>Wealth Management</h5>
                    <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit est cupiditate inventore? Repellendus autem enim, ad error ipsum quas, fuga maxime dolorem reprehenderit non deleniti. Quasi eligendi inventore quas animi!</label>
                </div>
            </div>
            <div class="col-12 col-sm-4 ">
                <div class="p-3 pt-4 d-flex flex-column">
                    <i class="bi bi-linkedin py-2"></i>
                    <h5>Wealth Management</h5>
                    <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit est cupiditate inventore? Repellendus autem enim, ad error ipsum quas, fuga maxime dolorem reprehenderit non deleniti. Quasi eligendi inventore quas animi!</label>
                </div>
            </div>
            <div class="col-12 col-sm-4 ">
                <div class="p-3 pt-4 d-flex flex-column">
                    <i class="bi bi-linkedin py-2"></i>
                    <h5>Wealth Management</h5>
                    <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit est cupiditate inventore? Repellendus autem enim, ad error ipsum quas, fuga maxime dolorem reprehenderit non deleniti. Quasi eligendi inventore quas animi!</label>
                </div>
            </div>
        </div>
    </section>
    <section id="section-3" class=" text-white my-5">
        <div class="row m-0">
            <div class="col-12 col-sm-3 p-5">
                <h1>1,470 +</h1>
                <h3>Happy Clients</h3>
            </div>
            <div class="col-12 col-sm-3 p-5">
                <h1>1,200 +</h1>
                <h3>Projects Completed</h3>
            </div>
            <div class="col-12 col-sm-3 p-5">
                <h1>25 +</h1>
                <h3>Years of Experience</h3>
            </div>
            <div class="col-12 col-sm-3 p-5">
                <h1>100M+</h1>
                <h3>USD Funding Secured</h3>
            </div>
        </div>

    </section>
    <section class="section-4 mb-5">
        <div class="row m-0">

            <div id="s-4_1" class="col-12 col-sm-6">
                <div class="container p-5">

                    <label>HOW WE WORK</label>
                    <h4>Leading the best invest manager team</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis magnam ducimus et commodi dolore accusamus ab autem</p>
                </div>
                <div class="row">

                    <div class="col-12 col-sm-6 bg-primary" style="height: 70px;">

                    </div>
                    <div class="col-12 col-sm-6">


                    </div>
                </div>
            </div>
            <div id="s-4_2" class="col-12 col-sm-6">
                <div class="container">
                    <div class="acordeon  px-5 ">
                        <div class="acordeon-titulo font-weight-bold activo">
                            First-Class investing solutions
                            <span class="font-weight-bold" data-acordeon="1">-</span>
                        </div>
                        <div id="renglon__1" class="acordeon-contenido p-3 activo">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quae totam cupiditate fugit! Nulla cupiditate saepe,
                            numquam rem consequatur eaque cumque dicta quos illo pariatur magnam nobis quod ducimus odio quaerat.
                        </div>
                        <div class="acordeon-titulo mt-2 font-weight-bold ">
                            First-Class investing solutions
                            <span class="font-weight-bold" data-acordeon="2">+</span>
                        </div>
                        <div id="renglon__2" class="acordeon-contenido p-3 ">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quae totam cupiditate fugit! Nulla cupiditate saepe,
                            numquam rem consequatur eaque cumque dicta quos illo pariatur magnam nobis quod ducimus odio quaerat.
                        </div>
                        <div class="acordeon-titulo mt-2 font-weight-bold ">
                            First-Class investing solutions
                            <span class="font-weight-bold" data-acordeon="3">+</span>
                        </div>
                        <div id="renglon__3" class="acordeon-contenido p-3 ">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quae totam cupiditate fugit! Nulla cupiditate saepe,
                            numquam rem consequatur eaque cumque dicta quos illo pariatur magnam nobis quod ducimus odio quaerat.
                        </div>
                        <div class="acordeon-titulo mt-2 font-weight-bold ">
                            First-Class investing solutions
                            <span class="font-weight-bold" data-acordeon="4">+</span>
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