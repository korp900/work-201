<?
  $mysqli = new mysqli('localhost','korp9000_1','ee0U&9*k','korp9000_1');
  $id = $_POST['id'];
  $result = $mysqli->query("SELECT * FROM blog WHERE id=$id");
  echo json_encode($result->fetch_assoc());
?>