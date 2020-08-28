<body class="image">
	<div id="mainheading">
<h1>Megha_Blog !!</h1>
</div>
   <nav id="nav">
    <ul>
        <li><a  href="/main/Home"><span>Home</span></a></li>
        <li> <a href="/main/listblog" ><span>Blog Listing</span></a></li>
        <li><a  href="/main/single"><span>View Single Blog</span></a></li>
        <li><a  href="/main/newBlog"><span>Add New Blog</span></a></li>
        <?php if($_SESSION["isLoggedin"]){

            echo('<li><a  href="/main/newBlog"><span>Add New Blog</span></a></li>');
            echo('<li><a  href="/main/newBlog"><span>Sign Out</span></a></li>');


        }
        else{
            echo('<li><a  href="/main/Index"><span>Login</span></a></li>');
        }
        ?>

        

    </ul>
</nav>