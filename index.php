<?php


$error = [];


if (isset($_POST["email"]))
{
    if (empty($_POST["email"]) && $_POST["email"] !== "")
    {
        $error["email"] = "Это обязательное поле!";
    }
    else
    {
        $email = $_POST["email"];
    }
}



if(empty($_POST["name"] && $_POST["name"] !== ""))
{
    $error["name"] = "Это обязательное поле!";
}
else
{
    $name = $_POST["name"];
}



if(empty($_POST["surname"] && $_POST["surname"] !== ""))
{
    $error["surname"] = "Это обязательное поле!";
}
else
{
    $surname = $_POST["surname"];
}


if(empty($_POST["midleName"] && $_POST["midleName"] !== ""))
{
    $error["midleName"] = "Это обязательное поле!";
}
else
{
    $midleName = $_POST["midleName"];
}


if(empty($_POST["firstNumber"] && $_POST["firstNumber"] !== ""))
{
    $error["firstNumber"] = "Это обязательное поле!";
}
else
{
    $firstNumber = $_POST["firstNumber"];
}

function getDopNumb()
{
    if(isset($_POST["secondNumber"]))
    {
        $secondNumber = $_POST["secondNumber"];
        return $dopNumb = "Ваш дополнительный номер телефонa:" . $secondNumber;
    }
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



if(empty($_POST["pol"] && $_POST["pol"] !== ""))
{
    $error["pol"] = "Это обязательное поле!";
}
else
{
    $pol = $_POST["pol"];
}


$response = [
    "success" => empty($error) ? "true" : "false", 
    "errors" => empty($error) ? "" : $error
];

echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);








// $to = "teemfase@gmail.com";
// $theme = "Form";
// $messege = "Ваш email: ".$email."<br>";   
// $messege .= "Ваш номер телефона: ".$firstNumber."<br>";
// $messege .= "Ваше имя: ".$name."<br>";
// $messege .= "Ваша фамилия: ".$surname."<br>";
// $messege .= "Ваше отчество: ".$midleName."<br>";
// $messege .= "Ваша дата рождения: ".$day.".".$month.".".$year."<br>" ;
// $messege .= "Ваш пол: ".$pol."<br>";

// $headers =  'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
// $headers .= 'От: <info@example.com>' . "\r\n";

// mail($to, $theme, $messege, $headers,);
