<div id="blog">
    <h2 id="blog1">

   <a href="/main/single/<?php echo $serial_num;?>"> 

   <?php
        echo $blog_name;
    ?>
    </a>


    </h2>
<h3>
     <?php
        echo $author_name;
    ?>
    </h3>

<h4>
     <?php
        echo $author_email;
    ?>
    </h4>


<h4><?php
        echo $publish_date;
    ?></h4>

<p><?php
        echo $blog_content;
    ?></p>




<form>
<input type="submit" id="submit" name="submit" value="UPDATE">
</form>
<a href="/main/updateBlog/<?php echo $serial_num;?>">
<?php
               echo $submit;

    ?>
    </a>


    
</div>

