<?php  session_start(); 

class BlogModel extends Model{
    function __construct(){
        parent::__construct();
        $this->db = new PDO("mysql:host=db;dbname=database","root","root");

    }

    function DbVersion(){
        $sql = 'SELECT VERSION()';
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetch();
        return $res[0];

    }
    function getList(){

         $sql = 'SELECT * FROM blog_lists';
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;

    }
    function getSingleBlog($serial_num=1){

        $sql ='SELECT * FROM blog_lists WHERE serial_num = ?';
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array($serial_num));
        $res = $stmt->fetch();
        return $res;
    }

    function getInsertNew($title,$author,$content,$email,$date){
        $sql = 'INSERT INTO blog_lists (blog_name, author_name, blog_content,author_email,publish_date) VALUES (?,?,?,?,?)';
        $stmt = $this->db->prepare($sql);

        $val=array($title,$author,$content,$email,$date);
        $stmt->execute($val);


        $res = $stmt->fetchAll();
        return $res;
    }

    function getUpdate($title,$author,$content,$email,$date,$serial_num){
        $sql = 'UPDATE blog_lists SET blog_name = ?, author_name = ?, blog_content = ?,author_email = ?,publish_date = ? WHERE serial_num = ?';
        $stmt = $this->db->prepare($sql);

        $val=array($title,$author,$content,$email,$date,$serial_num);
        $stmt->execute($val);


       // $res = $stmt->fetchAll();
       // return $res;
    
    }


    


function getLogin($username){
    $sql = 'SELECT password_hash FROM blog_author WHERE author_email = ? ';
    $stmt = $this->db->prepare($sql);
    $val=array($username);
    $stmt->execute($val);
    $res = $stmt->fetch();
    return $res[0];


}

        
    
}