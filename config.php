<?php

//Declaration d'une constante 

const CONFIG_SITE_TITLE = "MVC PHP 🐘";

const CONFIG_ROUTES = [
    "home" => "home",
    "gallery" => "gallery",
    "contact" => "contact",
];

const DB_NAME = "dwwm_20_10_2023";
const DB_HOST = "localhost"; 
const DB_USER = "root"; 
const DB_PASS = ""; 

function connectDB(): PDO{ // PDO façon d'afficher un objet comme une BDD.
    $db = new PDO('mysql:host=' .DB_HOST. ';port=3306;dbname=' .DB_NAME.';charset=utf8', DB_USER,DB_PASS);
    return $db;
}