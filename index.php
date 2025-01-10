<?php


$error = [];



if (empty($_POST["email"]))
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

if(!empty($_POST["secondNumber"]))
{
    $secondNumber = $_POST["secondNumber"];
}

if(empty($_POST["day"] && $_POST["day"] != "День"))
{
    $error["day"] = "Это обязательное поле!";
}
else
{
    $day = $_POST["day"];
}



if(empty($_POST["month"] && $_POST["month"] != "Месяц"))
{
    $error["month"] = "Это обязательное поле!";
}
else
{
    $month = $_POST["month"];
}



if(empty($_POST["year"] && $_POST["year"] != "Год"))
{
    $error["year"] = "Это обязательное поле!";
}
else
{
    $year = $_POST["year"];
}


if(empty($_POST["pol"]))
{
    $error["pol"] = "Это обязательное поле!";
}

if (!empty($error)) {
    echo ['success' => false, 'errors' => $error];
    exit();
}


$response = [
    "success" => empty($error) ? true : false, 
    "errors" => empty($error) ? "" : $error
];

echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);








// $to = "teemfase@gmail.com";
// $theme = "Form";
// $messege = "Ваш email: ".$email."<br>";   
// $messege .= "Ваш номер телефона: ".$firstNumber."<br>";
// $messege .= "Ваш доплнительный номер телефона: ".$secondNumber;
// $messege .= "Ваше имя: ".$name."<br>";
// $messege .= "Ваша фамилия: ".$surname."<br>";
// $messege .= "Ваше отчество: ".$midleName."<br>";
// $messege .= "Ваша дата рождения: ".$day.".".$month.".".$year."<br>" ;
// $messege .= "Ваш пол: ".$pol."<br>";

// $headers =  'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
// $headers .= 'От: <info@example.com>' . "\r\n";

// mail($to, $theme, $messege, $headers,);
