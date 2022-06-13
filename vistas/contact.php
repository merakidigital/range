<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="./assets/local/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>




<body class="bg-white pagina">
    <section class="section-1 row   p-sm-5 container">
        <div class="col-12 col-sm-6 border-right">
            <div class="d-flex flex-column p-4">
                <h1>Get in touch</h1>
                <h5>Send a Message</h5>
                <label>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti in eos aliquid blanditiis. </label>
                <form  id="form-contac" class="row">
                    <div class="col-12 col-sm-12 col-md-6 p-0 pr-sm-2">
                        <h6>Name</h6>
                        <input type="text" class="w-100">
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 p-0 ">
                        <h6>Email Address</h6>
                        <input type="text" class="w-100">
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 p-0 pr-sm-2">
                        <h6>Company Name</h6>
                        <input type="text" class="w-100">
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 p-0">
                        <h6>Phone Number</h6>
                        <input type="text" class="w-100">
                    </div>
                    <div class="col-12 p-0">
                        <h6>Message</h6>
                        <textarea class="form-control"></textarea>
                    </div>
                </form>

            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="d-flex flex-column justify-content-around align-items-center h-100">

                <div>
                    <h5>Call us</h5>
                    <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, atque velit asperiores odit </label>
                    <div>
                        <p>555-555-555</p>
                    </div>
                </div>
                <div>
                    <h5>Email us</h5>
                    <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, atque velit asperiores odit </label>
                    <div>
                        <p>hello@rangecounselor.com</p>
                    </div>

                </div>
            </div>
        </div>


    </section>
    <section class="section-2 my-5">
        <div class="row m-0">

            <div id="s-2_1" class="col-12 col-sm-6">
                <div class="container p-5">
                    <h2 class="display-4 font-weight-bold">Frecuently</h2>
                    <h2 class="display-4 font-weight-bold">Asked</h2>
                    <h2 class="display-4 font-weight-bold">Questions.</h2>
                </div>
            </div>
            <div id="s-2_2" class="col-12 col-sm-6">
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