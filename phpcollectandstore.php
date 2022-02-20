<html>
<head>
    <title>subscription2.0data.php</title>
    <meta charset="utf-8">
</head'>
<style> body{background-image:url(https://www.netpremacy.com/wp-content/uploads/2018/09/Background-website-01.jpg);}
    td{text-align: center;}
    .email, .birthday, .gender{font-family:sans-serif;}
    .username{font-family:sans-serif;}
    table, tr, th, td{border: 5px solid black; border-collapse: collapse; padding:17px; font-size:50px; font-family:sans-serif;}
    .color, .phone, .date,{font-family:sans-serif;}
    .welcome{font-size:82px; text-align: center; padding:24px; border:3px solid green; border-radius:25px; background-color: rgba(175, 224, 175, 0.301); font-family:sans-serif;}
    .th1{background-color: rgba(169, 213, 214, 0.7);}
    .th2{background-color: rgba(255, 210, 218, 0.7);}
</style>
<body>
<?php
    $name = $_GET['name'];
    $surname = $_GET['surname'];
    $phone = $_GET['phone'];
    $address = $_GET['address'];
    $district = $_GET['district'];
    $province = $_GET['province'];
    $birthday = $_GET['birthday'];
    $password = $_GET['password'];
?>

    <?php

    $host   		= "localhost";
    $user      	= "whattheweb_god";
    $pass		= "Cmos35483+";
    $dbname 	= "whattheweb_database";


    $connect   = @mysqli_connect($host,$user,$pass,$dbname)
    or die("Can't connect DB");

    mysqli_query($connect, "set names utf8");

    ?>

    <?php
    $sql 	= "INSERT INTO subscription_system
				VALUES (NULL, '$name', '$surname',
    '$phone', '$address',
    '$district' ,'$province' ,'$birthday' ,'$password')";
    mysqli_query($connect,$sql) or  die("error=$sql<hr>".mysqli_error($connect));
    exit("<script>window.location='thank.php'; </script>");
    ?>
</center>
</body>
</html>
