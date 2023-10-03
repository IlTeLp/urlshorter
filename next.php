<?php
$name=$_POST['username'];
$mail=$_POST['email'];
$pass=$_POST['password'];
if(trim($name == '')) {
    echo "Не введено имя пользователя!";
}
else if(trim($mail)=='') {
    echo "Не указана почта!";
}
else if (trim($pass)=='') {
    echo "Не указан пароль!";
}
else if(strlen(trim($pass)<=5)){
    echo "Пароль должен состоять не менее чем из 5 символов!";
}
else{
    header('Location: about.php');
}