<?php require 'connect.php'?>

<html>
    <head>
        <title>Заказать автомомбиль</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/logotip.ico">
    </head>
<body>
    <div><a href="/cars/m.php"><img src="/cars/img/logotip.png" alt="" style="width: 80px; height: 80px;"></a></div>
    <form method="POST" action="connect.php">
        <input name="name" type="varchar" placeholder="ФИО"/>
        <input name="phone" type="varchar" placeholder="Номер телефона"/>
        <input name="email" type="varchar" placeholder="Почта"/>
        <input name="vehicle" type="varchar" placeholder="Автомобиль"/>
        <input type="submit" value="Отправить"/>
    </form>
</body>
</html>