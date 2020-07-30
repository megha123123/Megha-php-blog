<?php
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
        
    
}