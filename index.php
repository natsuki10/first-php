<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題</title>
</head>
<body>
  <p>日本の首都は？</p>  
  <form action="index.php" method="POST">
    <input type="text" name="answer">
    <input type="submit" value="OK">
    <br>
    <?php
    $answer = $_POST['answer'];
    if ($answer === '東京') {
        echo '正解' ;
    } else {
        echo '不正解' ;
    }
    ?>
  </form>
</body>
</html>