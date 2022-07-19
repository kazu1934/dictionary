<link rel="stylesheet" href="style.css">
<?php
try{
    //DBに接続
    $dsn = 'mysql:dbname=portfolio; host=localhost';
    $username= 'root';
    $password= '';
    $pdo = new PDO($dsn, $username, $password);

    //SQL文を実行して、結果を$stmtに代入する。
    $stmt = $pdo->prepare(" SELECT * FROM dictionary WHERE  comment LIKE '%" . $_POST["name"] . "%' "); 

    //実行する
    $stmt->execute();
    //echo "OK";
   // var_dump($stmt);
    echo "<br>";
} catch(PDOException $e){
    echo "失敗:" . $e->getMessage() . "\n";
    exit();
}
?>


<html>
    <body>
        <table>
            <tr><th>用語</th><th>コメント</th><th>日時</th></tr>
            <!-- ここでPHPのforeachを使って結果をループさせる -->
            <?php foreach ($stmt as $row): ?>
            <tr>
              <td><?php echo $row[1]."---"?></td></br>
                <td><?php echo $row[2]."---"?></td>
                <td><?php echo $row[3]?></td>
            </tr>

                <?php endforeach; ?>
        </table>
        <a href="dictionary_top.php"> 戻る</a>
    </body>
</html>

 