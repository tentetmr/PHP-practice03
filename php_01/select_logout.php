<?php
session_start();
include("funcs.php");

$pdo =  db_connect();

$stmt = $pdo->prepare("SELECT * FROM sns_contents");
$status = $stmt->execute();

$view="";
if($status==false) {
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

} else {
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<div class"postBlock">';
    $view .= "<p>".$result["u_name"]."</p>";
    $view .= "<p>".$result["contents"]."</p>";
    $view .= "<p>".$result["indate"]."</p>";
    $view .= "</div>";
    
  }

}
?>
