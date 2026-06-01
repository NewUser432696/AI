<?php

session_start();

if(!isset($_SESSION['login'])){

    header("Location: auth/login.php");

}

?>

<!DOCTYPE html>
<html>
<head>

<title>Sistem PKH kNN</title>

<style>

body{

    font-family: Arial;
    background: #f5f5f5;
    padding: 30px;

}

.container{

    background: white;
    padding: 30px;
    border-radius: 10px;

}

.menu{

    display: block;
    width: 250px;
    padding: 15px;
    margin-top: 15px;
    background: royalblue;
    color: white;
    text-decoration: none;
    border-radius: 5px;

}

.logout{

    background: crimson;

}

</style>

</head>

<body>

<div class="container">

<h1>SISTEM PKH MACHINE LEARNING kNN</h1>

<h3>

Selamat Datang,
<?= $_SESSION['nama_user']; ?>

</h3>

<a href="pages/input_data.php"
class="menu">

Input Prediksi

</a>

<a href="pages/hasil_prediksi.php"
class="menu">

Hasil Prediksi

</a>

<a href="pages/dataset.php"
class="menu">

Data Dataset

</a>

<a href="auth/logout.php"
class="menu logout">

Logout

</a>

</div>

</body>
</html>
