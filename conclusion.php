<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
  <link rel="stylesheet" type="text/css" href="stylesheet/form.css">
  <title></title>
</head>
<body>
  <div class="top">
  <?php
    include 'include/login.php';
    setcookie('desire5', $_POST['desire5'], time()+60*60);
    session_start();

    echo $_COOKIE['desire'];
    echo "→";
    echo $_COOKIE['desire2'];
    echo "→";
    echo $_COOKIE['desire3'];
    echo "→";
    echo $_COOKIE['desire4'];
  ?>  
  </div>
  <div class="conclusion">
  <h2>
  <?php
    echo "今日から『";
    echo $_POST['desire5'];
    echo "』に取り組もう!!";
  ?>
  </h2>
  </div>
  <div class="twitter">
  　<a href="//twitter.com/share" class="twitter-share-button" data-text="↓今日から始めること↓" data-lang="ja">
    twitterで行動宣言しよう！
    </a>
  </div>
</body>