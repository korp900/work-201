<?
  $mysqli = new mysqli('localhost','korp9000_1','ee0U&9*k','korp9000_1');
  $result = $mysqli->query("SELECT * FROM blog");
  // NULL == false
  // Наличие чего либо это всегда TRUE
  $posts = [];
  while($row = $result->fetch_assoc()){
    $posts[] = $row;
  }
  echo json_encode($posts);
?>