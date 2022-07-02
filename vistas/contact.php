<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="./assets/local/bootstrap.min.css">
    <script src="<?= $this->base_url() ?>/assets/local/jquery-3.5.1.slim.min.js"></script>
    <script src="<?= $this->base_url() ?>/assets/local/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/mainMobile.css">
    <script src="./assets/js/app.js"></script>
</head>

<body id="p-contact" class="bg-white pagina">
    <section class="section-1   container">
        <div class="row">

            <div class="col-12 col-sm-6 border-right">
                <div class="d-flex flex-column p-4">
                    <h2 class="c-darkblue font-weight-bold">How can we help?</h2>
                    <h4 class="c-darkblue font-weight-bold">Send a Message</h4>
                    <label class="c-darkblue small-text">Fill out this form and someone from our team will get in touch with you</label>
                    <form id="form-contac" class="row">
                        <div class="col-12 col-sm-12 col-md-6  pr-sm-2">
                            <h6 class="small-text">Name</h6>
                            <input type="text" class="w-100">
                        </div>
                        <div class="col-12 col-sm-12 col-md-6  ">
                            <h6 class="small-text">Email Address</h6>
                            <input type="text" class="w-100">
                        </div>
                        <div class="col-12 col-sm-12 col-md-6  pr-sm-2">
                            <h6 class="small-text">Company Name</h6>
                            <input type="text" class="w-100">
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 ">
                            <h6 class="small-text">Phone Number</h6>
                            <input type="text" class="w-100">
                        </div>
                        <div class="col-12 ">
                            <h6 class="small-text">Message</h6>
                            <textarea class="form-control"></textarea>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="p-4">

                    <div class="row">

                        <div class="col-12">
                            <h3 class="c-darkblue font-weight-bold">Locations</h4>
                        </div>

                        <div class="col-12 col-sm-6 mt-4">
                            <h5 class="c-darkblue font-weight-bold">Houston (Head Office)</h5>
                            <label class="small-text"> 95 Third Street </label>
                            <label class="small-text"> 2nd Floor</label>
                            <label class="small-text"> San Francisco, CA 94103</label>
                            <label class="small-text"> United States</label>
                        </div>
                        <div class="col-12 col-sm-6 mt-4">
                            <h5 class="c-darkblue font-weight-bold">Boston</h5>
                            <label class="small-text"> 75 State Street </label>
                            <label class="small-text"> Suite 100</label>
                            <label class="small-text"> Boston, MA 02109</label>
                            <label class="small-text"> United States</label>
                        </div>
                        <div class="col-12 col-sm-6 mt-4">
                            <h5 class="c-darkblue font-weight-bold">San Francisco</h5>
                            <label class="small-text"> 95 Third Street </label>
                            <label class="small-text"> 2nd Floor</label>
                            <label class="small-text"> San Francisco, CA 94103</label>
                            <label class="small-text"> United States</label>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <section class="section-2 my-5 container">
        <div class="row m-0">

            <div id="s-2_1" class="col-12 col-sm-6">
                <div class="container p-5">
                    <h1 class="c-darkblue font-weight-bold">Frequently</h1>
                    <h1 class="c-darkblue font-weight-bold">Asked</h1>
                    <h1 class="c-darkblue font-weight-bold">Questions.</h1>
                </div>
            </div>
            <div id="s-2_2" class="col-12 col-sm-6">
                <div class="container">
                    <div class="acordeon  px-5 ">
                        <div class="acordeon-titulo font-weight-bold active" data-respuesta="1">
                            Where we can help you?
                            <span class="font-weight-bold iconoAcordeon" data-acordeon="1">-</span>
                        </div>
                        <div id="renglon__1" class="acordeon-contenido p-3 small-text" style="display: block;">
                            Working with advanced technology and know-how businesses in the energy transition, Range Counselors is a driving force for international business expansion.

                        </div>
                        <div class="acordeon-titulo mt-2 font-weight-bold " data-respuesta="2">
                            Where we can help you?
                            <span class="font-weight-bold iconoAcordeon" data-acordeon="2">+</span>
                        </div>
                        <div id="renglon__2" class="acordeon-contenido p-3 small-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quae totam cupiditate fugit! Nulla cupiditate saepe,
                            numquam rem consequatur eaque cumque dicta quos illo pariatur magnam nobis quod ducimus odio quaerat.
                        </div>
                        <div class="acordeon-titulo mt-2 font-weight-bold " data-respuesta="3">
                            Where we can help you?
                            <span class="font-weight-bold iconoAcordeon" data-acordeon="3">+</span>
                        </div>
                        <div id="renglon__3" class="acordeon-contenido p-3 small-text">
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