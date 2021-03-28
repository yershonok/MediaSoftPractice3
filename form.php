<?php
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
$surname = filter_var(trim($_POST['surname']),FILTER_SANITIZE_STRING);
if (mb_strlen($login)<5 || mb_strlen($login)>90)
{
     echo "Недопустимая длина логина";
    exit;
}

else if (mb_strlen($name) < 3 || mb_strlen($name)>50)
{
     echo "Недопустимая длина имени";
    exit;
}
elseif (!preg_match('/^[а-яА-Я]+$/iu', $name)) {
    echo "В имени не должно быть чисел!";
    exit;
}
else if (mb_strlen($surname) < 3 || mb_strlen($surname)>50)

{
     echo "Недопустимая длина фамилии";
    exit;
}
elseif (!preg_match('/^[а-яА-Я]+$/iu', $surname)) {
    echo "В фамилии не должно быть чисел!";
    exit;
}
else if (!preg_match("#[0-9]+#", $pass))
{
     echo $passnum = "Пароль должен включать хотя бы одну цифру!";
    exit;
}


header('location: /' );
?>