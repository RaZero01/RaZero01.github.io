
function load(){
    $('#opn-win').modal();
    $.ajax({
        url:     "auth/login.php", //url страницы (action_ajax_form.php)
        success: function(response) { //Данные отправлены успешно
            result = response;
            $('#result_form').html(result);
        },
        error: function(response) { // Данные не отправлены
            $('#result_form').html('Ошибка. Данные не отправлены.');
        }
    });
}
function showReg() {
    $.ajax({
        url:     "auth/reg.php", //url страницы (action_ajax_form.php)
        success: function(response) { //Данные отправлены успешно
            result = response;
            $('#result_form').html(result);
        },
        error: function(response) { // Данные не отправлены
            $('#result_form').html('Ошибка. Данные не отправлены.');
        }
    });
}
function showLog() {
    $.ajax({
        url:     "auth/login.php", //url страницы (action_ajax_form.php)
        success: function(response) { //Данные отправлены успешно
            result = response;
            $('#result_form').html(result);
        },
        error: function(response) { // Данные не отправлены
            $('#result_form').html('Ошибка. Данные не отправлены.');
        }
    });

}
function showLinks() {
    alert("HETE");
    $.ajax({
        url:     "auth/login.php", //url страницы (action_ajax_form.php)
        success: function(response) { //Данные отправлены успешно
            result = response;
            $('#sucess_login').html(result+'hej');
        },
        error: function(response) { // Данные не отправлены
            $('#sucess_login').html('Ошибка. Данные не отправлены.');
        }
    });
}