<form method="post">


<div class="form">

    <input type="hidden" id="serial" name="serial" value="<?php echo $serial_num?>">
</div>
    <div class="form">

    <label for="title"><b>Title</b></label>
    <input type="text" name="title" id="title" placeholder="Enter Title" value="<?php echo $blog_name?>">
    <br>
</div>
<div class="form">

    <label for="author"><b>Author</b></label>
    <input type="text" name="author" id="author" placeholder="Enter Author" value="<?php echo $author_name?>">
    <br>
</div>

 <div class="form">

    <label for="email"><b>Email</b></label>
    <input type="email" name="email" id="email" placeholder="Enter Email" value="<?php echo $author_email?>">
    <br>
</div>

<div class="form">

    <label for="dates"><b>Publish Date</b></label>
    <input type="date" name="dates" id="dates" placeholder="Enter Publish Date" value="<?php echo $publish_date?>">
    <br>
</div>

<div class="form">

    <label for="content"><b>Content</b></label>
    <textarea id="content" name="content" rows="20" cols="20" placeholder="Enter Content"><?php echo $blog_content?></textarea>
    <br>
</div>

<div class="form">

    <input type="submit" id="submit" name="submit" value="SUBMIT">
</div>
</form>

