<?php

echo "<form style='text-align: center' action=\"../auth/auth.php\" method=\"post\">
<span style=\"text-align: center;\"><b>Регистрация</b><br></span>
        
            <p>
                <label>Ваш логин:<br></label>
                <input name=\"login\" type=\"text\" size=\"15\" maxlength=\"15\">
            </p>
            <p>
                <label>Ваш пароль:<br></label>
                <input name=\"password\" type=\"password\" size=\"15\" maxlength=\"15\">
            </p>
            <p>
                <label>Подтвердите пароль:<br></label>
                <input name=\"password_conf\" type=\"password\" size=\"15\" maxlength=\"15\">
            </p>
            <p>
                <input type=\"submit\" name=\"submit\" value=\"Зарегистрироваться\">
                <input onclick=\"showLog();\"  type=\"button\" value=\"Войти\">
            </p>
        </form>";


?>