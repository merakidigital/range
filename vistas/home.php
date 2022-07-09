<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./assets/local/bootstrap.min.css">
    <script src="<?= $this->base_url() ?>/assets/local/jquery-3.5.1.slim.min.js"></script>
    <script src="<?= $this->base_url() ?>/assets/local/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/mainMobile.css">
    <script src="./assets/js/app.js"></script>
</head>

<body id="p-home" class="bg-white h-100">
    <nav id="navMenu" class="  w-100    pb-4 pt-1   d-flex justify-content-between p-0 px-sm-5 pt-sm-4">

        <div class="content-logo-home px-4 px-sm-0">
            <img src="./assets/imgs/logo-header.png" width="100px" height="auto" id="logo-home">
            <i id="btnMenu" class="fas fa-align-justify" style="color:#fff;display:none"></i>
        </div> 
        <div id="nav-content-items"  class="row font-weight-bold h-auto align-items-center ">
            <a href="./Home" class="text-white px-5 xsmall-text font-weight-bold menu-desk-item">HOME</a>
            <a href="./About" class="text-white px-5 xsmall-text font-weight-bold menu-desk-item">ABOUT</a>
            <a href="./Services" class="text-white px-5 xsmall-text font-weight-bold menu-desk-item">SERVICES</a>
            <a href="./Team" class="text-white px-5 xsmall-text font-weight-bold menu-desk-item">TEAM</a>
            <a href="./Contact" class="text-white px-5 xsmall-text font-weight-bold menu-desk-item">CONTACT</a>
        </div>
    </nav>
    <div class="banner position-relative">


        <div class="d-flex justify-content-center align-items-center flex-column  h-100">

            <h1 class="text-white z1 font-weight-bold text-center">Range Counselors</h1>
            <h4 class="text-white z1 text-center medium-text">A boutique commercial & transactional law firm</h4>


            <div class="bg-banner"></div>
            <button href="./Contact" class="primary-btn">GET IN TOUCH</button>
        </div>
    </div>

    <section id="section1" class="mb-5 w-100 container">
        <div class="row shadow top5 bg-white">
            <div class="col-12 col-md-4 mt-3 mt-sm-0 ">
                <div class="text-center d-flex flex-column justify-content-between align-items-start h-100 p-3 p-sm-5">

                    <img src="./assets/imgs/icons/oil-rig.svg" alt="Services" sizes="" srcset="" class="bg-black" width="50" height="50">
                    <h4 class="my-4 font-weight-bold text-left">Oilfield Services</h4>
                    <label class=" text-left small-text">We provide comprehensive oil and gas industry law services, including contract review, lease negotiations, and drafting agreements.</label>
                </div>
            </div>
            <div class="col-12 col-md-4 mt-3 mt-sm-0">
                <div class="h-s-1-bordes text-center d-flex flex-column justify-content-between align-items-start h-100 p-3 p-sm-5">

                    <img src="./assets/imgs/icons/acquisitions.svg" alt="Services" sizes="" srcset="" class="bg-black" width="50" height="50">
                    <h4 class="my-4 font-weight-bold text-left">Acquisitions,Diverstitures & Joint Ventures</h4>
                    <label class=" text-left small-text">We're focused on helping our clients and creating value in every major category of deal across every investment stage and geography.</label>
                </div>
            </div>
            <div class="col-12 col-md-4 mt-3 mt-sm-0">
                <div class="h-s-1-bordes text-center d-flex flex-column justify-content-between align-items-start h-100 p-3 p-sm-5 ">

                    <img src="./assets/imgs/icons/transactions.svg" alt="Services" sizes="" srcset="" class="bg-black" width="50" height="50">
                    <h4 class="my-4 font-weight-bold text-left">Commercial & International Transactions</h4>
                    <label class=" text-left small-text">Whether you need help in drafting a commercial contract, setting up a joint venture or closing an acquisition, our team is ready for the challenge.</label>
                </div>
            </div>

        </div>
    </section>
    <section id="section2" class="">
        
        <div class="row w-100 h-100 m-0  mobile-reverse" style="overflow: hidden;">

            <div class="col-12 col-md-6 bg-blue-dark">
                <div class=" text-white    py-5 px-5 align-items-center d-flex flex-column justify-content-lg-between h-100">

                    <h2 class="font-weight-bold text-left">Why choose us <span style="display: block;border:solid;width:25%;"></span></h2>


                    <div class=" d-flex flex-column justify-content-start mt-3 w-100">
                        <h4 class="font-weight-bold"> Industry-specific experience</h4>
                        <label class="small-text">Our transactional law attorneys can assist you with oil and gas rights of way, securing leases, drilling, and starting operations.
                        </label>
                    </div>
                    <div class=" d-flex flex-column justify-content-start mt-3 w-100">
                        <h4 class="font-weight-bold">A team of legal professionals</h4>
                        <label class="small-text">Our attorneys and legal experts have the knowledge and experience to handle your transactions and corporate needs</label>
                    </div>
                    <div class=" d-flex flex-column justify-content-start mt-3 w-100">
                        <h4 class="font-weight-bold">International Network</h4>
                        <label class="small-text">Our team has established connections to resource producing countries all over the world. </label>
                    </div>
                    <button class="rounded-pill bg-white mt-3 py-2 px-5 font-weight-bold">GET IN TOUCH</button>

                </div>
            </div>
            <div id="img2" class="col-12 col-md-6 p-0 m-0 p-relative">
                <img src="./assets/imgs/img7.png" alt="Services" sizes="" srcset="" class="bg-black "  >

            </div>

        </div>
    </section>
    <section id="section3" class="mt-9 container">
        <div class="row h-100 w-100 m-0">

            <div class="col-12 col-sm-6 d-flex justify-content-center align-items-center">

                <!-- amCharts javascript sources -->
                <script type="text/javascript" src="https://www.amcharts.com/lib/3/ammap.js"></script>
                <script type="text/javascript" src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>

                <!-- amCharts javascript code -->
                <script type="text/javascript">
                    AmCharts.makeChart("map", {
                        "type": "map",
                        "pathToImages": "http://www.amcharts.com/lib/3/images/",
                        "addClassNames": true,
                        "fontSize": 15,
                        "color": "#000000",
                        "projection": "mercator",
                        "backgroundAlpha": 1,
                        "backgroundColor": "rgba(255,255,255,1)",
                        "dataProvider": {
                            "map": "worldLow",
                            "getAreasFromMap": true,
                            "images": [{
                                    "top": 40,
                                    "left": 60,
                                    "width": 80,
                                    "height": 40,
                                    "pixelMapperLogo": true,
                                   
                                    "url": "http://www.amcharts.com"
                                },
                                {
                                    "selectable": true,
                                    "longitude": -31.6087,
                                    "latitude": 85.1075,
                                    "svgPath": "M3.5,13.277C3.5,6.22,9.22,0.5,16.276,0.5C23.333,0.5,29.053,6.22,29.053,13.277C29.053,14.54,28.867,15.759,28.526,16.914C26.707,24.271,16.219,32.5,16.219,32.5C16.219,32.5,4.37,23.209,3.673,15.542C3.673,15.542,3.704,15.536,3.704,15.536C3.572,14.804,3.5,14.049,3.5,13.277C3.5,13.277,3.5,13.277,3.5,13.277M16.102,16.123C18.989,16.123,21.329,13.782,21.329,10.895C21.329,8.008,18.989,5.668,16.102,5.668C13.216,5.668,10.876,8.008,10.876,10.895C10.876,13.782,13.216,16.123,16.102,16.123C16.102,16.123,16.102,16.123,16.102,16.123",
                                    "color": "rgba(255,255,255,0.8)",
                                    "scale": 1
                                }
                            ],
                            "areas": [{
                                    "id": "AR",
                                    "title": "Argentina - 3 Clients",
                                    "color": "rgba(101,112,146,0.8)"
                                },
                                {
                                    "id": "BR",
                                    "title": "Brazil - 3 Clients",
                                    "color": "rgba(40,98,180,0.95)"
                                },
                                {
                                    "id": "CA",
                                    "title": "Canada - 10 Clients",
                                    "color": "rgba(16,65,87,0.8)"
                                },
                                {
                                    "id": "IN",
                                    "title": "India - 14 Clients",
                                    "color": "rgba(55,104,205,0.8)"
                                },
                                {
                                    "id": "MX",
                                    "title": "Mexico - 10 Clients",
                                    "color": "rgba(133,151,189,0.8)"
                                },
                                {
                                    "id": "SA",
                                    "title": "Saudi Arabia - 5 Clients",
                                    "color": "rgba(39,50,173,0.8)"
                                },
                                {
                                    "id": "US",
                                    "title": "United States - 80 Clients",
                                    "color": "rgba(75,110,216,0.8)"
                                }
                            ]
                        },
                        "balloon": {
                            "horizontalPadding": 15,
                            "borderAlpha": 0,
                            "borderThickness": 1,
                            "verticalPadding": 15
                        },
                        "areasSettings": {
                            "color": "rgba(130,130,130,1)",
                            "outlineColor": "rgba(255,255,255,0)",
                            "rollOverOutlineColor": "rgba(255,255,255,0)",
                            "rollOverBrightness": 20,
                            "selectedBrightness": 20,
                            "selectable": false,
                            "unlistedAreasAlpha": 0,
                            "unlistedAreasOutlineAlpha": 0
                        },
                        "imagesSettings": {
                            "alpha": 1,
                            "color": "rgba(130,130,130,1)",
                            "outlineAlpha": 0,
                            "rollOverOutlineAlpha": 0,
                            "outlineColor": "rgba(255,255,255,1)",
                            "rollOverBrightness": 20,
                            "selectedBrightness": 20,
                            "selectable": true
                        },
                        "linesSettings": {
                            "color": "rgba(130,130,130,0)",
                            "selectable": true,
                            "rollOverBrightness": 20,
                            "selectedBrightness": 20
                        },
                        "zoomControl": {
                            "zoomControlEnabled": false,
                            "homeButtonEnabled": false,
                            "panControlEnabled": false,
                            "right": 38,
                            "bottom": 30,
                            "minZoomLevel": 0.25,
                            "gridHeight": 100,
                            "gridAlpha": 0.1,
                            "gridBackgroundAlpha": 0,
                            "gridColor": "#FFFFFF",
                            "draggerAlpha": 1,
                            "buttonCornerRadius": 2
                        }
                    });
                </script>
                </head>

                <div id="map" style="width: 100%; height: 300px;"></div>


            </div>
            <div class="col-12 col-sm-6  d-flex flex-column justify-content-center align-items-start">
                <h2 class="font-weight-bold">Specialty Practice:<br>
                    Oilfield Services</h2>
                <p class="small-text">With transactions successfully completed in more than 50 countries, the Range professionals understand the needs of oilfield service companies, the reality of industry practice risk allocation and, most importantly, how to “get things done” in different jurisdictions. </p>
                <p class="small-text">The Range team has the ability to tap it’s unique oilfield network of legal, finance and operational contacts around the world for advice on contracting, handling disputes and starting/exiting business operations in-country.</p>
            </div>
        </div>
    </section>
    <section class="mt-9 container">
        <h2 class="text-center font-weight-bold">Featured clients</h2>
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