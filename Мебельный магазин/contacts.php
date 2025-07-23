<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/contacts.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/katalog.css">
    <script src="https://kit.fontawesome.com/b0e00cbeb4.js" crossorigin="anonymous"></script>
    <title>Контакты</title>
</head>
<a href="#" id="scrollToTopButton" class="scroll-to-top-button">
    <i class="fas fa-arrow-up"></i>
</a>
<body>
<?php require "header.php"; ?>
    <section class="contact-section">
        <div class="container"> 
            <h2 class="section-title">Контакты</h2>
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Адрес: 5 острокозырьковая улица, Омск, Россия</p>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <p>Телефон: +7 622 831 92 81</p>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <p>Email: info@example.com</p>
                </div>
            </div>
            <div class="contact-form">
                <h3 class="form-title">Напишите нам</h3>
                <?php
                if ($message) {
                    echo '<p class="message">' . $message . '</p>';
                }
                ?>
                <form id="contactForm">
                    <input type="text" name="name" placeholder="Ваше имя">
                    <input type="email" name="email" placeholder="Ваш Email">
                    <textarea name="message" placeholder="Сообщение"></textarea>
                    <button type="button" onclick="submitForm()">Отправить</button>
                </form>
            </div>
        </div>
    </section>
    <?php include "footer.php" ?>
    <script>
        function submitForm() {
            var formData = new FormData(document.getElementById('contactForm'));

            // Отправляем данные асинхронно
            fetch('contacts_form.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                // Обрабатываем ответ
                document.querySelector('.contact-form').innerHTML = '<p class="message">' + data.message + '</p>';
            })
            .catch(error => {
                console.error('Ошибка:', error);
            });
        }
    </script>
<script>
    function submitForm() {
        // Get form data
        var formData = new FormData(document.getElementById('contactForm'));

        // Perform simple validation
        var name = formData.get('name');
        var email = formData.get('email');
        var message = formData.get('message');

        if (!name || !email || !message) {
            alert('Пожалуйста, заполните все поля!');
            return;
        }

        // If all required fields are filled, proceed with the fetch request
        fetch('contacts_form.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Handle the response
            document.querySelector('.contact-form').innerHTML = '<p class="message">' + data.message + '</p>';
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
</script>

</body>
</html>