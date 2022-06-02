<?php

/* Clase principal */

class App
{
    /* Cambiar los valores de acuerdo a su proyecto */

    /* $_base_url
        METODO PRINCIPAL: base_url()
        Direccion del proyecto: 
            RECOMENDABLE:   DEJAR EN BLANCO PARA USAR NOTACIÓN ../ 
            OPCIONAL:       LLENAR SI QUIERES ESPECIFICAR OTRA DIRECCIÓN
      
      */
    public $_localhost = "/range";

    public $_base_url = "";


    //RUTAS DE LAS CARPETAS; NOMBRE DE LOS FOLDERS
    public $locacion_controladores  = "controladores"; 
    public $locacion_vistas         = "vistas";  

    /* Controlador a cargar pro default */
    public $controlador_default = "Home";

    /* No cambiar los datos de abajo */

    public function __construct()
    {

        if (isset($_GET['url'])) {
            /** Cuando se llama con una pagina: sitio.com/pagina * */
            $metodo = $_GET['url'];
 
            $archivoControlador = $this->locacion_controladores . "/" . $this->controlador_default . ".php";

            /**SI LA URL TIENE UN METODO */
            $url = rtrim($metodo, '/');

            $url = explode('/', $url);

            if ($metodo == "" || $metodo == "index.php") {
                echo "Vacio o Index";
            } else {
                $archivoControlador = $this->locacion_controladores . '/' . $this->controlador_default . ".php";
                require_once $archivoControlador;
                $controlador = new $this->controlador_default;

                if (method_exists($controlador, $url[0])) {
                    $controlador->{$url[0]}();
                    return;
                } else {

                    $error = "No existe  Controlador $archivoControlador";
                    $this->page_404($error);
                    exit;
                }
            }
            
        } else {
            /** Cuando se llama a la raiz: sitio.com/* */
            $archivoControlador = $this->locacion_controladores . "/" . $this->controlador_default . ".php";

            if (file_exists($archivoControlador)) {

                require_once $archivoControlador;
                $controlador = new $this->controlador_default;
                $controlador->index();
            } else {
                $error = "No Existe el Archivo " . $archivoControlador;
                $this->page_404($error);
            }
            return;
        }
    }

    //METODO IMPORTANTE: 
    public function base_url($url = "")
    {
        if ($this->_localhost) {

            return  $this->_localhost . $url;
        }
        if ($this->_base_url == "") {
            return  "../" . $url;
        } else {

            return $this->_base_url . $url;
        }
    }


    public function page_404($error = null)
    {
        echo "vista no encontrada";
        //include_once  $this->locacion_vistas . "/dadoroom/function_404.php";
    }

    public function function_404($error = null)
    {
        include_once $this->locacion_vistas . "/dadoroom/function_404.php";
    }

    public function entidad_404($error = "Entidad No Encontrada")
    {
        include_once $this->locacion_vistas . "/dadoroom/function_404.php";
    }

    public function user_404($error = null)
    {
        include_once $this->locacion_vistas . "/dadoroom/user_404.php";
    }

    //LLAMAR A UNA 
    //$vista: direccion dentro de la caperta $locacion_vista, sin extencion, se agrega automaticamente el .php
    public function vista($vista, $datos = null, $soloRuta = false)
    {
        //si $soloRuta esta activada, entonces regresara el include en una variable,
        if ($soloRuta) {
            if ($datos != null) {

                extract($datos);
            }
            return include($this->locacion_vistas . "/" . $vista . ".php");
        } else {
            //EN CASO CONTRARIO, BUSCARA LA RUTA PROPORCIONADA
            if (file_exists($this->locacion_vistas . "/" . $vista . ".php")) {
                //EN CASO DE QUE EXISTA, VERIFICA SI $DATOS ES VACIO, 
                if ($datos != null) {
                    //SI NO ES VACIO, ENTONCES DESPLIEGA TODOS LAS VARIABLES DENTRO DEL ARRAY
                    extract($datos);
                }
                //MOSTRAR LA RUTA
                include_once $this->locacion_vistas . "/" . $vista . ".php";
            } else {
                //EN CASO DE QUE NO SE ENCUENTRE LA RUTA
                echo "VISTA NO ENCONTRADA";
                echo "<br>";
                echo $this->locacion_vistas . "/" . $vista . ".php";
            }
        }
    }

    public function header($link)
    {
        header("Location: " . $this->base_url($link));
    }
}
