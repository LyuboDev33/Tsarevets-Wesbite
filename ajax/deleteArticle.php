<?php 

require "../databaseConnection/database.php";


$data = json_decode(file_get_contents('php://input'), true);

$id = $data['dataLINK'];


$sql = "DELETE FROM blog_main_page WHERE link = '$id'";
$query = mysqli_query($conn, $sql);


if ($query) {
  echo json_encode(array('status' => 'deleteSuccess'));

} 
