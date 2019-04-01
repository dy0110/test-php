<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- PHPのエリア -->
    <?php
        // POSTのデータを変数に格納
        $staff_name = $_POST['name'];
        $staff_pass = $_POST['pass'];
        $staff_pass2 = $_POST['pass2'];
        // 入力チェックフラグ
        $name_flg = false;
        $pass_flg = false;

        // 文字コードをUTF8にする
        $staff_name = htmlspecialchars($staff_name, ENT_QUOTES, 'UTF-8');
        $staff_pass = htmlspecialchars($staff_pass, ENT_QUOTES, 'UTF-8');;
        $staff_pass2 = htmlspecialchars($staff_pass2, ENT_QUOTES, 'UTF-8');;

        // 各パラメータの入力チェック
        // 名前
        if( $staff_name == '' ){
            print('<p style="color: red;">スタッフ名が入力されていません</p><br>');
            $name_flg = true;
        } else {
            print('スタッフ名');
            print($staff_name);
            print('<br>');
        }
        // パスワード
        if( $staff_pass == '' || $staff_pass2 == '' ){
            print('<p style="color: red;">パスワードが入力されていません</p><br>');
            $pass_flg = true;
        }
        if( $staff_pass != $staff_pass2 ){
            print('<p style="color: red;">パスワードが一致しません</p><br>');
            $pass_flg = true;
        }

        // 入力値の結果で表示部分を切り替える
        if( $name_flg == true || $pass_flg == true ){
            print('<button onclick="history.back()">戻る</button>');
        } else {
            // パスワードをハッシュ値にする
            $staff_pass = md5($staff_pass);
            $msg = <<<eot
            <form method="post" action="staff_add_done.php">
                <input type="hidden" name="name" value="$staff_name">
                <input type="hidden" name="pass" value="$staff_pass">
                <br>
                <button onclick="history.back()">戻る</button>
                <button type="submit">OK</button>
            </form>
eot;
            print $msg;
        }

    ?>
</body>
</html>