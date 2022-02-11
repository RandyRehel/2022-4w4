<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscore
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head() ?>
</head>
<body <?php body_class("site") ?> >
<header class="site__header">
    <h1 class="header__titre"><?php bloginfo('name') ?></h1>
    <h2 class="header__description"> <?php bloginfo('description') ?></h2>
</header>


<section class="site__barre">
    <input type = "checkbox" id = "chk-burger">
    <label for = "chk-burger" id = "burger">
    <svg width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#000"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg></label> 
    <?php wp_nav_menu(array("menu" => "principal",
                            "container" => "nav"));?>
</section>


<!--
<section class="site__barre">
    <nav class="navigation">
        <a href="" class="navigation__lien">mon lien 001</a>
        <a href="" class="navigation__lien">mon lien 002</a>
        <a href="" class="navigation__lien">mon lien 003</a>
        <a href="" class="navigation__lien">mon lien 004</a>
        <a href="" class="navigation__lien">mon lien 005</a>
        <a href="" class="navigation__lien">mon lien 006</a>
        <a href="" class="navigation__lien">mon lien 007</a>
        <a href="" class="navigation__lien">mon lien 008</a>
        <a href="" class="navigation__lien">mon lien 009</a>
        <a href="" class="navigation__lien">mon lien 010</a>
    </nav>
</section>
--> 

