<?php

//report errors
error_reporting (E_ALL);
ini_set ("display_errors", 1);

//import class
include_once "classes/Page_Data.class.php";
//object of the class
$pageData = new Page_Data();
$pageData->title = "Dynamic Image Gallery";
$pageData->content = include_once "views/navigation.php";

//inserting the CSS using the object method declared in Page_Data class
$pageData->addCSS('css/layout.css');
$pageData->addCSS('css/navigation.css');

//get interaction from the user
$userClicked = isset($_GET['page']);
if ($userClicked) {
    $fileToLoad = $_GET['page'];
}else{
    $fileToLoad = "gallery"; //the default view page
}

$pageData->content .= include_once "views/$fileToLoad.php";
$page = include_once "templates/page.php";
echo $page;