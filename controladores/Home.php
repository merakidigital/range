<?php

class Home extends App
{

    function __construct()
    {
    }

    public function index()
    {
        $this->home();
    }

    public function home()
    {
        $this->vista("home");
    }
    public function about()
    {
        $datos["titulo"] = "About Us";
        $datos["menu"] = $this->vista("_complementos/menus/menusPaginas", $datos, true);

        $this->vista("about", $datos);
    }
    public function contact()
    {
        $complemento["titulo"] = "Contact";
        $datos["menu"] = $this->vista("_complementos/menus/menusPaginas", $complemento, true);
        $this->vista("contact", $datos);
    }
    public function services()
    {
        $complemento["titulo"] = "Services";
        $datos["menu"] = $this->vista("_complementos/menus/menusPaginas", $complemento, true);
        $this->vista("services", $datos);
    }
    public function team()
    {
        $complemento["titulo"] = "Team";
        $datos["menu"] = $this->vista("_complementos/menus/menusPaginas", $complemento, true);
        $this->vista("team", $datos);
    }
}
