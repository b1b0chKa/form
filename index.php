<?php

$error = [];

if (empty($_POST["email"]) && $_POST["email"] !== "")
{
    $error["email"] = "Это обязательное поле!";
}



if(empty($_POST["name"]))
{
    $error["name"] = "Это обязательное поле!";
}



if(empty($_POST["surname"]))
{
    $error["surname"] = "Это обязательное поле!";
}


if(empty($_POST["midleName"]))
{
    $error["midleName"] = "Это обязательное поле!";
}


if(empty($_POST["firstNumber"]))
{
    $error["firstNumber"] = "Это обязательное поле!";
}



if(empty($_POST["day"]))
{
    $error["day"] = "Это обязательное поле!";
}



if(empty($_POST["month"]))
{
    $error["month"] = "Это обязательное поле!";
}



if(empty($_POST["year"]))
{
    $error["year"] = "Это обязательное поле!";
}



if(empty($_POST["pol"]))
{
    $error["pol"] = "Это обязательное поле!";
}
