<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./assets/local/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body id="p-home" class="bg-white h-100">
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
    <div class="banner position-relative">


        <div class="d-flex justify-content-center align-items-center flex-column  h-100">

            <h1 class="display-1 text-white z1 font-weight-bold text-center">Range Counselors</h1>
            <label class="text-white z1 ">A boutique commercial & transactional law firm</label>


            <div class="bg-banner"></div>
            <button href="#" class="primary-btn">GET IN TOUCH</button>
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
    <section id="section2" class="">
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
    <section id="section3" class=" ">
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
                                    "imageURL": "http://pixelmap.amcharts.com/static/img/logo-black.svg",
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
                            "outlineColor": "rgba(255,255,255,1)",
                            "rollOverOutlineColor": "rgba(255,255,255,1)",
                            "rollOverBrightness": 20,
                            "selectedBrightness": 20,
                            "selectable": true,
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
                            "color": "rgba(130,130,130,1)",
                            "selectable": true,
                            "rollOverBrightness": 20,
                            "selectedBrightness": 20
                        },
                        "zoomControl": {
                            "zoomControlEnabled": true,
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