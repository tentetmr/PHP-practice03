<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">

  <title>Document</title>
</head>
<body>
<header>
<!-- ログインフィールド -->

<form method="post" action="login_act.php" class="post">
  <div class="">
  <form action="">
    <p>フリーアンケート</p>
    
     <p>ID：<input type="text" name="lid"></p>
     <p>PW：<input type="text" name="lpw"></p>
     <input type="submit" value="ログイン">

    </form>
  </div>
</form>

</header>
<main>

<!-- セレクトフィールド -->
<div class="postContents">
<?php
include("select_logout.php");
echo $view;
?>
</div>

</main>
<footer>
<!-- フッターフィールド -->
</footer>
</body>
</html>