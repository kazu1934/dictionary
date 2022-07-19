<!DO<DOCTYPE html>

<htm
    <head>
        <title>私のPHP,MYSQL用語辞典</title>
        <meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <h1>
            私のPHP,MYSQL用語辞典
        </h1><br/>
        <!-- <h3>自分のお気に入りのお店を登録しましょう。</h3>-->
    <li>アプリの説明---学習した用語をコメントを加え登録しましょう。</li>
        <?php
        try {

            $dsn = 'mysql:dbname=portfolio;host=localhost;charset=utf8';
            $user = 'root';
            $password = '';
            $dbh = new PDO($dsn, $user, $password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = 'SELECT * FROM topics WHERE 1';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();

            $dbh = null;

            print '<h2><li>お知らせ</li></h2>';

            print '<form method="post" action="topics_branch.php">';
            while (true) {
                $rec = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($rec == false) {
                    break;
                }
                print '<input type="radio" name="id" value="' . $rec['id'] . '">';
                print $rec['comment'] . '---';
                print $rec['date'] . '';
                print '<br />';
            }


            print '<input type="submit" name="add" value="追加">';
//print '<input type="submit" name="edit" value="修正">';
            print '<input type="submit" name="delete" value="削除">';
            print '</form>';
        } catch (Exception $e) {
            print 'ただいま障害により大変ご迷惑をお掛けしております。';
            exit();
        }
        ?>

        <h2><li>検索</li></h2>
        コメント内の用語を検索出来ます。
        <form action="serch.php" method="post">
            <!-- 任意の<input>要素＝入力欄などを用意する -->
            <input type="text" name="name">
            <!-- 送信ボタンを用意する -->
            <input type="submit" name="submit" value="用語を検索する">
        </form>

        <h3><li>用語を登録しましょう。</li></h3>

        <form method="post" action="dictionary_add_check.php" enctype="multipart/form-data">

            index  <select name="genre">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
                <option value="I">I</option>
                <option value="J">J</option>
                <option value="K">K</option>
                <option value="L">L</option>
                <option value="M">M</option>
                <option value="N">N</option>
                <option value="O">O</option>
                <option value="P">P</option>
                <option value="Q">Q</option>
                <option value="R">R</option>
                <option value="S">S</option>
                <option value="T">T</option>
                <option value="U">U</option>
                <option value="V">V</option>
                <option value="W">W</option>
                <option value="X">X</option><!-- comment -->
                <option value="Y">Y</option><!-- comment -->
                <option value="Z">Z</option><!-- comment -->
                <option value="その他">その他</option>





            </select>

            <input type="text" name="name" style="width:100px" placeholder="用語">


            <input type="text" name="comment" style="width:200px" placeholder="コメント">

            <input type="submit" value="OK">
        </form>
        <br/>
        <style>
            .example{
                text-align: center;
            }
        </style>
        <br/>


        <div>
            <ul>
                <li> <h3><a href="./A_Z_dictionary/dictionary_A.php">A</a>   <a href="./A_Z_dictionary/dictionary_B.php">B</a> <a href="./A_Z_dictionary/dictionary_C.php">C</a> <a href="./A_Z_dictionary/dictionary_D.php">D</a></h3></li>
                <li> <h3><a href="./A_Z_dictionary/dictionary_E.php">E</a>　<a href="./A_Z_dictionary/dictionary_F.php">F</a>　<a href="./A_Z_dictionary/dictionary_G.php">G</a>　<a href="./A_Z_dictionary/dictionary_H.php">H</a></h3></li>
                <li><h3><a href="./A_Z_dictionary/dictionary_I.php">I</a>　<a href="./A_Z_dictionary/dictionary_J.php">J</a>　<a href="./A_Z_dictionary/dictionary_K.php">K</a>　<a href="./A_Z_dictionary/dictionary_L.php">L</a></h3></li>
                <li> <h3><a href="./A_Z_dictionary/dictionary_M.php">M</a>　<a href="./A_Z_dictionary/dictionary_N.php">N</a>　<a href="./A_Z_dictionary/dictionary_O.php">O</a>　<a href="./A_Z_dictionary/dictionary_P.php">P</a></h3></li>
                <li><h3><a href="./A_Z_dictionary/dictionary_O.php">O</a>　<a href="./A_Z_dictionary/dictionary_P.php">P</a>　<a href="./A_Z_dictionary/dictionary_Q.php">Q</a>　<a href="./A_Z_dictionary/dictionary_R.php">R</a></h3></li>
                <li><h3><a href="./A_Z_dictionary/dictionary_S.php">S</a>　<a href="./A_Z_dictionary/dictionary_T.php">T</a>　<a href="./A_Z_dictionary/dictionary_U.php">U</a>  <a href="./A_Z_dictionary/dictionary_V.php">V</a></h3></li>
                <li> <h3> <a href="./A_Z_dictionary/dictionary_W.php">W</a>  <a href="./A_Z_dictionary/dictionary_X.php">X</a>  <a href="./A_Z_dictionary/dictionary_Y.php">Y</a>  <a href="./A_Z_dictionary/dictionary_Z.php">Z</a></h3></li>
                <li> <h3> <a href="./A_Z_dictionary/dictionary_else.php">その他</a>
            </ul>
        </div>

    </body>
</html>

