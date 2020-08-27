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



             $check = password_hash("mypassword",PASSWORD_DEFAULT);
    echo($check);


    }

    function newBlog() {

        // $this->model('blogmodel');
            //$new = $this->blogmodel->getInsertNew($title,$author,$content,$email,$dates);


        $this->view("template/header");
        $this->view("template/nav");
        $this->view("new/new");
        $this->view("template/footer");

        
    }

    function updateBlog($serial=null){

        $this->model('blogmodel');
           

           if(isset($_POST['submit'])){
               
    $title = $_POST['title'];
    $author = $_POST['author'];
    $email = $_POST['email'];
    $dates = $_POST['dates'];
    $content = $_POST['content'];
    $serial = $_POST['serial'];

   
    $new = $this->blogmodel->getUpdate($title,$author,$content,$email,$dates,$serial);


}
$post = $this->blogmodel->getSingleBlog($serial);


        $this->view("template/header");
        $this->view("template/nav");
        $this->view("update/update",$post);
        $this->view("template/footer");
    }

function login() {

    if($_SERVER["REQUEST_METHOD"] == "POST" && (empty($_SESSION["isLoggedIn"]) || !$_SESSION["isLoggedIn"])){
    $username= htmlentities($_POST["email"]);
    $password = htmlentities($_POST["password"]);
    
    
    $this->model('blogmodel');
           $new = $this->blogmodel->getLogin($username);

    $isChecked = password_verify($password,$new);
    $_SESSION["isLoggedin"] = $isChecked;
    $_SESSION["email"] = $username;

    if($_SESSION["isLoggedin"]){
    header("Location: /");
    }
    
        //$this->view("template/header");
        //$this->view("template/nav");
       // $this->view("login/login",$new);
       // $this->view("template/footer");
    
    
    else{
        $this->view("template/header");
        $this->view("template/nav");
        
    }
    
    }
    


 


 
}
}
?>