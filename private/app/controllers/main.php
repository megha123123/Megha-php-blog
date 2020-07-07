<?php

class Main extends Controller {

    function __construct() {
        parent::__construct();
    }
    /*
     * http://localhost/
     */
    function Index () {

        $this->view("template/header");
        $this->view("template/nav");
        $this->view("template/middle");
        $this->view("template/footer");

        
    }
    function listblog () {

            $this->view("template/header");
            $this->view("template/nav");
            $this->view("list/index");
            $this->view("template/footer");


    }

    function single () {

             $this->view("template/header");
             $this->view("template/nav");
             $this->view("singleblog/index");
             $this->view("template/footer");


    }
    
    
}

?>