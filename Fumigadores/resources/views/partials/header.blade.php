<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="/css/lampone.css">
    <title> Los Simuladores </title>
  </head>



<body>
    <div class="container">   <!--container-fluid abarca toda la pantalla y a este le falta img de fondo -->
      <header class="main-header">  
        <div class="">

          <img src="imgs/logo.png" alt="logo" class="logo">

        </div>


<?php
              if(isset($_SESSION["nombre"])){ ?>

<nav class="nav" >    <!-- <div class="jumbotron text-center"> TE CENTRA EL TEXTO EN UNA LINEA Y LE AGREGAMOS LO DE NAV, nav y class nav no tienen nada -->
  <h1> Hola, <?=$_SESSION["nombre"];?>!</h1> <!-- PONDRIA EL H1 AFUERA DEL NAV -->
  <ul class="izquierda"> 
    <li><a href="index.php"> HOME </a></li>
    <li><a href="preguntas.php"> REGLAS</a></li>
    <li> <a href="logout.php"> LOG OUT</a>  </li>
  </ul>
</nav>

        <?php
      }else{  ?>

<nav>
  <ul>
    <li><a href="index.php"> HOME </a></li>
    <li><a href="preguntas.php"> REGLAS</a></li>
    <li><a href="login.php"> LOGIN </a></li>
    <li><a href="register.php"> REGISTRO </a></li>
  </ul>
</nav>


        <?php
        }
      ?>