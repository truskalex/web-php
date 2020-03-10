<?php require_once APPROOT.'/views/inc/header.php';?>
<?php
$db = mysqli_connect("localhost", "root", "", "web-php");

if(isset($_POST['post'])){
    $title = strip_tags($_POST['title']);
    $content = strip_tags($_POST['content']);

    $title = mysqli_real_escape_string($db, $title);
    $content = mysqli_real_escape_string($db, $content);

    $date = date("jS \of F Y h:i:s A");


    $sql = "INSERT INTO posts (user_id, title, content) VALUES ('3','$title', '$content')";

    sleep (1);
    mysqli_query($db, $sql);
    header("Location: ./pages");
}
?>

    <!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <input placeholder="Title" name="title" type="text" autofocus size="69"><br>
        <textarea placeholder="Content" name="content" rows="69" cols="69"></textarea><br>
        <input name="post" type="submit" value="Post"><hr>

    </form>
    </body>
    </html>
<?php require_once APPROOT.'/views/inc/footer.php';?>