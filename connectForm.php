<?php
if (isset($_POST['name'])){
    // Переменные с формы
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    
    // Параметры для подключения
    $db_host = 'localhost'; 
    $db_user = 'root'; // Логин БД
    $db_pass = '';
    $db_base = 'saloon'; // Имя БД
    
    // Устанавливаем соединение
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_base);

    // Проверяем соединение
    if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
    }
        // Подготавливаем SQL-запрос
        $sql = "INSERT INTO comment(`name`, `email`, `comment`) VALUES ('$name', '$email', '$comment')";

    if (mysqli_query($conn, $sql)) {
          echo "Новый заказ успешно создан, ожидайте ответа.";
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

    