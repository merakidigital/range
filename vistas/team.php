<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($titulo) ? $titulo : "Team"  ?></title>
    <link rel="stylesheet" href="./assets/local/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/mainMobile.css">
</head>


<style>
    .degradado {
        background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(254, 254, 255, 1) 24%, rgba(228, 228, 228, 1) 24%, rgba(0, 212, 255, 1) 24%);
    }

    .degradado-final {
        background: linear-gradient(270deg, rgba(255, 255, 255, 1) 0%, rgba(254, 254, 255, 1) 52%, rgba(228, 228, 228, 1) 33%, rgba(0, 212, 255, 1) 70%);
    }
</style>

<body id="p-team" class="bg-white ">
    <section id="section-1" class="my-5 container">
        <div class="text-center">
            <h5 class="c-green">OUR SPECIALISTS</h5>
            <h3 class="c-darkblue">Meet Our Leadership</h3>
            <label class="c-darkblue">Our team comprises our core team, a pool of specialist consultants and a network of in-country law firms and advisors.</label>
        </div>
    </section>
    <section class="mt-2">
        <div class="row">
            <div class="imagen col-12 col-sm-4 text-center">
                <img class="rounded-circle" src="./assets/imgs/jordan.png">
                <h4 class="c-darkblue">Jordan Strouse</h4>
                <h6 class="c-darkblue">Oil & Gas Attorney</h6>
            </div>
            <div class="imagen col-12 col-sm-4 text-center">
                <img class="rounded-circle" src="./assets/imgs/john.png">
                <h4 class="c-darkblue">John Doe</h4>
                <h6 class="c-darkblue">Oil & Gas Attorney</h6>
            </div>
            <div class="imagen col-12 col-sm-4 text-center">
                <img class="rounded-circle" src="./assets/imgs/jane.png">
                <h4 class="c-darkblue">Jane Doe</h4>
                <h6 class="c-darkblue">Oil & Gas Attorney</h6>
            </div>
        </div>
    </section>
    <section class="my-4 container">
        <div class="row mb-4 pt-5">
            <div class="col-12 col-sm-6">

                <div class="px-5 pb-5 ">

                    <img class="w-100" src="./assets/imgs/who1.png">
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="flex flex-column justify-content-center h-100 align-items-center px-5 p-sm-0 c-darkblue">

                    <h4 class="font-weight-bold c-darkblue">Jordan Strouse</h4>
                    <h6 class="c-darkblue">Oil & Gas Expert</h6>
                    <p >Jordan's primary expertise is as transactional and business counsel in the oil services and energy technologies industries, but has counseled start-ups, entrepreneurs, investors, private equity-backed ventures and growth stage portfolio companies with respect to acquisitions and international contracting. His sector knowledge in oil services and energy technologies as well as his global experience structuring cross-border and multi-cultural transactions in more than 30 countries attracts global energy/oil clients and private equity firms to represent their interests.
                    </p>
                    <p>Before starting Range Counselors, Jordan worked as in-house counsel for a publicly traded international land and offshore drilling contractor, as General Counsel of a private equity backed oil equipment venture, was based in Cape Town, South Africa as Regional General Counsel for one of the world’s largest oilfield service manufacturers and service providers before entering into private practice where he acts as outside general counsel to oil service companies, oilfield manufacturers, oil service technology and software providers, modular hybrid power providers, international marketing companies, private equity funds and venture capital investors.
                    </p>
                    <h6>Social</h6>

                    <i class="bi bi-twitter mr-2"></i>
                    <i class="bi bi-linkedin"></i>
                </div>
            </div>
        </div>
        <div class="row mb-4 pt-5">
            <div class="col-12 col-sm-6">

                <div class="px-5 pb-5">

                    <img class="w-100" src="./assets/imgs/perfil.jfif">
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="flex flex-column justify-content-center h-100 align-items-center py-5 p-5 p-sm-0">

                    <h4>Jordan Strouse</h4>
                    <h6>Oil & Gas Expert</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat necessitatibus sit,
                        quo unde quis hic aliquid eligendi asperiores nam eos cumque error iusto, tempore minima sint soluta placeat quam molestias!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat necessitatibus sit,
                        quo unde quis hic aliquid eligendi asperiores nam eos cumque error iusto, tempore minima sint soluta placeat quam molestias!</p>
                    <h6>Social</h6>

                    <i class="bi bi-twitter mr-2"></i>
                    <i class="bi bi-linkedin"></i>
                </div>
            </div>
        </div>
        <div class="row mb-4 pt-5">
            <div class="col-12 col-sm-6">

                <div class="px-5 pb-5">

                    <img class="w-100" src="./assets/imgs/perfil.jfif">
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="flex flex-column justify-content-center h-100 align-items-center py-5 p-5 p-sm-0">

                    <h4>Jordan Strouse</h4>
                    <h6>Oil & Gas Expert</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat necessitatibus sit,
                        quo unde quis hic aliquid eligendi asperiores nam eos cumque error iusto, tempore minima sint soluta placeat quam molestias!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat necessitatibus sit,
                        quo unde quis hic aliquid eligendi asperiores nam eos cumque error iusto, tempore minima sint soluta placeat quam molestias!</p>
                    <h6>Social</h6>

                    <i class="bi bi-twitter mr-2"></i>
                    <i class="bi bi-linkedin"></i>
                </div>
            </div>
        </div>
        <div class="row mb-4pt-5  pt-5">
            <div class="col-12 col-sm-6">

                <div class="px-5 pb-5 degradado-final">

                    <img class="w-100" src="./assets/imgs/perfil.jfif">
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="flex flex-column justify-content-center h-100 align-items-center py-5 p-5 p-sm-0">

                    <h4>Jordan Strouse</h4>
                    <h6>Oil & Gas Expert</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat necessitatibus sit,
                        quo unde quis hic aliquid eligendi asperiores nam eos cumque error iusto, tempore minima sint soluta placeat quam molestias!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat necessitatibus sit,
                        quo unde quis hic aliquid eligendi asperiores nam eos cumque error iusto, tempore minima sint soluta placeat quam molestias!</p>
                    <h6>Social</h6>

                    <i class="bi bi-twitter mr-2"></i>
                    <i class="bi bi-linkedin"></i>
                </div>
            </div>
        </div>
    </section>
    <?php $this->vista("_complementos/menus/footer") ?>
</body>

</html>