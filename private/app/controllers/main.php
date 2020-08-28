<?php  


class Main extends Controller {

    function __construct() {
        parent::__construct();
    }
    /*
     * http://localhost/
     */
    function Index () {
        //session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST" && (empty($_SESSION["isLoggedIn"]) || !$_SESSION["isLoggedIn"])) {

   
    $username = htmlentities($_POST["email"]);
    $password = htmlentities($_POST["password"]);
    
    
    $this->model('blogmodel');
           $new = $this->blogmodel->getLogin($username);
           
           
    

    $isChecked = password_verify($password, $new);
    $_SESSION["isLoggedin"] = $isChecked;
    $_SESSION["email"] = $username;

    if($_SESSION["isLoggedin"]) {
    header("Location: /main/Home");
    }
    
        //$this->view("template/header");
        //$this->view("template/nav");
       // $this->view("login/login",$new);
       // $this->view("template/footer");
    
    
    else{
       // $this->view("template/header");
        //$this->view("template/nav");
            header("Location: /main/Index");


    } 
}else {
        if(empty($_SESSION["isLoggedin"]) || !$_SESSION["isLoggedin"]) {


         $this->view("template/header");
       
        $this->view("login/login");

        $this->view("template/footer");
        } else {
            header("Location : /main/Home");

        }
    }

       
    }
        


function Home (){

    $this->view("template/header");
        $this->view("template/nav");
        $this->view("template/middle");
                //$this->view("login/login");
                        $this->view("template/footer");

}

        
    
    function listblog () {
                //session_start();

            $this->model('blogmodel');
            $list = $this->blogmodel->getList();

            
            

            $this->view("template/header");
            $this->view("template/nav");
            foreach($list as $item){
                            $this->view("list/index",$item);

            }
            $this->view("template/footer");
//session_destroy();

    }

    function single ($id=1) {
              //  session_start();


        $this->model('blogmodel');
            $single_blog = $this->blogmodel->getSingleBlog($id);

             $this->view("template/header");
             $this->view("template/nav");
             $this->view("singleblog/index",$single_blog);
             $this->view("template/footer");



            // $check = password_hash("mypassword",PASSWORD_DEFAULT);
                // echo($check);


    }

    function newBlog() {
               // session_start();


        // $this->model('blogmodel');
            //$new = $this->blogmodel->getInsertNew($title,$author,$content,$email,$dates);


        $this->view("template/header");
        $this->view("template/nav");
        $this->view("new/new");
        $this->view("template/footer");

        //session_destroy();
    }

    function updateBlog($serial=null){
               // session_start();


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

function login () {

    
    
    }

    function logout(){


        
         session_start();

$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();
        header("Location: /main/Index");        

    }
    


 


 
}

?>