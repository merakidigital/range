<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./assets/local/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<style>
    .c-principal {

        color: #21456c;
    }

    nav {
        position: absolute;
        background-color: #a2cdff61;
        z-index: 1;
    }


    .banner {
        background-image: url("./assets/imgs/home1.jpg");
        height: 100vh;
        background-size: cover;
    }

    .bg-banner {
        background-color: #0000008f;
        width: 100%;
        height: 100%;
        position: absolute;
    }

    .z1 {
        z-index: 1;
    }

    .carta {
        background-color: #dce4f1;
        border-radius: 25px;
        padding: 3rem 1.3rem;
    }

    #section2 {
        background-color: #303659;
    }

    #section2 button {
        color: #21456c;
    }

    #img2 {
        background-image: url("./assets/imgs/img2.jpg");
        background-size: cover;
    }

    @media (max-width: 512px) {
        .display-1 {
            font-size: 3rem !important;
        }

        #img2 {
            background-image: url("./assets/imgs/img2.jpg");
            background-size: cover;
            height: 500px;
        }

        #section3 {}

        .carta {
            background-color: #dce4f1;
            border-radius: 25px;
            padding: 2rem 1rem;
        }
    }
</style>

<body class="bg-white h-100">

    <div class="banner position-relative">

        <nav class="  w-100 p-4  px-5   d-flex justify-content-between px-5 pt-5">

            <div class="bg-white">
                <img src="" alt="" srcset="" width="50" height="50">
            </div>
            <div class="row font-weight-bold h-100 align-items-center d-none d-sm-block">
                <a href="./Home" class="c-principal px-5">Home</a>
                <a href="./About" class="c-principal px-5">About</a>
                <a href="./Services" class="c-principal px-5">Services</a>
                <a href="./Team" class="c-principal px-5">Team</a>
                <a href="./Contact" class="c-principal px-5">Contact</a>
            </div>
        </nav>
        <div class="d-flex justify-content-center align-items-center flex-column  h-100">

            <h1 class="display-1 text-white z1 font-weight-bold text-center">Range Counselors</h1>
            <label class="text-white z1 ">A boutique commercial & transactional law firm</label>
            <div class="bg-banner"></div>
        </div>
    </div>
    <section id="section1" class="my-5 w-100 container">
        <div class="container text-center px-5 mb-5">
            <h1>Our Core Practices Areas</h1>
            <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam libero distinctio a ad officiis vitae suscipit illum.</label>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 mt-3 mt-sm-0 ">
                <div class="carta text-center d-flex flex-column justify-content-between align-items-center h-100 ">

                    <img src="" alt="Services" sizes="" srcset="" class="bg-black" width="50" height="50">
                    <h5 class="my-5">Oilfield Services</h5>
                    <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. quam vitae minima eaque provident iusto esse veniam nobis dolorem laudantium. Atque.</label>
                </div>
            </div>
            <div class="col-12 col-md-4 mt-3 mt-sm-0">
                <div class="carta text-center d-flex flex-column justify-content-between align-items-center h-100 ">

                    <img src="" alt="Services" sizes="" srcset="" class="bg-black" width="50" height="50">
                    <h5 class="my-5">Acquisitions,Diverstitures & Joint Ventures</h5>
                    <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. quam vitae minima eaque provident iusto esse veniam nobis dolorem laudantium. Atque.</label>
                </div>
            </div>
            <div class="col-12 col-md-4 mt-3 mt-sm-0">
                <div class="carta text-center d-flex flex-column justify-content-between align-items-center h-100 ">

                    <img src="" alt="Services" sizes="" srcset="" class="bg-black" width="50" height="50">
                    <h5 class="my-5">Commercial & International Transactions</h5>
                    <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. quam vitae minima eaque provident iusto esse veniam nobis dolorem laudantium. Atque.</label>
                </div>
            </div>

        </div>
    </section>
    <section id="section2" class=" ">
        <div class="row w-100 h-100 m-0">

            <div class="col-12 col-md-6 ">
                <div class=" text-white    py-5 align-items-center d-flex flex-column justify-content-lg-between h-100">

                    <h3>Why choose us</h3>

                    <div class=" d-flex flex-column">
                        <h5 class="font-weight-bold"> Leading provider</h5>
                        <label>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</label>
                    </div>
                    <div class=" d-flex flex-column">
                        <h5 class="font-weight-bold"> Award Winning</h5>
                        <label>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</label>
                    </div>
                    <div class=" d-flex flex-column">
                        <h5 class="font-weight-bold"> International Counseling</h5>
                        <label>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</label>
                    </div>
                    <button class="rounded-pill bg-white   py-2 px-5 font-weight-bold">GET IN TOUCH</button>

                </div>
            </div>
            <div id="img2" class="col-12 col-md-6">

            </div>

        </div>
    </section>

    <section id="section3" class="h-50  ">
        <div class="row h-100 w-100 m-0">

            <div class="col-12 col-sm-6 d-flex justify-content-center align-items-center">Mapa</div>
            <div class="col-12 col-sm-6  d-flex flex-column justify-content-center align-items-center">
                <h1>Specialty Practice:<br>
                    Oilfield Services</h1>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi praesentium impedit ipsa voluptas voluptate rem. Perspiciatis, cupiditate? Eius, ipsam sequi ab iusto dicta architecto minus ipsa et omnis libero molestias?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi praesentium impedit ipsa voluptas voluptate rem. Perspiciatis, cupiditate? Eius, ipsam sequi ab iusto dicta architecto minus ipsa et omnis libero molestias?</p>

            </div>
        </div>
    </section>
    <section class="px-2 px-5">
        <h1 class="text-center">Featured clients</h1>
        <div class="row p-2 mb-5 h-25  w-100 m-0">

            <img class="col-6 col-sm-3  w-100 p-2" src="./assets/imgs/home1.jpg">
            <img class="col-6 col-sm-3  w-100 p-2" src="./assets/imgs/home1.jpg">
            <img class="col-6 col-sm-3  w-100 p-2" src="./assets/imgs/home1.jpg">
            <img class="col-6 col-sm-3  w-100 p-2" src="./assets/imgs/home1.jpg">
        </div>


    </section>
    <?php $this->vista("_complementos/menus/footer") ?>
</body>

</html>