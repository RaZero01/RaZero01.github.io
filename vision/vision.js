$( document ).ready(function() {

    $("#btntab").click(
        function(){
                sendAjaxForm('result_form', 'ajax_form', "../vision/table_vision.php");
            return false;
        }
    );
    $("#btnchart").click(
        function(){
            sendAjaxForm('result_form', 'ajax_form', '../vision/chart_vision.php');
            return false;
        }
    );
    $("#btncomment").click(
        function(){
            sendAjaxForm('result_form', 'ajax_form', '../vision/table_vision.php');
            return false;
        }
    );
});

function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url, //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
            result = response;
            $('#result_form').html('<br>'+response);
        },
        error: function(response) { // Данные не отправлены
            $('#result_form').html('Ошибка. Данные не отправлены.');
        }
    });
}