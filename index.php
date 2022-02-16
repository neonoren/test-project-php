<?php

$connect = mysqli_connect('localhost', 'root', '', 'phpfact');

$query = 'SELECT * FROM users';

$result = mysqli_query($connect, $query);

mysqli_close($connect);

$fetch = mysqli_fetch_all($result);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Тестовое задание</title>
</head>
<body>
<h1>Пользователи</h1>

<?php

foreach ($fetch as $key => $value){
    echo '<a href="delete.php?id='.$value[0].'"> '.$value[1]. ' ' .$value[2].'</a>
        <form action="delete.php" method="post">
        <input type="hidden" name="id" value="'.$value[0].'">
        <input type="submit" value="Удалить">
        </form>
</br>';
}

?>

<h3>Добавить пользователя</h3>
<form action="insert.php" method="post">
    <input type="text" name="firstname">
    <input type="text" name="lastname">
    <input type="submit" value="Добавить">
</form>

</body>
</html>