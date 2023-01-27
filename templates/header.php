<?php 
    include_once("./helpers/url.php");
    include_once("./data/categories.php");
    include_once("./data/posts.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
    <title>Tech Blog</title>
</head>
<body>
    <header>
        <a href="<?php $BASE_URL ?>" id="logo">
            <img src="./img/logo.svg" alt="Tech Blog">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?php $BASE_URL ?>./" class="navlink">Home</a></li>
                <li><a href="#" class="navlink">Categorias</a></li>
                <li><a href="#" class="navlink">Sobre</a></li>
                <li><a href="<?php $BASE_URL ?>contato.php" class="navlink">Contato</a></li>
            </ul>
        </nav>
    </header>