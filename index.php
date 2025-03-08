<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- onsubmit -> data should go to test form  -->

    <!-- <form action="testform.php" method="get">
        name<input type="text" name="fname">
        age<input type="number" name="age">
        <input type="submit" value="submit" name="save">
    </form> -->


    <!-- <form action="" method="get">
        name<input type="text" name="fname">
        age<input type="number" name="age">
        <input type="submit" value="submit" name="save">
    </form> -->

    <?php
    // echo "<pre>";
    // if (empty($_GET)) {
    //     print_r($_GET);
    // }
    // echo "</pre>";
    ?>


    <?php

    // session_start();
    // $_SESSION['favcolor'] = 'blue';

    // print_r($_SESSION);
    // echo $_SESSION['favcolor']

    // 
    ?>


    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="">
        <input type="submit" value="save">
    </form>

    <?php
    if (isset($_FILES['image'])) {
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";

        $temp_name = $_FILES['image']['tmp_name'];
        $file_name = $_FILES['image']['name'];

        move_uploaded_file($temp_name, "images/one.png");
    }
    ?>


</body>

</html>