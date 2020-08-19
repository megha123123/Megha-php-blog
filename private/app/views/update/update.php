<form method="post">


<div class="form">

    <input type="hidden" id="serial" name="serial" value="">
</div>
    <div class="form">

    <label for="title"><b>Title</b></label>
    <input type="text" name="title" id="title" placeholder="Enter Title">
    <br>
</div>
<div class="form">

    <label for="author"><b>Author</b></label>
    <input type="text" name="author" id="author" placeholder="Enter Author">
    <br>
</div>

 <div class="form">

    <label for="email"><b>Email</b></label>
    <input type="email" name="email" id="email" placeholder="Enter Email">
    <br>
</div>

<div class="form">

    <label for="dates"><b>Publish Date</b></label>
    <input type="date" name="dates" id="dates" placeholder="Enter Publish Date">
    <br>
</div>

<div class="form">

    <label for="content"><b>Content</b></label>
    <textarea id="content" name="content" rows="20" cols="20" placeholder="Enter Content"></textarea>
    <br>
</div>

<div class="form">

    <input type="submit" id="submit" name="submit" value="SUBMIT">
</div>
</form>

<?php if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $email = $_POST['email'];
    $dates = $_POST['dates'];
    $content = $_POST['content'];
    $serial = $_POST['serial'];

   $this->model('blogmodel');
            $new = $this->blogmodel->getUpdate($title,$author,$content,$email,$dates,$serial_num);


}
?>