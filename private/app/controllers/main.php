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
        $this->view("main/index");
        $this->view("template/footer");

        
    }
    function listblog () {
                $this->view("template/menu");

                $this->view("list/listing");

    }
    
    
}

?>