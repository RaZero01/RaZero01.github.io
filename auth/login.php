<?php

echo "    
        <form  action=\"../auth/connect.php\" style=\"text-align: center;\" method=\"post\">
        <span style=\"text-align: center;\"><b>Авторизация</b><br></span>
        <input name=\"login\" type=\"text\" placeholder=\"Логин\">
        <input name=\"password\" type=\"password\"  placeholder=\"Пароль\">
        <div><input type=\"submit\" name=\"submit\" value=\"Войти\">
        <form action=\"\" method=\"POST\">
        <input onclick=\"showReg();\"  type=\"button\" value=\"Зарегистрироваться\">
        </form>
        </div>
    </form>";

?>