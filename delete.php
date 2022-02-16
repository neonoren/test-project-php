<?php

class Database
{

    function connect(){
        return mysqli_connect('localhost', 'root', '', 'phpfact');
    }
    function get($query){
        $connect = $this->connect();
        $result = mysqli_query($connect, $query);
        return mysqli_fetch_all($result);
    }
}
$id = $_POST['id'];
$database = new Database();
$query = 'DELETE FROM users where id = '.$id;
$users = $database->get($query);

?>

<meta http-equiv="refresh" content="1"; url="index.php">
