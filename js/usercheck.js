
function usercheck()
{
// em - e-mail пользователя.

    em = document.forma2.email.value;
// 1-е условие - непустое поле Ф.И.О

    u1=(document.forma2.user.value != "");

// 2-е условие - возраст от 10 до 70 лет

    u2=((document.forma2.age.value > 10)&(document.forma2.age.value

        < 70));
// 3-е условие - наличие в email @ и точки

    u3=((em.indexOf ( "@") != -1)&(em.indexOf (".")  != -1));
    if ((u1)&(u2)&(u3))
// Если все три условия выполняются, то отправим форму.
    {
        document.forma2.submit;
    }
    else
// Иначе выведем сообщение об ошибке
    {
        alert("Ошибка!\nПроверьте правильность ввода!")
    }
}