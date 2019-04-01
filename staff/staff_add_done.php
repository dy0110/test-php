<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ろくまる農園</title>
</head>
<body>
    <?php
        // トライキャッチ
        try{
            // POSTから受け取り => UTF8に
            $staff_name = $_POST['name'];
            $staff_pass = $_POST['pass'];

            $staff_name = htmlspecialchars($staff_name, ENT_QUOTES, 'UTF-8');
            $staff_pass = htmlspecialchars($staff_pass, ENT_QUOTES, 'UTF-8');

            // DB接続
            $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
            $user='root';
            $password='root';
            $dbn=new PDO($dsn, $user, $password);
            $dbn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // レコード生成
            $sql = 'INSERT INTO mst_staff(name,password) VALUES (?,?)';
            $stmt = $dbn->prepare($sql);
            $data[] = $staff_name;
            $data[] = $staff_pass;
            $stmt->execute($data);

            // db切断
            $dbn = null;

            print $staff_name;
            print 'さんを追加しました。<br>';

        } catch(Exception $e){
            print 'ただいま障害により大変ご迷惑をおかけしております。';
            exit();
        }
    ?>
    <a href="staff_list.php">戻る</a>
</body>
</html>