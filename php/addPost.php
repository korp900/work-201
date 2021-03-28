<?
  $mysqli = new mysqli('localhost','korp9000_1','ee0U&9*k','korp9000_1');
  $title = $_POST['title'];
  $text = $_POST['text'];
  $author = $_POST['author'];
  
  $mysqli->query("INSERT INTO `blog`(`title`, `text`, `author`) VALUES ('$title','$text','$author')");
  echo json_encode(['result'=>'success']);
?>