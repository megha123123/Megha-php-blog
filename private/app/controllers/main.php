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
            $this->model('blogmodel');
            $list = $this->blogmodel->getList();

            
            

            $this->view("template/header");
            $this->view("template/nav");
            foreach($list as $item){
                            $this->view("list/index",$item);

            }
            $this->view("template/footer");


    }

    function single ($id=1) {

        $this->model('blogmodel');
            $single_blog = $this->blogmodel->getSingleBlog($id);

             $this->view("template/header");
             $this->view("template/nav");
             $this->view("singleblog/index",$single_blog);
             $this->view("template/footer");


    }

    function newBlog() {

        // $this->model('blogmodel');
            //$new = $this->blogmodel->getInsertNew($title,$author,$content,$email,$dates);


        $this->view("template/header");
        $this->view("template/nav");
        $this->view("new/new");
        $this->view("template/footer");

        
    }

    function updateBlog(){
        $this->view("template/header");
        $this->view("template/nav");
        $this->view("update/update");
        $this->view("template/footer");
    }
    
    
}

?>