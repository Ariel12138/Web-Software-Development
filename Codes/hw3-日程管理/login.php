<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Ariel Gao">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/main.css">

</head>

<body>
    <div id="container">
        <div class="bg">
            <div class="app_banner"></div>
            <div class="choice_right">
                <div class="manager"></div>
                <div class="help"></div>
                <div class="SignIn"></div>
            </div>
            <div class="login_main">
                <div class="login">
                    <form action=# method="POST" class="login_form">
                        <fieldset>
                        <?php
                        include("conn.php");
                        session_start();
                        unset($_SESSION["username"]);
                        unset($_SESSION["userid"]);
                        //session_destroy(); //清空以创建的所有SESSION

                        if(!empty($_POST['username'])){
                            $username = $_POST['username'];
                            $password = $_POST['password'];
                            $sql = "SELECT * FROM `user` WHERE username = '$username' AND password = '$password'";
                            $query = $db->query($sql)->fetch();//->fetchAll(PDO::FETCH_ASSOC);
                            if($query){
                            $_SESSION["username"] = $username;
                            $_SESSION["userid"] = $query['id'];
                            // print_r($query['id']);
                            //header("Location: test.php?g=".$_SESSION["g"]); 
                        } 
                            else {
                            echo "用户名或密码错误！";
                            }
                        }
                        ?>
                            <legend>登录表单</legend>
                            <div class="username"><input name="" type="text" placeholder=" username" /></div>
                            <div class="password"><input name="" type="password" placeholder=" password" /></div>
                            <div class="login_btn"><input name="" type="button" value="login" /></div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>