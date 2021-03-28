<?
  session_start();
  $mysqli = new mysqli('localhost','korp9000_1','ee0U&9*k','korp9000_1');
  $value = $_POST['value'];
  $item = $_POST['item']; // Тут либо lastname либо name
  $id = $_SESSION['id'];
  $mysqli->query("UPDATE `users` SET `$item`='$value' WHERE `id`=$id");
  $_SESSION[$item] = $value;
  echo json_encode(['result'=>'success']);
?>