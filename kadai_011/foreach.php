<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       // 変数に値を代入する
       $itemes=['名前'=>'玉ねぎ', '値段'=>200,'産地'=>'北海道'];
       
       // 連想配列のキーと値を1つずつ順番に出力する
        foreach ($itemes as $key => $value) {
            echo "{$key}:{$value}<br>";
        }
       ?>
   </p>
</body>

</html>