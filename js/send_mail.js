document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("myForm");

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Зупиняємо стандартну подію відправки форми

        var formData = new FormData(form);

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "send_mail.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    // Ваш код, який виконується після успішної відправки
                    alert("Повідомлення відправлено успішно!");
                } else {
                    // Ваш код, який виконується в разі помилки
                    alert("Виникла помилка під час відправки повідомлення.");
                }
            }
        };
        xhr.send(formData);
    });

    function clearForm() {
        var inputs = form.getElementsByTagName("input");
        var textarea = form.getElementsByTagName("textarea")[0];

        for (var i = 0; i < inputs.length; i++) {
            inputs[i].value = ""; // Очищаємо значення полів вводу
        }

        if (textarea) {
            textarea.value = ""; // Очищаємо значення текстового поля
        }
    };
});